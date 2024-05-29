<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File as RulesFile;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pictures = Pictures::all();
        $imgID = '';
        return view('private.picUp', ['pictures' => $pictures, 'imgID' => $imgID]);    
    }

    /**
     * Kép feltöltés.
     */
    public function create(Request $request)
    {
        $rules = [
            'title' => 'min:3',
            'picturesURL' => 'required|image|mimes:png,jpg,jpeg,webp|max:10240',
        ];
        $messages = [
            'min' => 'A kép neve minimum 3 karakter hosszúnak kell lennie!',
            'mimes' => 'A kép formátuma helytelen!',
            'max' => 'A kép mérete túl nagy!',
            'required' => 'A kép formátuma nem mefelelő!',
        ];

        $request->validate($rules, $messages);

        if($request->has('pictureURL'))
        {
            $file = $request->file('pictureURL');
            $extension = $file->getClientOriginalExtension();

            $filename = Carbon::now()->format('His'). '.' .$extension;
            //$filename = time().'.'.$extension;

            $path = 'img/upload/';
            $file->move($path, $filename);
        }
        Pictures::create([
            'title' => $request->input('title'),
            'imgPlace' => $path.$filename,


        ],);
        
        return redirect()->route('picUploader')->with('status', 'A kép sikeresen mentve lett!');
    }
    /**
     * Kép szerkesztés.
     */
    public function edit(Request $request, $id)
    {
        $rules = [
            'newTitle' => 'min:3',
        ];
        $messages = [
            'min' => 'A kép neve minimum 3 karakter hosszúnak kell lennie!',
        ];

        $request->validate($rules, $messages);
        $picture = Pictures::find($id);
        return response()->json([
            'status'=>200,
            'picture' => $picture,
        ]);
    }
    public function update(Request $request)
    {
        $img_id = $request->input('img_id');
        $picture = Pictures::find($img_id);
        $picture->title = $request->input('newTitle');
        $picture->update();

        return redirect()->route('picUploader')->with('status', 'A kép adatai frissültek!');
    }
    public function questDestroy($id)
    {
        $picture = Pictures::find($id);
        return response()->json([
            'status'=>200,
            'picture' => $picture,
        ]);
    }
    /*
     *Kép trölés
    */
    public function destroy(Request $request)
    {
        $img_id = $request->input('delimg_id');
        $picture = Pictures::find($img_id);
        $picturePath = 'img/upload/' . $picture->title;
        File::delete($picturePath);
        $picture->delete();
        return redirect()->route('picUploader')->with('status', 'A kép sikeresen törölve lett!');
    }
}

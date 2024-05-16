<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;

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
        if($request->has('pictureURL'))
        {
            $file = $request->file('pictureURL');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

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
        $picture = Pictures::find($id);

        return view('private.editModal', ['id' => $id]);
    }
    public function update(Request $request, string $id)
    {
        $picture = Pictures::find($id);
        $picture->title = $request->input('newTitle');
        $picture->update();

        return redirect()->route('picUploader')->with('status', 'A kép adatai frissültek!');
    }
    public function questDestroy(Request $request, $id)
    {
        $picture = Pictures::find($id);
        $delID = $id->id;
        return view('private.xmodal', ['picture' => $picture, 'delID' => $delID]);
    }
    /*
     *Kép trölés
    */
    public function destroy($delID)
    {
        $picture = Pictures::find($delID);
        $picture->delete();
        return redirect()->back()->with('status', 'A kép sikeresen törölve lett!');
    }
}

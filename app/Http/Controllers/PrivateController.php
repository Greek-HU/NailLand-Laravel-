<?php

namespace App\Http\Controllers;

use App\Models\NailSize;
use App\Models\NailType;
use App\Models\Pictures;
use App\Models\User;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function editService()
    {
        $user = User::find(1);
        $nailTypes = NailType::all();
        $nailSizes = NailSize::all();
        
        return view('private.editService', 
        ['nailTypes' => $nailTypes, 
        'nailSizes' => $nailSizes
        ]);
    }
    public function updateType(Request $request)
    {
        $nailTypes = NailType::find(1);
        $nailTypes->type = $request->input('editnailtype');
        $nailTypes->update();

        return redirect()->route('editService')->with('status','A típus sikeresen elmentve!');
    }
    public function editNail(NailSize $id)
    {
        $nailTypes = NailType::all();
        $nailSizes = NailSize::all();
        $oldSizes = NailSize::find($id);
        $newid = $id->id;
        return view('private.editSize', 
        ['nailTypes' => $nailTypes,
        'nailSizes' => $nailSizes,
        'oldSizes' => $oldSizes,
        'newid' => $newid], compact('oldSizes')
    );
    }
    public function updateNail(Request $request, $newid)
    {
        $nailSizes = NailSize::find($newid);
        $nailSizes->size_name = $request->input('newSize');
        $nailSizes->price = $request->input('newPrice');
    
        $nailSizes->update();

        return redirect()->route('editService')->with('status','A Méret és/vagy Ár sikeresen mentve!');
    }
    public function picUploader()
    {
        $pictures = Pictures::all();

        return view('private.picUp', ['pictures' => $pictures]);
    }
    public function storeImage(Request $request)
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
    public function editContact()
    {
        $user = User::find(1);
        return view('private.editContact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function updateCont(Request $request)
    {
        $user = User::find(1);
        $user->email = $request->input('newEmail');
        $user->phoneNum = $request->input('newPhoneNum');

        $user->address = $request->input('newAddress');

        $user->update();

        return redirect()->route('editContForm')->with('status','Student Updated Successfully');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

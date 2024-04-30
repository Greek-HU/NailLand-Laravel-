<?php

namespace App\Http\Controllers;

use App\Models\NailSize;
use App\Models\NailType;
use App\Models\User;
use App\Models\Price;
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
        $nailPrices = Price::all();
        
        return view('private.editService', 
        ['nailTypes' => $nailTypes, 
        'nailSizes' => $nailSizes,
        'nailPrices' => $nailPrices
        ]);
    }
    public function updateType(Request $request)
    {
        $nailTypes = NailType::find(1);
        $nailTypes->type = $request->input('editnailtype');
        $nailTypes->update();

        return redirect()->route('editService')->with('status','A típusok, méretek és árak sikeresen elmentve!');
    }
    public function editSize(NailSize $id)
    {
        $nailTypes = NailType::all();
        $price = $id->price;
        return view('private.editSize', compact('price'), 
        ['nailTypes' => $nailTypes]);
    }
    public function updateSize(Request $request)
    {
        $nailTypes = NailType::find(1);
        $nailTypes->type = $request->input('editnailtype');
        $nailTypes->update();

        return redirect()->route('editService')->with('status','A típusok, méretek és árak sikeresen elmentve!');
    }
    public function editPrice(string $id)
    {
        $nailTypes = NailType::all();
        $nailSizes = NailSize::find($id);
        $nailPrices = Price::all();
        return view('private.editSize', ['nailTypes' => $nailTypes, 'nailSize' => $nailSizes, 'nailPrice' => $nailPrices
    ]);
    }
    public function upload()
    {
        return view('partials.picUp');
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

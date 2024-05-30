<?php

namespace App\Http\Controllers;

use App\Models\NailSize;
use App\Models\NailType;
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

        return view(
            'private.editService',
            [
                'nailTypes' => $nailTypes,
                'nailSizes' => $nailSizes
            ]
        );
    }
    public function updateType(Request $request)
    {
        $nailTypes = NailType::find(1);
        $nailTypes->type = $request->input('editnailtype');
        $nailTypes->update();

        return redirect()->route('editService')->with('status', 'A típus sikeresen elmentve!');
    }
    public function editNail(NailSize $id)
    {
        $nailTypes = NailType::all();
        $nailSizes = NailSize::all();
        $oldSizes = NailSize::find($id);
        $newid = $id->id;
        return view(
            'private.editSize',
            [
                'nailTypes' => $nailTypes,
                'nailSizes' => $nailSizes,
                'oldSizes' => $oldSizes,
                'newid' => $newid
            ],
            compact('oldSizes')
        );
    }
    public function updateNail(Request $request, $newid)
    {
        $nailSizes = NailSize::find($newid);
        $nailSizes->size_name = $request->input('newSize');
        $nailSizes->price = $request->input('newPrice');

        $nailSizes->update();

        return redirect()->route('editService')->with('status', 'A Méret és/vagy Ár sikeresen mentve!');
    }

    public function storeImage(Request $request)
    {
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

        return redirect()->route('editContForm')->with('status', 'Student Updated Successfully');
    }
    public function addBox(Request $request)
    {
        $nailType = NailType::all();
        return response()->json([
            'status' => 200,
            'nailType' => $nailType,
        ]);
    }
    public function createBox(Request $request)
    {
        $nailType = NailType::all();
        

        $data = $request->all();
        
        $data = NailType::create([
            'type' => $data['newNailType'],
            'size_title' => $data['newNailSize'],
            'price_title' => $data['newNailPrice'],
        ]);

        return redirect()->route('editService')->with('succes', 'Az új elem létrehozva!');

    }
    public function destroy($id)
    {
        $nailType = NailType::find($id);
        $nailType->delete();
        return redirect()->route('editService');
    }
}

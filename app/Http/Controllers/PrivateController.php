<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function upload()
    {
        return view('partials.picUp');
    }
    public function editContact()
    {
        $user = User::all();
        return view('private.editContact');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function updateCont(User $user, string $id)
    {
        $user = User::find($id);
        $user->address = $request->input('address');

        $user->update();

        return redirect()->route('editContForm');
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

<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function public()
    {
        return view('public.publicMain');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function service()
    {
        return view('public.service');
    }

    public function contact()
    {
        return view('public.contact');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function gallery()
    {
        $pictures = Pictures::all();

        return view('public.gallery', ['pictures' => $pictures]);
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

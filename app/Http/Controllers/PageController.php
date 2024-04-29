<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Nail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        
        return view('private.editService');
    }
    public function dashboard()
    {
        return view('auth.dashboard');
    }
    public function signInTpl()
    {
        return view('auth.signIn');
    }

    public function signInPost(Request $request)
    {
        $user = User::all();
        $nail = Nail::all();
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
 
        if(Auth::attempt($credential)) {

            return redirect()->intended(route('home'));
        }
        return redirect(route('sign-in'))->with('error', 'Failed logged in!');
        
    }
    public function logOut(){
        
        Auth::logout();
        return redirect(route('sign-in'));
    }
    public function create()
    {
        return view('auth.signUpForm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function signUp(Request $request,)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|'
        ],
        );

        $data = $request->all();

        $data = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route('sign-in')->with('succes', 'User saved.');

    }
}

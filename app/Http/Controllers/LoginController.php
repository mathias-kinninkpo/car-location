<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function validator(Request $request)
    {
        return Validator::make($request->input(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function index() :  View
    {
        $message = "Mon message de test";
        return view("login.create")->with(['message' => $message]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('home'); 
        }

        return back()->withErrors(['email' => 'Identifiants invalides']); 
    }

    public function destroy(){

        Auth::logout();
        return redirect('/login');
    }

}

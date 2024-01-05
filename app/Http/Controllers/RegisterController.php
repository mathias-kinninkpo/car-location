<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    //protected $redirectTo = RouteServiceProvider::HOME;

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

    public function index()
    {
        $message = "Mon message de test";
        return view("register.create")->with(['message' => $message]);
    }

    public function store(Request $request){
        
        $data = [
            'name' => $request->input("name"),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'password_confirmation' => Hash::make($request->input('password_confirmation')),
        ];
        dd($data);
        return User::create([
            'name' => $request->input("name"),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);
    }
}

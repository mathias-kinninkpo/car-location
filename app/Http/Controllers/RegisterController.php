<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
 

    public $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        // $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {
        dd($request);
        // return User::create([
        //     'name' => $request->input('name'),
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
    }

    public function index()
    {
        $message = "Mon message de test";
        return view("register.create")->with(['message' => $message]);
    }

}

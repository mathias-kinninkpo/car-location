<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() 
    {
        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }

        if ($user->role == 'admin') {
            view('profile.profile-detail');
        }
        else{
            return view('profile.user')->with(["user" => $user]);
        }
        
    }
    public function detail() : View {
        return view('profile.profile-detail');
    }

    public function listCars(){

    }

    public function listUsers()  {
        
    }
    public function createCars() {
        
    }

    public function locations(){
        
    }
}

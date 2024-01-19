<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Car;
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
            return view('profile.profile-detail');
        }
        else{
            return view('profile.profile-detail')->with(["user" => $user]);
        }
        
    }
    public function detail() : View {
        return view('profile.profile-detail');
    }

    public function listCars(){

    }

    public function listUsers()  {
        
    }
    public function createCars(): View {
        
        return view('profile.new');
    }

    public function locations(){
        
    }

    public function storeCars(Request $request)
    {
        $request->validate([
            'brand' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|date',
            'registration_number' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);

        // Gestion de l'upload de l'image
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images/cars'), $imageName);

        // Création de l'entrée dans la base de données
        Car::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'year' => $request->year,
            'registration_number' => $request->registration_number,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('profile-newcar')->with('success', 'Voiture ajoutée avec succès.');
    }

}

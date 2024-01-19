<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    // la page principale de profile
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
    public function detail()  {
        return view('profile.profile-detail');
    }



    /**
     * listCars Lister toutes le voiture
     *
     * @return View
     */
    public function listCars() {
        /**
         * 
         */
        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }

        $cars = Car::all();

        return view("profile.cars")->with("cars", $cars);
    }


    // lister les utilisateurs
    public function listUsers()  {

        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }
        
    }


    /**
     * createCars - le view pour creer une voiture
     *
     * @return 
     */
    public function createCars() {
        
        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }
    
        return view('profile.new');
    }


    // afficher toutes les locations
    public function locations(){
        
    }

    /**
     * storeCars -sauvegarde une voiture ajouter
     *
     * @param Request $request
     * @return void
     */
    public function storeCars(Request $request) 
    {
        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }

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

    // editer une voiture
    public function editCars()  {

        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }
        
    }

    // Sauvegarder une voiture editée
    public function storeEditCars()  {
    
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function deleteCar()  {


    }

}

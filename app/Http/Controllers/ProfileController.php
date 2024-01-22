<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
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
        $userRentals = Rental::where('user_id', auth()->user()->id)->get();

        if ($user->role == 'admin') {
            return view('profile.profile-detail')->with(["user" => $user, 'userRentals' => $userRentals]);
        }
        else{
            return view('profile.user')->with(["user" => $user, 'userRentals' => $userRentals]);
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


    /**
     * listUsers function - Affiches toutes les utilisateur
     *
     * @param Request $request
     * @return void
     */
    public function listUsers(Request $request)  {

        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }

        $users = User::all();
        return view('profile.list-users')->with(['users' => $users, 'userloged' => $user]);
        
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
        
        $user = auth()->user();

        if (!$user){
            return redirect('login');
        }

        $rentals = Rental::all();
        return view('profile.locations')->with(['rentals' => $rentals]);
    }

    public function rendre($id) {

        $rental = Rental::findOrFail($id) ;

        if($rental) {

            $car_id = $rental->car_id ;

            $car = Car::findOrFail($car_id);

            if ($car) {

                $car->availability = true ;
                $rental->status = 'returned';
                $car->save();
                $rental->save();
                return redirect('profile/locations')->with('success', 'La voiture' . $car->brand . ' ' . $car->model . 'est marquée rendue');
            }
        }

        
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
            'image' => 'required|image',
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

        return redirect('profile/newcar')->with('success', 'Voiture ajoutée avec succès.');
    }

    // editer une voiture
    public function editCars($id) {
        $user = auth()->user();
    
        if (!$user) {
            return redirect('login');
        }
        
        $carId = $id;
        $car = Car::findOrFail($carId);
    
        return view('profile.editcars')->with('car', $car);
    }
    

    /**
     *  storeEditCars -sauvegarde de la voiture modifiée
     */
    public function storeEditCars(Request $request, $id)  {

        $user = auth()->user();
    
        if (!$user) {
            return redirect('login');
        }

        
        $car = Car::findOrFail($id);

        if ($car) {
            
            // validation de donnée
            $request->validate([
                'brand' => 'required|string',
                'model' => 'required|string',
                'year' => 'required|date',
                'registration_number' => 'required|string',
                'description' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);


            // Vérifiez si une nouvelle image a été téléchargée
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images/cars', 'public');
                $car->image = $imagePath;
            } elseif ($request->has('old_image')) {

            }

            $car->update([
                'brand' => $request->brand,
                'model' => $request->model,
                'year' => $request->year,
                'registration_number' => $request->registration_number,
                'description' => $request->description,
            ]);
        }


    

        $car->save();

        return redirect('profile/editcar/' . $id)->with(['success' => 'Voiture modifiée avec succès.']);

    
        
    
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function deleteCar($id)  {

        $car = Car::findOrFail($id);

        if($car){

            $name = $car->brand;
            $car->delete();
            return redirect('/profile/cars')->with(['success' => 'La voiture '. $name .' est supprimé succèss']);

        }
        return redirect('/profile/cars')->with(['danger' => 'Une erreur est survenue']);
    }

    /**
     * Grant function - accord le privilège admin à un simple utilisateur
     *
     * @param [type] $id
     * @return void
     */
    public function grant($id)  {
        
        $user = User::findOrFail($id);

        if($user){
            $name = $user->name;
            $user->role = 'admin';
            $user->save();
            return redirect('/profile/users')->with(['success' =>  'L\'utilisateur ' . $name .' est nommé admin avec succès']);

        }
        return redirect('/profile/users')->with(['danger' => 'Une erreur est survenue']);
    }

    /**
     * reoveque function - revoque le droit admin
     *
     * @param [type] $id
     * @return void
     */
    public function revoque($id) {
        
        $user = User::findOrFail($id);

        if($user){
            $user->role = "user";
            $user->save();
            return redirect('/profile/users')->with(['success' => 'L\'utilisateur '. $user->name .' n\'est plus admin']);

        }
        return redirect('/profile/users')->with(['danger' => 'Une erreur est survenue']);
    }

}

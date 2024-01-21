<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * index function - liste toutes les voitures à toutes sorte d'utilisateur connecté ou non
     *
     * @return View
     */
    public function index() : View {

        $cars = Car::paginate(10);

        return view('cars.all')->with(['cars' => $cars]);
    }
}

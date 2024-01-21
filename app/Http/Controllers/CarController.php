<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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


    /**
     * show function - montre le detail de chaque voiture
     *
     * @param int $id
     * @return View
     */
    public function show( $id ) : View {

        $car = Car::findOrFail($id);
        if ($car) {
            $nbre = Rental::where('car_id', $car->id)->count();
    
            return view('cars.show')->with(['car' => $car, 'nbre' => $nbre]);
        }

    }

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'car_id' => 'required|exists:cars,id',
            'rental_date' => 'required|date|after_or_equal:today',
            'return_date' => [
                'required',
                'date',
                'after:rental_date',
                Rule::unique('rentals')->where(function ($query) use ($request) {
                    return $query->where('car_id', $request->car_id)
                        ->where('status', '!=', 'returned')
                        ->where(function ($query) use ($request) {
                            return $query->whereBetween('rental_date', [$request->rental_date, $request->return_date])
                                ->orWhereBetween('return_date', [$request->rental_date, $request->return_date]);
                        });
                }),
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $car = Car::findOrFail($id);

        if($car){
            
            $rental = new Rental();
            $rental->user_id = auth()->user()->id; 
            $rental->car_id = $id;
            $rental->rental_date = $request->rental_date;
            $rental->return_date = $request->return_date;
            $rental->status = 'pending'; 
            $rental->save();
            
            $car->availability = false ;
            $car->save() ;
            // Rediriger avec un message de succès
            return redirect('/cars/' . $car->id)->with(['success' => 'Voiture réservée avec succès!', 'car', $car]);
        }
        else {
            return redirect('/cars/' . $id)->with(['danger' => 'Voiture non trouvée']);
        }
        
        
    }
}

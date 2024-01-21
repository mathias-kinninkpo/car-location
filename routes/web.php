<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// routes/web.php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

// Page d'accueil
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
// Routes pour les voitures
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
Route::post('/cars/{car}', [CarController::class, 'store'])->name('cars.store');


// Routes pour les individus
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

// Routes pour les locations
Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');
Route::get('/rentals/create', [RentalController::class, 'create'])->name('rentals.create');
Route::post('/rentals', [RentalController::class, 'store'])->name('rentals.store');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

// Routes pour l'authentification et les profils
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'create'])->name('login.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/cars', [ProfileController::class, 'listCars'])->name('profile.cars');
Route::get('/profile/users', [ProfileController::class, 'listUsers'])->name('profile.users');
Route::post('/profile/grantadmin/{id}', [ProfileController::class, 'grant'])->name('profile.grantadmin');
Route::post('/profile/revoqueadmin/{id}', [ProfileController::class, 'revoque'])->name('profile.revoqueadmin');

Route::get('/profile/newcar', [ProfileController::class, 'createCars'])->name('profile.new');
Route::post('/profile/newcar', [ProfileController::class, 'storeCars'])->name('profile.newstore');

Route::get('/profile/editcar/{id}', [ProfileController::class, 'editCars'])->name('profile.editcar');
Route::post('/profile/editcar/{id}', [ProfileController::class, 'storeEditCars'])->name('profile.editcarstore');
Route::delete('/profile/deletecar/{id}', [ProfileController::class, 'deleteCar'])->name('profile.deletecar');

Route::get('/profile/locations', [ProfileController::class, 'locations'])->name('profile.locations');
Route::post('/profile/locations/{id}', [ProfileController::class, 'rendre'])->name('profile.rendre');
Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.edit');



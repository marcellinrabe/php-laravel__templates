<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*Venant du fait que Fortify est utilisé comme système d'authentification du projet.
Les routes d'authentification ne se trouve pas principalement ici mais dans le fichier 
FortifyServiceProvider.php dans le dossier app/Providers/
 */


Route::get('/home', function() {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
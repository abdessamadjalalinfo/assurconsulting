<?php

use App\Models\Lead;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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

Route::get('/test', function () {
    return view('test');
});
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/devis', function () {
    return view('devis1');
})->name('devis');

Route::post('/store', function (Request $request) {
    $lead = new Lead();
    $lead->nom = $request->nom;
    $lead->prenom = $request->prenom;
    $lead->email = $request->email;
    $lead->phone = $request->phone;
    $lead->date = $request->date;
    $lead->regime  = $request->regime;
    $lead->qui = $request->qui;
    $lead->ville = $request->ville;
    $lead->civilite = $request->civilite;
    $lead->save();
    return $lead;
});

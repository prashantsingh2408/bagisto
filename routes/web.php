<?php

use App\Http\Controllers;
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


//smart registration
// Route::get('mlm-registration', function () {
//     // dd(1);
//     return view('mlm-registration');
// });

//Bug : Route does not direct controller
//So controller code are put in route function

// Route::post('smart-singup', function(Request $request){

//     //Registration
//     //Save to db
//     echo $request->name;


// });

//if user refresh 'smart-singup' page
// Route::get('smart-singup', function () {
//     return view('resources/themes/velocity/views/customers/signup/index_smart.blade.php');
// })->name('smart-signup');

<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
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

// Route::get();
// Route::post();
// Route::put();
// Route::patch();
// Route::delete();
// Route::options();

// Route::match(['get', 'post'], '/', function() {
//   return 'POST AND GET ALLOWED';
// });

// Route::any('/welcome', function() {
//   return 'Welcome';
// });

// Route::any('/welcome', function() {
//   return view('welcome');
// });

// Route::get('/', function() {
//   return 'redirected';
// });
// Route::redirect('/welcome', '/');
// Route::permanentRedirect('/welcome', '/');

// Route::get('/', function() {
//   return 'Welcome!';
// });

// Route::get('/user/{id}/{group}', function($id, $group) {
//   return response($id.''.$group, 200);
//     // ->header('Content-Type', 'text/plain');
// });

// Route::get('/users', function(Request $request){
//   dd($request); #die and dump
//   return null;
// });

// Route::get('/request-json', function() {
//   return response()->json(['name' => 'Ronnel', 'age' => '22']);
// });

// Route::get('request-download', function() {
//   $path = public_path().'/sample.txt';
//   $name = 'sample.txt';
//   $header = array(
//     'Content-type : application/text-plain'
//   );
//   return response()->download($path, $name, $header);
//   ### PUBLIC FOLDERS
// });

// Route::get('/controller', [UserController::class, 'index'])->name('login');

// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');

// Route::get('/user/{id}', [UserController::class, 'show']);

// Route::get('/students', [StudentController::class, 'index']);

// routes naming
// index - show all data 
// show singular data
// create show a form
// store - store a data
// edit - update data
// destroy - delete data

// Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/login', [StudentController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [StudentController::class, 'register']);
Route::post('/login/process', [StudentController::class, 'process']);

Route::post('/logout', [StudentController::class, 'logout']);

Route::post('/store_data', [StudentController::class, 'store_data']);

// Route::get('/crud/add', [StudentController::class, 'add']);
// Route::post('/crud/add', [StudentController::class, 'add_process']);
// Route::get('/crud/{student}', [StudentController::class, 'm_update']);
// Route::put('/crud/{student}', [StudentController::class, 'update_process']);
// Route::delete('/crud/{student}', [StudentController::class, 'delete_process']);

// for laravel 9 group route only {}
##sample
Route::controller(StudentController::class)->group(function() {
  Route::get('/','index')->middleware('auth');
  Route::get('/crud/add','add');
  Route::post('/crud/add','add_process');
  Route::get('/crud/{student}','m_update');
  Route::put('/crud/{student}','update_process');
  Route::delete('/crud/{student}','delete_process');
});

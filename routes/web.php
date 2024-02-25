<?php

use App\Http\Controllers\MicdaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\checkAge;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('main', fn() => view('test') );

// Route::get('hello/{name}', fn($name) => "Hello $name");

// Route::get('/greeting' , function(){
//     return "Hello World";
// });

// Route::get('Micda/{year}', [MicdaController::class ,'description']);

// Route::get('access', fn(Request $request) =>" your age is  : $request->age ")->middleware(checkAge::class);


// Route::get('infos', fn(Request $request) =>dd( new Response));



// // Route for displaying a listing of products
// Route::get('/products', [ProductController::class, 'index']);

// // Route for showing the form to create a new product
// Route::get('/products/create', [ProductController::class, 'create']);

// // Route for storing a newly created product
// Route::post('/products', [ProductController::class, 'store']);

// // Route for displaying a specific product
// Route::get('/products/{id}', [ProductController::class, 'show']);

// // Route for showing the form to edit a specific product
// Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

// // Route for updating a specific product
// Route::put('/products/{id}', [ProductController::class, 'update']);

// // Route for deleting a specific product
// Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Route::resource('product', ProductController::class);


// Route::get('student' ,[StudentController::class,'index'])->name('index');


Route::get("/example",fn()=>view('example'));

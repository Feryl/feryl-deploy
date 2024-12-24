<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,
 'index'
]);

// Route::get('/', function () {
    //return view('welcome');
// });

Route::get('/dashboard', function (){
    return view('dashboard');
});

Route::get('/products', [ProductController::class,
 'index'
]);

Route::post('/products', [ProductController::class,
'store'
]);

Route::get('/products/{id}/edit', [ProductController::class,
'edit'
]);

Route::put('/products/{id}', [ProductController::class,
'update'
]);

Route::get('/addproduct', [ProductController::class,
'create'
]);

Route::delete('/products/{id}', [ProductController::class, 'destroy']);

// Route::get('/products', function (){
// return view('products');
// });

Route::get('/orders', function (){
    return view('orders');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/care-tips', function () {
    return view('care-tips');
})->name('care');
Route::get('/PetCare', function () {
    return view('welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/view-all', [App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('/adoption/view-options', [App\Http\Controllers\PetController::class, 'adopt'])->name('adopt');
Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
Route::post('/account/update/{id}', [App\Http\Controllers\HomeController::class, 'accountUpdate']);
                                //PET OWNERS ROUTES
//Pets
Route::get('/pets', [App\Http\Controllers\PetController::class, 'index'])->name('pets');
Route::get('/pets/add', [App\Http\Controllers\PetController::class, 'create']);
Route::post('/pets/add/pet', [App\Http\Controllers\PetController::class, 'store']);
Route::get('/pets/update/{id}', [App\Http\Controllers\PetController::class, 'edit']);
Route::post('/pets/update/{id}/save', [App\Http\Controllers\PetController::class, 'update']);
Route::get('/pets/delete/{id}', [App\Http\Controllers\PetController::class, 'destroy']);
//Pet Gallery
Route::get('/pets/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('Gallery');
Route::get('/pets/gallery/add', [App\Http\Controllers\GalleryController::class, 'create']);
Route::post('/pets/gallery/add-image', [App\Http\Controllers\GalleryController::class, 'store']);
// Reports
Route::get('/reports/show', [App\Http\Controllers\ReportController::class, 'index'])->name('reports');
Route::get('/reports/add', [App\Http\Controllers\ReportController::class, 'create']);
Route::post('/reports/add/report', [App\Http\Controllers\ReportController::class, 'store']);
Route::get('/reports/delete/{id}', [App\Http\Controllers\ReportController::class, 'destroy']);
Route::get('/reports/edit/{id}', [App\Http\Controllers\ReportController::class, 'edit']);
Route::post('/reports/edit/report/{id}', [App\Http\Controllers\ReportController::class, 'update']);
// Appointment
Route::get('/appointments/all', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appoint');
Route::post('/appointment/book/', [App\Http\Controllers\AppointmentController::class, 'store']);
Route::get('/appointments/view', [App\Http\Controllers\AppointmentController::class, 'show'])->name('allApp');
//Treatment
Route::get('/treatment/see-all', [App\Http\Controllers\TreatmentController::class, 'index'])->name('treat');
                                        //VET ROUTES
//Acount
Route::post('/vet/finishdetails/{id}', [App\Http\Controllers\VetController::class, 'store']);
//Appointment
Route::get('/appointment/status/{id}', [App\Http\Controllers\AppointmentController::class, 'status']);
//treatment
Route::get('/treatment/create', [App\Http\Controllers\TreatmentController::class, 'create'])->name('createTreat');
Route::post('/treatment/create-invoice', [App\Http\Controllers\TreatmentController::class, 'store']);
//Products
Route::get('/myproducts', [App\Http\Controllers\ProductController::class, 'index'])->name('prod');
Route::get('/products/add', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/products/add-product', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/products/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

                                    //SHELTER ROUTES
Route::get('/adoption/all', [App\Http\Controllers\PetController::class, 'index'])->name('adoptList');
Route::get('/adoption/status/{id}', [App\Http\Controllers\PetController::class, 'adoptStatus']);
Route::get('/adoption/add', [App\Http\Controllers\PetController::class, 'create'])->name('adoptAdd');
Route::post('/adoption/add-adoption', [App\Http\Controllers\PetController::class, 'store']);
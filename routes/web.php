<?php

use Illuminate\Support\Facades\Route;
// Route::get('/admin/manage', [AdminController::class, 'manage'])->name ('admin.manage');
use App\Http\Controllers\AdminController;
// use Illuminate\Support\Facades\Route;

Route::get('/admin/manage', [AdminController::class, 'manage'])->name('admin.manage');



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');

});


// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');


Route::get('/aboutus/board', function () {
    return view('board'); // Make sure this file exists: resources/views/board.blade.php
})->name('board');

Route::get('/aboutus/management', function () {
    return view('management');
})->name('management');
Route::get('/products/liability/services', function () {
    return view('services');
})->name('services');
Route::get('/products/liability/termdeposite', function () {
    return view('termdeposite');
})->name('termdeposite');
Route::get('/products/asset/micro', function () {return view('micro');})->name('micro');

Route::get('/products/liability/agrfin', function () {return view('agrfin');})->name('agrfin');
Route::get('/services/serv', function () {return view('serv');})->name('serv');
Route::get('/services/home_remittance', function () {return view('home_remittance');})->name('home_remittance');
Route::get('/Rates_&_Charges/schedual_of_charges', function () {return view('schedual_of_charges');})->name('schedual_of_charges');
Route::get('/Rates_&_Charges/Profit_rates', function () {return view('Profit_rates');})->name('Profit_rates');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/Financial/statement', function () {return view('statement');})->name('statement');
Route::get('/Financial/financial_highlight', function () {return view('financial_highlight');})->name('financial_highlight');
Route::get('/downloads', function () {return view('downloads');})->name('downloads');
Route::get('/organogram', function () {return view('organogram');})->name('organogram');
Route::get('/careers', function () {return view('careers');})->name('careers');
Route::get('/ConsumerFinances', function () {return view('ConsumerFinances');})->name('ConsumerFinances');
Route::get('/branchnetwork', function () {return view('branchnetwork');})->name('branchnetwork');
Route::get('/SMEFinances', function () {return view('SMEFinances');})->name('sme');
Route::get('/gallery', function () {return view('gallery');})->name('gallery');
Route::get('/news', function () {return view('news');})->name('news');
Route::get('/two', function () {return view('two');})->name('two');

//Route::get('/save', function () {return view('save');})->name('save');

use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Handle form POST submission
Route::post('/contact', [ContactController::class, 'save'])->name('save');

//it show msg

Route::get('/save', [ContactController::class, 'showSavedMessages'])->name('save.show');


// Route::resource('branches', BranchController::class);
// Route::get('/branches', [BranchController::class, 'index'])->name('branches.index');



// use App\Http\Controllers\BranchController;

// Route::resource('branches', BranchController::class);



// Route::get('/', [HomeController::class, 'index'])->name('home');


use App\Http\Controllers\BranchController;

// Default homepage (optional)
Route::get('/branches', function () {
    return redirect()->route('branches.index');
});

// Branch resource routes
Route::resource('branches', BranchController::class);


<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\Groceries::class,'index'])->name('groceries.index');
Route::group(['prefix'=>'groceries'],function(){
    Route::get('/',[\App\Http\Controllers\Groceries::class,'index'])->name('groceries.index');
    Route::get('/create',[\App\Http\Controllers\Groceries::class,'create'])->name('groceries.create');
});

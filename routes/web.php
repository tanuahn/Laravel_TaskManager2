<?php

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

Route::prefix('customer')->group(function (){
    Route::get('index', function (){
        return view('module.customer.index');
    });

    Route::get('create', function (){
        return view('create');
    })->name('create');

    Route::post('store', function (){
        //
    });

    Route::get('show1', function (){
        return view('show1');
    })->name('show1');

    Route::get('show2', function (){
        return view('show2');
    })->name('show2');

    Route::get('show3', function (){
        return view('show3');
    })->name('show3');

    Route::get('show4', function (){
        return view('show4');
    })->name('show4');

    Route::get('show5', function (){
        return view('show5');
    })->name('show5');

    Route::get('edit', function (){
        return view('update');
    })->name('update');

    Route::patch('{id}/update', function (){
        //
    });

    Route::delete('{id}', function (){
        // xoa du lieu khach hang theo id
    });

    Route::get('/delete', function (){
       return view('delete');
    })->name('delete');
});

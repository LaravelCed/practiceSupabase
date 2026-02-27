<?php

use App\Http\Controllers\indexController;
use App\Models\Record;
use Illuminate\Support\Facades\Route;

// For Routing Page ------------------------------------------------------------------------------------------------------------------------------------------------
Route::get('/', function () {
    $readRecord = Record::all();
    return view('index', compact('readRecord'));
});

Route::get('/edit/{id}', function ($id) {
    $readRecord = Record::all();
    $checkTask = Record::where('id', $id)->first();
    return view('edit', compact('readRecord', 'id', 'checkTask'));
});
// For Routing Page End --------------------------------------------------------------------------------------------------------------------------------------------

Route::post('/addTask', [indexController::class, 'addTask']);

Route::get('/deleteTask/{id}', [indexController::class, 'deleteTask']);

Route::post('/updateTask/{id}', [indexController::class, 'updateTask']);
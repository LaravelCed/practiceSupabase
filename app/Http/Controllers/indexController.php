<?php

namespace App\Http\Controllers;

use App\Services\indexServices;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function addTask(Request $request) {
        return indexServices::addTask($request);
    }

    public function deleteTask($id) {
        return indexServices::deleteTask($id);
    }

    public function updateTask(Request $request, $id) {
        return indexServices::updateTask($request, $id);
    }
}

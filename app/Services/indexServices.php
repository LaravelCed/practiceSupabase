<?php

namespace App\Services;

use App\Models\Record;

class indexServices {
    public static function addTask($request) {
        $exeAddTask = 0;
        $task = $request->input('task');

        $result = Record::create([
            'task'=>$task
        ]);

        if ($result) {
            $exeAddTask = 1;
        }

        $readRecord = Record::all();
        return view('index', compact('exeAddTask', 'readRecord'));
    }

    public static function deleteTask($id) {
        $exeDeleteTask = 0;
        $result = Record::where('id',$id)->delete();

        if ($result) {
            $exeDeleteTask = 1;
        }

        $readRecord = Record::all();
        return view('index', compact('exeDeleteTask', 'readRecord'));
    }

    public static function updateTask($request, $id) {    
        $exeUpdateTask = 0;
        $task = $request->input('task');

        $result = Record::where('id', $id)->update([
            'task'=>$task
        ]);

        if ($result) {
            $exeUpdateTask = 1;
        }

        $readRecord = Record::all();
    $checkTask = Record::where('id', $id)->first();
        return view('edit', compact('exeUpdateTask', 'readRecord', 'id', 'checkTask'));
    }
}
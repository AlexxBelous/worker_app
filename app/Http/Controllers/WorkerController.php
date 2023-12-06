<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        foreach ($workers as $worker) {
            dump($worker->name);
        }

    }

    public function show() {
        $worker = Worker::find(1);
        dd($worker->toArray());
    }

    public function create()
    {
        $worker = [
            'name' => 'Mark',
            'surname' => 'Markov',
            'email' => 'Markov@gmail.ru',
            'age' => 20,
            'description' => 'Im Ivan',
            'is_married' => false,
        ];
        Worker::create($worker);


        return "Ivan was created";

    }

    public function update()
    {
        $worker = Worker::find(2);
        $worker->update([
            'name' => 'Maksim',
            'surname' => 'Maksimov',
            'description' => 'My name is Maksim',
        ]);
    }

    public function delete()
    {
        $worker = Worker::find(3);
        $worker->delete();
        return "Was deleted";
    }

}

<?php

namespace App\Controllers;
use App\Models\Doing;
use App\Models\Done;
use App\Models\Todo;

class ArrayController extends CoreController {
    function display()
    {
        $this->show('array/array');

    }
    
    public function doingCard() {

        $doingModel = new Doing();
        $doing = $doingModel->findAll();

        $viewVars = [
            'doing' => $doing,
        ];
        vardump($doing);
        $this->show('array/array', $viewVars);
    }
    
    public function doneCard() {

        $doneModel = new Done();
        $done = $doneModel->findAll();

        $viewVars = [
            'done' => $done,
        ];
        dump($done);
        $this->show('array/array', $viewVars);
    }

    public function todoCard() {

        $todoModel = new Todo();
        $todo = $todoModel->findAll();
        $viewVars = [
            'todo' => $todo,
        ];

        $this->show('array/array', $viewVars);
    }
}
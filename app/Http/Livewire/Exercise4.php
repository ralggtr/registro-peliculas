<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise4 extends Component
{

    public $numbers;
    public $numberArr = [];
    
    public $result;


    public function mount()
    {
        
        //$this->$numberArr = [];

    }

     public function submitForm()
    {


        // Generar numeros aleatorios

        $numberArr = array_map(function () {
            return rand(0, 100);
        }, array_fill(0, rand(0, 10), null)
        );
     

        dd($numberArr);
        
        return view('livewire.exercise4',["resultado1"=>$this->result]);
    }

    public function render()
    {
        return view('livewire.exercise4');
    }
}

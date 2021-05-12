<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Algoritmo4 extends Component
{

    public $numbers;
    public $numberArr = [];
    public $pyramid = [];
    
    public $result;
    public $i;
    public $n;


   /*  public function mount($numberArr)
    {
        
        $this->$numberArr = $numberArr;

    } */

     public function submitForm()
    {


        // Generar numeros aleatorios (del 1 al 100) por medio de una función callback
        // solamente generar 10 posiciones

        $this->numberArr = array_map(function () {
            return rand(0, 100);
        }, array_fill(0, 10, null)
        );
        
     
        
       return view('livewire.algoritmo4',compact($this->numberArr));
    }

    public function render()
    {
        return view('livewire.algoritmo4');
    }
}

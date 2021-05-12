<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise3 extends Component
{

    public $numbers;
    
    public $result;


    public function mount()
    {
        
        $this->result= '';

    }

     public function submitForm()
    {


        // Verificar si un valor es numérico

        if (is_numeric($this->numbers)) {
            $this->result = "VALIDO";
        } else {
            $this->result = "INVALIDO";
        }

        
        
        return view('livewire.exercise3',["resultado1"=>$this->result]);
    }

    public function render()
    {
        return view('livewire.exercise3');
    }
}

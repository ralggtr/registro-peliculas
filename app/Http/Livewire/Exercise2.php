<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise2 extends Component
{

    public $numbers;
    public $arrnumber = [];
    public $resultUnique = [];
    public $result;


    public function mount()
    {
        
        $this->result= '';

    }

     public function submitForm()
    {


        // Eliminar elementos duplicados

        $this->arrnumbers = explode(',',$this->numbers);

        $this->resultUnique = array_unique($this->arrnumbers);

        $this->result = implode (", ", $this->resultUnique);

        
        
        return view('livewire.exercise2',["resultado1"=>$this->result]);
    }

    public function render()
    {
        return view('livewire.exercise2');
    }
}

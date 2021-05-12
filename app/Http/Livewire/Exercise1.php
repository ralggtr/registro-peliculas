<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise1 extends Component
{

    public $numbers;
    public $arrnumber = [];
    public $findnumber;
    public $result;


    public function mount()
    {
        
        $this->findnumber = 0;
        $this->result = null;

    }

     public function submitForm()
    {


        // Buscar numero en el array
        $this->arrnumbers = explode(',',$this->numbers);
        $this->result = array_search($this->findnumber, $this->arrnumbers);
        If (!$this->result) {
            $this->result = -1;
        }

        
        return view('livewire.exercise1',["resultado1"=>$this->result]);
    }

    public function render()
    {
        return view('livewire.exercise1');
    }
}

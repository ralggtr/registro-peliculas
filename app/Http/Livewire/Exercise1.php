<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise1 extends Component
{

    public $numbers;
    public $arrnumber = [];
    public $findnumber;
    public $result;
    public $listItem;
    public $exitHere;



    public function mount()
    {
        
        $this->findnumber = 0;
        $this->result = null;

    }

     public function submitForm()
    {

        // ++++ Dejé comentado el código anterior que utilizaba funciones nativas +++++
        // Buscar numero en el array - con funciones nativas
        //$this->arrnumbers = explode(',',$this->numbers);
        //$this->result = array_search($this->findnumber, $this->arrnumbers);

        // Separar los items en un array Inicial
        $this->arrnumber = [];
        $this->listItem = '';
        for ($this->i = 0; $this->i <= (strlen($this->numbers)); $this->i++) {      

            if (substr($this->numbers,$this->i,1) != ',') {
                $this->listItem .= substr($this->numbers,$this->i,1);
            }
            else
            {
                $this->arrnumber[] = $this->listItem;
                $this->listItem = '';
            }
        }
        //Incluir el ultimo item de la lista:
        $this->arrnumber[] = $this->listItem;           

        //dd($this->arrnumber);
        // Buscar la ocurrencia del elemento especificado
        $this->result = 0;
        $this->exitHere = false;

        $this->i = 0;

        while($this->i <= (count($this->arrnumber)-1) and (!$this->exitHere)) 
        {
            if ($this->arrnumber[$this->i] == $this->findnumber)
                {
                    $this->result = $this->i;
                    $this->exitHere = true;
                    
                }
            $this->i++;
        }        


        //No se encontró ningun elemento que coincidiera
        if (!$this->exitHere)
        {
            $this->result = -1;
        }


        /* 

        If (!$this->result) {
            $this->result = -1;
        } */

        
        return view('livewire.exercise1',["resultado1"=>$this->result]);
    }

    public function render()
    {
        return view('livewire.exercise1');
    }
}

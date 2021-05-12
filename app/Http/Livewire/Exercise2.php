<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise2 extends Component
{

    public $numbers;
    public $arrnumber = [];
    public $finalArray = [];
    public $result;
    public $includeNumber;
    public $listItem;
    
    public function mount()
    {
        
        $this->result= '';

    }

     public function submitForm()
    {

        // ++++   Dejé comentado el codigo anterior que utilizaba funciones nativas ++++
        // Eliminar elementos duplicados        

        /* $this->arrnumbers = explode(',',$this->numbers);

        $this->resultUnique = array_unique($this->arrnumbers);

        $this->result = implode (", ", $this->resultUnique); */

        // Separar los elementos ingresados en un array
        $this->arrnumber = [];
        $this->finalArray = [];
        $this->listItem = '';
        $this->includeNumber = true;
        for ($this->i = 0; $this->i <= (strlen($this->numbers)); $this->i++) 
        {      
            if (substr($this->numbers,$this->i,1) != ',') {
                $this->listItem .= substr($this->numbers,$this->i,1);
            }
            else
            {
                // Delimitador encontrado / Buscar si el elemento ya existe en el array.               
                    $this->arrnumber[] = $this->listItem;
                    $this->listItem = '';
            }
        }
        //Incluir el ultimo item de la lista:
        $this->arrnumber[] = $this->listItem;

        //Revisar duplicados en el array
        for ($this->i=0; $this->i<count($this->arrnumber); $this->i++)
        {
            
            $this->n = 0;
            $this->exitHere = false;
            while($this->n <= (count($this->finalArray)-1) and (!$this->exitHere)) 
            {
                if ($this->finalArray[$this->n] == $this->arrnumber[$this->i])
                    {
                        $this->exitHere = true;
                        
                    }
                $this->n++;
            }
            if (!$this->exitHere)
            {
                $this->finalArray [] = $this->arrnumber[$this->i];

            }
        }

        //dd($this->finalArray);
        return view('livewire.exercise2',$this->finalArray);

    }

    public function render()
    {
        return view('livewire.exercise2');
    }
}

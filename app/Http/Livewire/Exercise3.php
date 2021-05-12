<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Exercise3 extends Component
{

    public $numbers;
    
    public $result;

    public $i;
    public $n;

    public $validChars = ['0','1','2','3','4','5','6','7','8','9','.','-'];
    public $charItem;
    public $validNumber;
    public $validCount;
    public $periodCount;
    public $exitHere;


    public function mount()
    {
        
        $this->result= '';

    }

    public function submitForm()
    {


        // Verificar si un valor es numérico

        // +++++  Deje comentado el codigo anterior que utilizaba funciones nativas +++++
        /* if (is_numeric($this->numbers)) {
            $this->result = "VALIDO";
        } else {
            $this->result = "INVALIDO";
        } */
        
        $this->validNumber = true;
        $this->validCount = 0;
        $this->charItem = '';
        $this->periodCount = 0;

        for ($this->i = 0; $this->i <= (strlen($this->numbers)-1); $this->i++) 
        {            
            //Tomar cada caracter          
         
            $this->charItem = substr($this->numbers,$this->i,1);
            $this->validCount = 0;
            

            for ($this->n = 0; $this->n <= (count($this->validChars)-1); $this->n++)
            {

                /* if ($this->charItem == $this->validChars[$this->n]) */

                if ($this->charItem === $this->validChars[$this->n])
                {                    
                    $this->validCount = 1;

                    //Revisar si el caracter es '-' para ver que se encuentre en la primera posicion
                    if (($this->charItem == '-') && ($this->i != 0))
                    {
                        $this->validCount = 0;    
                    }

                    //Revisar si hay mas de dos puntos decimales
                    if ($this->charItem == '.')
                    {
                        $this->periodCount++;    
                    }
                    
                }                                                    

            }  
            // no se encontró el caracter dentro de los caracteres validos
            if ($this->validCount == 0)
            {
                if ($this->validNumber)
                {
                    $this->validNumber = false;
                }
            }             
                
        }




        if (($this->validNumber) && ($this->periodCount <=1))
        {
            $this->result = 'VALIDO';
        }
        else {
            $this->result = "INVALIDO";    
        }
        
        return view('livewire.exercise3',["resultado1"=>$this->result]);
    }

    public function render()
    {
        return view('livewire.exercise3');
    }
}

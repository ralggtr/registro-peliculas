$this->result = '';
        $this->charItem = '';
        $this->minusFound = false;
        $this->periodFound = false;
        $this->validNumber = true;
        $this->validC = true;
        $this->exitHere = false;
        
        // recorrer el string
        for ($this->i = 0; $this->i <= (strlen($this->numbers)); $this->i++) 
        {            
            //Tomar cada caracter          
            $this->charItem = substr($this->numbers,$this->i,1);

            // Revisar caracteres válidos y luego casos especiales.            
            $this->n = 0;
            $this->exitHere = false;
            while (($this->n <= (count($this->validChars)-1)) and ($this->exitHere == false)) 
            {
                if ($this->charItem == $this->validChars[$this->n])
                    {
                        $this->exitHere = true;             
                    }
                $this->n++;
            }
            
            // El caracter no se encuentra en el array de caracteres válidos
            if ($this->exitHere == false)
            {
                dd($this->exitHere);
                $this->validC = false;
            }
            //dd($this->validC);

            // revisar si el signo "-" no se encuentra en la primera posicion            
            if (($this->charItem == '-') && ($this->i > 0))
            {
                $this->validNumber = false;    
            }   

            // revisar si hay más de un punto decimal
            if ($this->charItem == '.')
            {
                if ($this->periodFound == true)
                {
                    $this->validNumber = false;    
                }
                else
                {
                    // ya se encontró el primer punto decimal
                    $this->periodFound = true;
                }    
            }
                            
        }
        
        // revisar si el ultimo caracter es un punto.
        if ($this->charItem == '.')
        {
            $this->validNumber = false;
        }

        if (($this->validNumber) && ($this->validC))
        {
            $this->result = 'VALIDO';
        }
        else {
            $this->result = "INVALIDO";    
        }
        

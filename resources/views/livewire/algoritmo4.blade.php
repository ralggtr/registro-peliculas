<div>
<form wire:submit.prevent="submitForm" action="/" method="POST" >
        @csrf


                        <div class="flex items-center bg-white border border-gray-200 rounded-lg shadow shadow-lg p-1 py-10 w-half center">
                                
                                <div class="text-gray-700">
                                    <h1 class="text-gray-800 font-bold text-2xl center">                                    
                                        @if(!empty($numberArr)) 
                                            
                                            <?php
                                                $NextArray = [];
                                                $space = "&nbsp;&nbsp;";
                                                for ($n = 1; $n <=10; $n++)
                                                {
                                                    $space = $space."&nbsp;&nbsp;";
                                                    echo $space;
                                                    for ($i = 0; $i <= (count($numberArr)-1); $i++)
                                                    {   
                                                        echo $numberArr[$i];
                                                        if ($i < (count($numberArr)-1))
                                                        {                                                                                                
                                                            echo "&nbsp;&nbsp;,";
                                                            // Almacenar resultados en nuevo array,
                                                            // hacer cálculo de la posición actual + la siguiente
                                                          
                                                                $NextArray[] = ($numberArr[$i] + $numberArr[$i+1]);
                                                                                                                  
                                                        }
                                                    }

                                                    // Limpiar y reasignar arrays cada vez mas pequeños
                                                    unset($numberArr);
                                                    $numberArr = array();
                                                    $numberArr = $NextArray;
                                                    unset($NextArray);
                                                    $NextArray = array();
                                                    echo "<p>";
                                                    echo "<p>";
                                                }
                                            ?>
                                            
                                        @endif
                                    </h1>
                                </div>
                            </div>

            <div class="my-1.5">
                        <span class="inline-flex rounded-md shado-sm">
                            <button type="submit"
                                class="inline-flex items-center justify-center py-2 px-6 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out disabled:opacity-50">
                                <svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                <span>Generar Pirámide</span>
                            </button>
                        </span>
          </div> 

</div>
</form>
</div>

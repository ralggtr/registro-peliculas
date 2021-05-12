<div>
<form wire:submit.prevent="submitForm" action="/" method="POST" >
        @csrf

<div>
  <label for="numbers" class="block text-sm font-medium text-gray-700">Ingrese un array de números separado por comas:</label>
  <div class="mt-1 relative rounded-md shadow-sm py-5">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
      <span class="text-gray-500 sm:text-sm">
        []
      </span>
    </div>
    <input wire:model="numbers" type="text" name="numbers" id="numbers" class="focus:ring-indigo-500 focus:border-indigo-500 block w-half pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="[1,2,3,etc...]">
  </div>
</div>

                        <div class="flex items-center bg-white border border-gray-200 rounded-lg shadow shadow-lg p-1 py-10 w-half center">
                                
                                <div class="text-gray-700">
                                    <h1 class="text-gray-800 font-bold text-2xl center">
                                    @if(!empty($finalArray)) 
                                      @foreach ($finalArray as $r)
                                          {{ $r.'  ' }}
                                      @endforeach
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
                                <span>Eliminar Duplicados</span>
                            </button>
                        </span>
          </div> 

</div>
</form>
</div>

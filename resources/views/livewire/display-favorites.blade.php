<div>

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>

            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              
              Imagen
    
            </th> 
              
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
              
                        Titulo
              
              </th>  

              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
             
                Año
               

              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Rating

              </th>
              
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">        

            

            @foreach ($movies as $movie)
                    <tr>
                        <td class="px-8 py-6 whitespace-nowrap">

                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-40 w-40">
                                    <img class="h-40 w-40 rounded " src="{{ $movie->image }}" alt="cover image">
                                </div>
                                
                            </div>
                        </td>

                        <td class="px-8 py-6 whitespace-nowrap">
                                <div class="text-md font-medium text-gray-900">
                                    {{ $movie->title }}
                                </div>
                        </td>

                        <td class="px-8 py-6 whitespace-nowrap">
                            <div class="text-md text-gray-500">
                                {{ $movie->year }}
                            </div>
                        </td>

                        <td class="px-8 py-6 whitespace-nowrap">
                            <div class="text-md text-gray-500">
                                {{ $movie->rating }}
                            </div>
                        </td>

                    </tr>
                @endforeach
          </tbody>
        </table>

        @if(!($movies->count()))
        
        <div class="text-sm text-gray-500 px-2 py-2">
            No hay resultados.
        </div>
        @endif


    </div>
      </div>
    </div>
  </div>
</div>
</div>

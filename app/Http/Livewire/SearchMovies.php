<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\favoriteMovie;



class SearchMovies extends Component
{
    public $search;
    public $searchResults = [];
    public $title;
    public $imdbID;
    public $imdb;
    public $deleteID;
    public $showDelete = false;
    public $userID;
    public $verifyExisting;

    
    public function updatedSearch($newValue)
    {


        $this->showDelete = false;

        if (strlen($this->search) < 3) {
            $this->searchResults = [];

            return;
        }

        $response = Http::get('http://www.omdbapi.com/?T='.$this->search.'&apikey=9cc7e6b9');



        $this->searchResults = $response->json();

        //dd($this->searchResults);

        if ($this->searchResults["Response"] === "True") {


            $this->imdbID = $this->searchResults["imdbID"];

            //Verificar si existe la película entre las favoritas
            
            $this->userID = Auth::user()->id;
            $this->verifyExisting = favoriteMovie::where('user_id',$this->userID)
                ->where('imdbID',$this->imdbID)
                ->first();
            
            if ($this->verifyExisting) {
                //dd($this->verifyExisting);
                $this->showDelete = true;                
                $this->deleteID = $this->verifyExisting["id"];
            }

        }

        return;



    }

   

    public function mount ()
    {
        $this->imdbID = '';
        $this->deleteID = 0;
        $this->showDelete = false;

    }


    public function render()
    {

        return view('livewire.search-movies');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\favoriteMovie;
use Illuminate\Support\Facades\Auth;


class DisplayFavorites extends Component
{

    private $userID;

    public function render()
    {
        $this->userID = Auth::user()->id;
        return view('livewire.display-favorites', [
            'movies' => favoriteMovie::where('user_id',$this->userID)
            ->orderBy('created_at','desc')
            ->get()
        ]);
    }
}

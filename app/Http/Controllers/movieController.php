<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\favoriteMovie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class movieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function __construct()
    {

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $movie = new favoriteMovie;
        
        $response = Http::get('http://www.omdbapi.com/?i='.request("imdbID").'&apikey=9cc7e6b9');
        $searchResults = $response->json();

        $movie->user_ID = Auth::user()->id;
        $movie->imdbID = request("imdbID");
        $movie->image = $searchResults["Poster"];
        $movie->title = $searchResults["Title"];
        $movie->year = $searchResults["Year"];
        $movie->rating = $searchResults["Rated"];
      
        $movie->save();

        return redirect('/addmovies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar película del listado

        $movieDelete = favoriteMovie::find($id);
        $movieDelete->delete();


        return redirect('/addmovies');

    }
}

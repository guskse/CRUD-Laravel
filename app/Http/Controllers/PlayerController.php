<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function index()
    {
        //route -> /players/

        //get all players from the database and order them by created_at
        $players = Player::orderBy('created_at', 'desc')->paginate(10); //fetch the 10 first

        
        return view('players.index', ['players' => $players]);
    }


    public function show($id)
    {
        //route -> /players/{id}

        //find the player by id that is passed to the function passed
        $player = Player::findOrFail($id);

        //pass the show view and the player from the db found with id provided
        return view('players.show', ["player" => $player]);
    }

    public function create()
    {
        //route -> /players/create
        return view('players.create');
    }
}

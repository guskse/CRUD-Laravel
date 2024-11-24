<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Company;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //GET ALL PLAYERS
    public function index()
    {
        //route -> /players/

        //get all players from the database and order them by created_at
        $players = Player::with('company')->orderBy('created_at', 'desc')->paginate(10); //fetch the 10 first

        return view('players.index', ['players' => $players]);
    }

    //SHOW SPECIFIC PLAYER BY ID
    public function show(Player $player)
    {
        //route -> /players/{player}

        $player->load('company');

        //pass the show view and the player from the db found with id provided
        return view('players.show', ["player" => $player]);
    }

    //CREATE NEW PLAYER
    public function store(Request $request)
    {
        //--> players/ (POST)
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'company_id' => 'required|exists:companies,id',
        ]);

        Player::create($validated);

        //redirect to page
        return redirect()->route('players.index')->with('success', 'Player Created!');
    }

    //DELETE PLAYER BY ID
    public function destroy(Player $player)
    {
        //-> /players/{player} (DELETE)
        $player->delete();

        //redirect to page
        return redirect()->route('players.index')->with('success', 'Player Deleted!');;
    }



    //SHOW CREATE PAGE AND SEND THE COMPANIES WITH IT TO POPULATE THE FORM
    public function create()
    {
        //route -> /players/create

        //fetch all companies available
        $companies = Company::all();

        //pass the view and the array with all the companies fetched, will be used in the form
        return view('players.create', ["companies" => $companies]);
    }
}

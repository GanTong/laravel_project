<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;

use App\Card;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()

    {

    	$cards = Card::all();

    	//$cards = DB::table('cards')->get();

    	return view('cards.index', compact('cards'));

    }


    public function show(Card $card)

    {

        $card->load('notes.user'); // card eager load the notes - loads $card->notes->user(corresponding to User model)

        

    return view('cards.show', compact('card'));

    }


}

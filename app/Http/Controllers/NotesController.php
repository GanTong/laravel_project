<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Note;

use App\Card;


class NotesController extends Controller
{
   
	public function store(Request $request, Card $card)

	{

		$this->validate($request, 


			['body' => 'required|min:10'],

			['required' => 'Please fill in the :attribute',

			'min' => 'The :attribute should be of at lease :min characters']


			); 




		$note = new Note($request->all());

		$note->user_id = 1;


		$card->addNote($note);

		session()->flash('flash_message', 'You have successfully added a new note.');

		//option 1 $note = new Note;

		//$note->body = $request->body;

		//$card->notes()->save($note);


		//option 2 $card->notes()->create([

				// 'body' => $request->body

		// ]);
		

		//option 3 $card->notes()->create($request->all()); 

		return back(); // redirect function 

	}


	public function edit(Note $note)

	{


		return view('notes.edit', compact('note'));

	}



	public function update(Request $request, Note $note)

	{
		$note->update($request->all());


		return back();


	}



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   
	public function home()

	{


		$people = ['Tong', 'Ling', 'Peter'];


		return view('home', compact('people'));


	}

	public function about()

	{

		 return 'This ia a About Page.';



	}


	public function welcome()

	{

		 return view('welcome');




	}


	public function example()

	{

		return view('example');

	}






}

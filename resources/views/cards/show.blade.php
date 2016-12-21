@extends('layout')


@section('content')

	<div class ="row">

		<div class="col-md-6 cold-md-offset-3">


		<h3>Title: {{ $card->title }} </h3>

			<ul class="list-group">

			@foreach ($card->notes as $note)

				<li class="list-group-item"> {{ $note->body }} 


				<a href="#" class="pull-right">  User Name: {{ $note->user->name }} </a>


				</li>

			@endforeach

			</ul>

			<hr>

			<h3> Add a New Note </h3>

			<form method="POST" action="/cards/{{ $card->id }}/notes">


				  {{ csrf_field() }}


				<div class = "form-group">

					<textarea name="body" class="form-control">{{ old('body') }}</textarea>	

				</div>


				<div class = "form-group">

				
					 <button type="submit" class="btn btn-primary">Add Note</button>

					 @if (Session::has('flash_message'))

                    <div class="alert alert-success"> {{ Session::get('flash_message') }} 	</div>

                	@endif 

                	
                	
				</div>

			</form>

			@if (count($errors))

				<ul>
						@foreach ($errors->all() as $error)

						<li class="alert alert-danger"> {{ $error }} </li>

						@endforeach
				</ul>

			@endif


		</div>

	</div>

@stop
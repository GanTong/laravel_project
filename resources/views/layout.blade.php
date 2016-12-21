<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">


	<link rel="stylesheet" href="/css/style.css"> 

	<title>Document</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  -->


        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" /> -->



        @yield('header')

</head>


<body>

		
		<div class="container">

		@yield('content')

		</div>


		@yield('footer')


</body>

</html>
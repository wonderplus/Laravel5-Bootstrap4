<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>

<div class="container">
	<h1>My First Bootstrap Page</h1>
	<p>test page.</p> 

	<div class="alert alert-success">
	  <strong>Success!</strong> Indicates a successful or positive action.
	</div>
	
	<div class="row">
		<div class="col-sm-4">
		  <h3>Column 1</h3>
		  <p>Lorem ipsum dolor..</p>
		  <p>Ut enim ad..</p>
		</div>
		<div class="col-sm-4">
		  <h3>Column 2</h3>
		  <p>Lorem ipsum dolor..</p>
		  <p>Ut enim ad..</p>
		</div>
		<div class="col-sm-4">
		  <h3>Column 3</h3> 
		  <p>Lorem ipsum dolor..</p>
		  <p>Ut enim ad..</p>
		</div>
	</div>

</div>




	
	
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

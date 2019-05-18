<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>YouCum</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--Bootstrap-->
    <link href="{{ asset('css/bootstrap-4.css') }}" rel="stylesheet">
    <!--CSS Head-->
    <link href="{{ asset('css/HeadCss/head.css') }}" rel="stylesheet">
</head>
<body style="background-color: #e5e5e5">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	<div class="container">
		<h1 class=""><span style="color: white;font-size: 30px">You</span><b style="color: #00baa8;font-size: 30px">CUM</b><span style="color: white;font-size: 25px">.es</span></h1>
		<button class="navbar-toggler my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin: 3px;">
				<span class="navbar-toggler-icon"></span>
			</button >
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2 YC-Input-Search" type="search" placeholder="Buscar" aria-label="Search" style="margin: 3px;">
			<button class="btn my-2 my-sm-0" type="submit" style="color: white;background-color: #00baa8;margin: 3px;"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
	</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1a1a1a">  
	<div class="collapse navbar-collapse YC-head2-list container" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#" style='color: #00baa8'>INICIO</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#" style='color: #00baa8'>FOTOS</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#" style='color: #00baa8'>VIDEOS RECOMENDADOS</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#" style='color: #00baa8'>ULTIMOS VIDEOS</a>
			</li>
			
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='color: #00baa8'>
					CATEGORIAS
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">					
					<a class="dropdown-item" href="#" style='color: #00baa8'>Action</a>
					<a class="dropdown-item" href="#" style='color: #00baa8'>Another action</a>
					<a class="dropdown-item" href="#" style='color: #00baa8'>Something else here</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
    <div  style='margin-left: 100px !important;margin-right: 100px'>
    	<br>
	    <div class="row">
		  <div class="col-2">
		    <div class="list-group" id="list-tab" role="tablist">
		    	<a class="list-group-item" active style="background-color:#1a1a1a ;color:#00baa8">Categorias</a>
		    	
		    	@foreach($arrCategorias as $categoria)
	        		<a class="list-group-item list-group-item-action" style="background-color: #343a40;color:white;cursor: pointer;">{{$categoria["category"]}}</a>
    			@endforeach
		    </div>
		  </div>
		  <div class="col-10">
		    @yield('content')
		  </div>
		</div>
    </div>
</div>
    </div>
</body>
	
	<script src="{{asset('js/jquery-3.3.1.js')}}"></script>
	<script src="{{asset('js/bootstrap-4.3.1.js')}}"></script>
	<script src="{{asset('js/HeadJs/HeadJs.js')}}"></script>
	
</html>

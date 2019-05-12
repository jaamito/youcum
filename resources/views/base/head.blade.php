<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
    	@media (min-width: 768px) {
			.navbar-brand.abs{
		        position: absolute;
		        width: 100%;
		        left: 0;
		        text-align: center;
		    }	    
		}
		.containerYC {
		    width: 100%;
		    padding-right: 15px;
		    padding-left: 15px;
		    margin-right: auto;
		    margin-left: auto;
		}
		@media (min-width: 481px) and (max-width: 767px) {
		  .YC-Input-Search{
				width: 110px
			}
		}
		/* 
		  ##Device = Most of the Smartphones Mobiles (Portrait)
		  ##Screen = B/w 320px to 479px
		*/
		@media (min-width: 320px) and (max-width: 480px) {
		  .YC-Input-Search{
				width: 90px
			}
		}	
    </style>
</head>
<body style="background-color: black">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
	<div class="container">
		<h1 class=""><span style="color: white;font-size: 30px">You</span><b style="color: #00baa8;font-size: 30px">CUM</b></h1>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2 YC-Input-Search" type="search" placeholder="Buscar" aria-label="Search" style="margin: 3px;">
			<button class="btn my-2 my-sm-0" type="submit" style="color: white;background-color: #00baa8;margin: 3px;"><i class="fa fa-search" aria-hidden="true"></i></button>
			<button class="navbar-toggler my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin: 3px;">
				<span class="navbar-toggler-icon"></span>
			</button >
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
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#" style='color: #00baa8'>Something else here</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
    <div class='container'>
	    
    	@yield('content')
    </div>
</div>
    </div>
</body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
	$(document).ready(function () {
  	if ($(window).width() < 1024) {
		   $(".YC-head2-list").removeClass("container")
		} else {
		    $(".YC-head2-list").addClass("container")
		}
		//your code here
	});
	
	</script>
</html>

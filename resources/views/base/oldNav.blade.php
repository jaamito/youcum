<nav class="navbar navbar-dark  navbar-expand-lg" style='background-color: #3b3b3b'>
		<div class='container'>
			<div class="col-md-3">
				<img src="{{asset('img/logo.png')}}" height="100" width="200" style="position:relative;bottom:8px">
			</div>
			<div class="col-md-6">
				<div class='row'>
					<div class='col-md-10' style="padding-right: 0px !important">
						<input class="form-control input-lg" type="text" placeholder="buscar" style="border-radius:0px">
					</div>
					<div class='col-md-2' style="padding-left: 0px !important">
						<button type="button" class="btn btn-block" style="background-color: #ff4b88;border-radius:0px"><i class="fa fa-search" aria-hidden="true"></i></button>
					</div>
				</div>
			</div>
			<!--<div class="col-md-3">
				
			</div>-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto" >
					<!-- Authentication Links -->
					@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}" style="color: #ff4b88">{{ __('Login') }}</a>
						</li>
						@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}" style="color: #ff4b88">{{ __('Register') }}</a>
							</li>
						@endif
					@else
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #ff4b88">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="color: #ff4b88">
									{{ __('Logout') }}
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
							</div>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #1a1a1a">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h2><span style="color: white">You</span><b style="color: #00baa8">CUM</b></h2>
				</div>	  	
				<!-- Toggler/collapsibe Button -->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    	<span class="navbar-toggler-icon"></span>
			    </button>
			  	<!-- Navbar links -->
			  	<div class="col-md-8">
				  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
				    	<ul class="navbar-nav">
				      		<li class="nav-item dropdown">
						      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						        	VIDEOS
						      	</a>
						      	<div class="dropdown-menu">
						        	<a class="dropdown-item" href="#">Link 1</a>
						        	<a class="dropdown-item" href="#">Link 2</a>
						        	<a class="dropdown-item" href="#">Link 3</a>
						      	</div>
						    </li>
						    <li class="nav-item dropdown">
						      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						        	FOTOS
						      	</a>
						      	<div class="dropdown-menu">
						        	<a class="dropdown-item" href="#">Link 1</a>
						        	<a class="dropdown-item" href="#">Link 2</a>
						        	<a class="dropdown-item" href="#">Link 3</a>
						      	</div>
						    </li>
						    <li class="nav-item dropdown">
						      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						        	CATEGORÍAS
						      	</a>
						      	<div class="dropdown-menu">
						        	<a class="dropdown-item" href="#">Link 1</a>
						        	<a class="dropdown-item" href="#">Link 2</a>
						        	<a class="dropdown-item" href="#">Link 3</a>
						      	</div>
						    </li>
						    <li class="nav-item dropdown">
						      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						        	ESTRELLAS PORNO
						      	</a>
						      	<div class="dropdown-menu">
						        	<a class="dropdown-item" href="#">Link 1</a>
						        	<a class="dropdown-item" href="#">Link 2</a>
						        	<a class="dropdown-item" href="#">Link 3</a>
						      	</div>
						    </li>
				    	</ul>
				    	<form class="form-inline">
					    	<div class="input-group">
					    		<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
							  	<div class="input-group-append">
							    	<span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
							  	</div>
					    	</div>    
					  	</form>
				  	</div>
				</div>
			</div>
		</div>
	</nav>
	<!--<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container">
			<div class="row">
				<a class="navbar-brand" href="#">Navbar</a>			  	

			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    	<span class="navbar-toggler-icon"></span>
			    </button>
			  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
			  		
			    	<ul class="navbar-nav">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#">INICIO</a>
			      		</li>
			      		<li class="nav-item dropdown">
					      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					        	VIDEOS
					      	</a>
					      	<div class="dropdown-menu">
					        	<a class="dropdown-item" href="#">Link 1</a>
					        	<a class="dropdown-item" href="#">Link 2</a>
					        	<a class="dropdown-item" href="#">Link 3</a>
					      	</div>
					    </li>
					    <li class="nav-item dropdown">
					      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					        	FOTOS
					      	</a>
					      	<div class="dropdown-menu">
					        	<a class="dropdown-item" href="#">Link 1</a>
					        	<a class="dropdown-item" href="#">Link 2</a>
					        	<a class="dropdown-item" href="#">Link 3</a>
					      	</div>
					    </li>
					    <li class="nav-item dropdown">
					      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					        	CATEGORÍAS
					      	</a>
					      	<div class="dropdown-menu">
					        	<a class="dropdown-item" href="#">Link 1</a>
					        	<a class="dropdown-item" href="#">Link 2</a>
					        	<a class="dropdown-item" href="#">Link 3</a>
					      	</div>
					    </li>
					    <li class="nav-item dropdown">
					      	<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					        	ESTRELLAS PORNO
					      	</a>
					      	<div class="dropdown-menu">
					        	<a class="dropdown-item" href="#">Link 1</a>
					        	<a class="dropdown-item" href="#">Link 2</a>
					        	<a class="dropdown-item" href="#">Link 3</a>
					      	</div>
					    </li>
			    	</ul>
			    	<form class="form-inline">
				    	<div class="input-group">
				    		<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
						  	<div class="input-group-append">
						    	<span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
						  	</div>
				    	</div>    
				  	</form>
			  	</div>
			</div>
		</div>
	</nav>-->
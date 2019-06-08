<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
	<div class="container h-full">
		<a href="{{ route('index')}}" class="navbar-brand">
			<img src="{{ asset('img/logo.jpg')}}" alt="Kawe marathon logo">
		</a>

		<button class="navbar-toggler" 
		        type="button" 
		        data-toggle="collapse" 
		        data-target="#navbarTogglerDemo02" 
		        aria-controls="navbarTogglerDemo02" 
		        aria-expanded="false" 
		        aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">Gallery</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">Contacts</a>
		      </li>

		      <li class="nav-item">
		        <a class="btn btn-primary" href="#">Registration</a>
		      </li>

		    </ul>
		  </div>
  	</div>
</nav>
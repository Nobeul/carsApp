<!DOCTYPE html>
<html>
<head>
	<title>Car's App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	
		<div class="container">
			<div class="container-fluid">
			<div class=".bg-gradient-info">
				<div class="row"  style="background-color: #e3f2fd;">
					<div class="col-md-6">
						<h1 class="display-1" style="text-align: center">...Welcome...</h1>
						<p class="lead" style="text-align: center; font-weight: bold">A new web application for cars...</p>
					</div>
					<div class="col-md-6">
						<img src="{{ URL::to('/img/carhead.png') }}" style="height: 150px;margin-left: 50px">
					</div>
					
				</div>
				
			</div>
			
			</div>
		</div>
	

	{{-- <div class="container">
		<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  		<!-- Navbar content --!>
  			<a class="align-middle navbar-brand" >Car's App</a>
  				<form class="form-inline">
    				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  				</form>
		</nav>
	</div> --}}

	
		<div class="container">
			@yield('body')
		</div>
			
			

	

	<div class="container" style="margin-top: 10%">
		<!-- Footer -->
		<footer class="page-footer font-small blue">

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-3">© 2019 Copyright:
		    <a href="https://www.facebook.com/nobeulislam"> Md. Nobeul Islam</a>
	</div>
		  <!-- Copyright -->

		</footer>
		<!-- Footer -->
	</div>
</body>
</html>
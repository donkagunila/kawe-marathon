@extends('layouts.app')


@section('title', 'Half Marathon and Fun Run')

@section('contents')

	<div class="page-header d-flex align-items-center">

		<div class="title-block d-flex justify-content-center align-items-center">
			<p>
				Register
			</p>
		</div>

	</div>


	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('registration.save')}}" method="post">
					@csrf
					<div class="register-form">
					<div class="form-title">
						<h2>
							Personal Info <span class="dot"></span>
						</h2>
					</div>

					<div class="form-body">

						<div class="row">
							<div class="col-6 form-group">
								<input type="text"
									   class="form-control"
									   name="fname" 
									   placeholder="First Name">
							</div>

							<div class="col-6 form-group">
								<input type="text"
									   class="form-control"
									   name="lname" 
									   placeholder="Last Name">
							</div>

						</div>
					</div>

					<div class="form-title">
						<h2>
							Contact Info <span class="dot"></span>
						</h2>
					</div>

					<div class="form-body">

						<div class="row">
							<div class="col-6 form-group">
								<input type="text"
									   class="form-control"
									   name="phone" 
									   placeholder="Phone Number">
							</div>

							<div class="col-6 form-group">
								<input type="email"
									   class="form-control"
									   name="email" 
									   placeholder="Email Address">
							</div>

						</div>
					</div>

					<div class="form-title">
						<h2>
							Race Info <span class="dot"></span>
						</h2>
					</div>

					<div class="form-body">

						<div class="row">
							<div class="col-6 form-group">
								<select name="distance" id="" class="form-control">
									<option>Race Distance</option>
									<option value="15">15 km</option>
									<option value="5">5 km</option>
								</select>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-primary float-right">
								Register
							</button>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
		
		

		{{-- <div class="row">
			<div class="col-md-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea tempore vitae non illum maxime fuga at sapiente sit deleniti explicabo accusamus, ipsum delectus magnam quam. Culpa, sapiente quas quaerat. Modi!


				<a href="{{ route('index')}}">home</a>


				<form action="{{ route('registration.save')}}" method="post">
					@csrf

					<input 
						type="text"
						name="name" 
						class="form-control" 
						placeholder="full name">

					<input type="text" name="phone_number" placeholder="Phone number">
					<input type="email" name="email" placeholder="Email">
					<button type="submit">Register</button>
				</form>
			</div>
		</div> --}}
	</div>
@endsection
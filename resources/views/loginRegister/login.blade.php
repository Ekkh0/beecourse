@extends('layout.mainlayout')
@section('title')Login & Register @endsection
@section('extracss')
<script src="js/login.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
@endsection
@section('content')
<body>
	<div class="section">
		<div class="logocontainer">
			<div class="navbar-brand logodiagonalbackground" style="position: absolute; top: 0; left: 0;">
				<a class="fs-3 beelogo" href="/">
					<div class="beelogobackground"></div>
					<img src="image/logo.png" alt="" style="width: 200px">
				</a>
        	</div>
		</div>
		<div class="container">
			@error('wronginfo')
			<div class="alert alert-warning alert-dismissible fade show" role="alert" style="position: absolute; transform:translateX(-50%); left: 50%; top: 3%;">
				{{$message}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			@enderror
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<div class="d-flex justify-content-center align-items-center">
							<h6 class="mb-0"><span>Log In</span></h6>
							<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
							<label for="reg-log"></label>
							<h6 class="mb-0"><span>Sign Up</span></h6>
						</div>
						<div class="card-3d-wrap mx-auto" id="3d-rotate-wrap">
							<div class="card-3d-wrapper" id="3d-rotate-wrap-child">
								<form class="card-front" action="/login" method="POST">
									@csrf
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" name="logemail" class="form-style" 
												@error('logemail')
												placeholder="Email Wajib Diisi!"
												style="background-color: darkred"
												@enderror
												placeholder="Email"
												value="{{ Session::get('logemail') }}"
												id="email" autocomplete="off">
												<i class="input-icon"><iconify-icon icon="uil:at"></iconify-icon></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="logpass" class="form-style"
												@error('logpass')
												placeholder="Password Wajib Diisi!"
												style="background-color: darkred"
												@enderror
												placeholder="Password" 
												id="password" autocomplete="off">
												<i class="input-icon"><iconify-icon icon="uil:lock-alt"></iconify-icon></i>
											</div>
											<button name="submitlogin" type="submit" class="btn mt-4">Login</button>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
										</div>
									</div>
			      				</form>
								<form class="card-back" action="/create" method="POST">
									@csrf
									<div class="center-wrap">
										<h4 class="mb-4 pb-3">Sign Up</h4>
										<div class="section text-center">
											<div id="form-carousel" class="carousel" data-ride="carousel" data-wrap="false" data-interval="0">
												<div class="carousel-inner">
													<div class="carousel-item active pages">
														<div class="form-group">
															<input type="text" name="regname" class="form-style" placeholder="Full Name" value="{{ Session::get('regname') }}" id="regname" autocomplete="off">
															<i class="input-icon"><iconify-icon icon="uil:user"></iconify-icon></i>
														</div>	
														<div class="form-group mt-2">
															<div class="mt-2" style="width: 100%">
																<x-datePicker></x-datePicker>
															</div>
														</div>	
														<div class="form-group mt-2">
															<input type="text" name="regphone" class="form-style" value="{{ Session::get('regphone') }}" placeholder="Phone" id="regphone" autocomplete="off">
															<i class="input-icon"><iconify-icon icon="uil:phone"></iconify-icon></i>
														</div>
													</div>
													<div class="carousel-item pages">
														<div class="form-group">
															<input type="email" name="email" class="form-style" value="{{ Session::get('email') }}" placeholder="Email" id="regemail" autocomplete="off">
															<i class="input-icon"><iconify-icon icon="uil:at"></iconify-icon></i>
														</div>	
														<div class="form-group mt-2">
															<input type="password" name="regpass" class="form-style" placeholder="Password" id="regpass" autocomplete="off">
															<i class="input-icon"><iconify-icon icon="uil:lock-alt"></iconify-icon></i>
														</div>	
														<div class="form-group mt-2">
															<input type="password" name="regconfpass" class="form-style" placeholder="Confirm Password" id="regconfpass" autocomplete="off">
															<i class="input-icon"><iconify-icon icon="uil:lock"></iconify-icon></i>
														</div>
													</div>
												</div>
											</div>
											<div class="control mt-4">
												<a id="prev" class="carousel-control-prev" href="#form-carousel" role="button" data-slide="prev" style="display: none;">
													<span class="carousel-control-prev-icon" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												</a>
												<div class="d-flex justify-content-center align-items-center" style="width: 120px; height: 47px;">
													<p id="step">1/2</p>
													<button id="submitregis" type="submit" class="btn" style="display: none;">Register</button>
												</div>
												<a id="next" class="carousel-control-next" href="#form-carousel" role="button" data-slide="next">
													<span class="carousel-control-next-icon" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												</a>
											</div>
				      					</div>
			      					</div>
			      				</form>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
@endsection
@section('extrajs')
<link rel="stylesheet" href="css/login.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection
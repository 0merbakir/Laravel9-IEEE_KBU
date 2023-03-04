@extends('layouts.frontbase')
@section('title', "Komitelerimiz")
@section('scrollkomiteler', 'active')
@section('content')
<div class="section lb">
	<div class="container">
		<div class="section-title">
			<h3 style="text-align: center;">IEEE KARABÜK | KOMİTELERİMİZ</h3>
		</div><!-- end title -->

		<div class="row">
			<div class="col-lg-4" style="margin-bottom: 50px;">
				<div class="card p-0">
					<div class="card-image">
						<img src="{{asset('assets')}}/images/computer.png" alt="">
					</div>
					<div class="card-content d-flex flex-column align-items-center">
						<a href="/komiteler/cs">
							<h4 class="pt-2">COMPUTER SOCIETY</h4>
						</a>
						<h5>IEEE KARABÜK</h5>

						<ul class="social-icons d-flex justify-content-center">
							<li style="--i:1">
								<a href="/komiteler/cs">
									<span class="fab fa-facebook"></span>
								</a>
							</li>
							<li style="--i:2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li style="--i:3">
								<a href="#">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4" style="margin-bottom: 50px;">
				<div class="card p-0">
					<div class="card-image">
						<img src="{{asset('assets')}}/images/wie.png" alt="">
					</div>
					<div class="card-content d-flex flex-column align-items-center">
						<a href="/komiteler/wie">
							<h4 class="pt-2">WOMAN IN ENGINEERING SOCIETY</h4>
						</a>
						<h5>IEEE KARABÜK</h5>

						<ul class="social-icons d-flex justify-content-center">
							<li style="--i:1">
								<a href="/komiteler/">
									<span class="fab fa-facebook"></span>
								</a>
							</li>
							<li style="--i:2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li style="--i:3">
								<a href="#">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4" style="margin-bottom: 50px;">
				<div class="card p-0">
					<div class="card-image">
						<img src="{{asset('assets')}}/images/comsoc.jpg" alt="">
					</div>
					<div class="card-content d-flex flex-column align-items-center">
						<a href="/komiteler/comsoc">
							<h4 class="pt-2">COMMUNICATIONS SOCIETY</h4>
						</a>
						<h5>IEEE KARABÜK</h5>
						<ul class="social-icons d-flex justify-content-center">
							<li style="--i:1">
								<a href="#">
									<span class="fab fa-facebook"></span>
								</a>
							</li>
							<li style="--i:2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li style="--i:3">
								<a href="#">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4" style="margin-bottom: 50px;">
				<div class="card p-0">
					<div class="card-image">
						<img src="{{asset('assets')}}/images/rao.jpg" alt="">
					</div>
					<div class="card-content d-flex flex-column align-items-center">
						<a href="/komiteler/robotic">
							<h4 class="pt-2">ROBOTICS AND OTOMATION SOCIETY</h4>
						</a>
						<h5>IEEE KARABÜK</h5>
						<ul class="social-icons d-flex justify-content-center">
							<li style="--i:1">
								<a href="/komiteler/cs">
									<span class="fab fa-facebook"></span>
								</a>
							</li>
							<li style="--i:2">
								<a href="#">
									<span class="fab fa-twitter"></span>
								</a>
							</li>
							<li style="--i:3">
								<a href="#">
									<span class="fab fa-instagram"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
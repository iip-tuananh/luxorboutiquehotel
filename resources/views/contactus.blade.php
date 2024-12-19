@extends('layouts.main.master')
@section('title')
Contact Us
@endsection
@section('description')
Contact With Us
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="wrapper">
	<!-- Google Map -->

	<!-- Contact -->
	<section class="wptb-contact-form style1 bg-image-2" style="background-image: url('{{url('frontend/img/bg-9.jpg')}}');">
	   <div class="wptb-item-layer both-version">
		  <img src="{{url('frontend/img/texture-2.png')}}" alt="texture-2">
		  <img src="{{url('frontend/img/texture-2-light.png')}}" alt="texture-2-light">
	   </div>
	   <div class="container">
		  <div class="wptb-form--wrapper">
			 <div class="wptb-heading">
				<div class="wptb-item--inner text-center">
				   <h1 class="wptb-item--title">Contact With Us</h1>
				   <div class="wptb-item--description"> I am ready to answer all your questions about real estate issues </div>
				</div>
			 </div>
			 <div class="row">
				<div class="col-lg-8 offset-lg-2">
				   <form class="wptb-form" action="{{route('postcontact')}}" method="post">
					@csrf
					  <div class="wptb-form--inner">
						 <div class="row">
							<div class="col-lg-6 col-md-6 mb-4">
							   <div class="form-group">
								  <input type="text" name="name" class="form-control" placeholder="Name*" required>
							   </div>
							</div>
							<div class="col-lg-6 col-md-6 mb-4">
							   <div class="form-group">
								  <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
							   </div>
							</div>
							<div class="col-lg-12 col-md-12 mb-4">
							   <div class="form-group">
								  <input type="text" name="subject" class="form-control" placeholder="Phone">
							   </div>
							</div>
							<div class="col-md-12 col-lg-12 mb-4">
							   <div class="form-group">
								  <textarea name="message" class="form-control" placeholder="Message"></textarea>
							   </div>
							</div>
							<div class="col-md-12 col-lg-12">
							   <div class="wptb-item--button text-center">
								  <button class="btn white-opacity creative" type="submit">
								  <span class="btn-wrap">
								  <span class="text-first">Send Message</span>
								  </span>
								  </button>
							   </div>
							</div>
						 </div>
					  </div>
				   </form>
				</div>
			 </div>
		  </div>
		  <div class="wptb-office-address mr-top-100">
			<div class="row">
				<div class="col-lg-4 col-md-6">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon"><i class="bi bi-phone"></i></div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Hotline</h3>
							<p class="wptb-item--description">{{$setting->phone1}}</p>
							<a href="tel:{{$setting->phone1}}" class="wptb-item--link">Call Now</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 col-md-6 ">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Email</h3>
							<p class="wptb-item--description">{{$setting->email}}</p>
							<a href="mailto:{{$setting->email}}" class="wptb-item--link">Send Email</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 col-md-6">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon">Z</div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Zalo</h3>
							<a  target="_blank" href="https://zalo.me/{{$setting->phone1}}" class="wptb-item--link">Send Message</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 col-md-6">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon"><i class="bi bi-youtube"></i></div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Youtube</h3>
							<p class="wptb-item--description">{{$setting->google}}</p>
							<a target="_blank" href="{{$setting->google}}" class="wptb-item--link">View Channel</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 col-md-6 ">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon"><i class="bi bi-facebook"></i></div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Facebook</h3>
							<p class="wptb-item--description">{{$setting->facebook}}</p>
							<a target="_blank" href="{{$setting->facebook}}" class="wptb-item--link">Visit</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 col-md-6">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Address</h3>
							<a target="_blank" href="https://maps.app.goo.gl/RbxLcX4hv5CqZALo9" class="wptb-item--link">View Map</a>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
	<div class="gmapbox wow fadeInUp">
		{!!$setting->iframe_map!!}
	</div>
 </main>
@endsection

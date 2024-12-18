@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
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
				   <h1 class="wptb-item--title">Gửi Lời Nhắn Cho Tôi</h1>
				   <div class="wptb-item--description"> Tôi sẵn sàng giải đáp tất cả thắc mắc của bạn về các vấn đề liên quan tới bất động sản </div>
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
								  <input type="text" name="name" class="form-control" placeholder="Họ Tên*" required>
							   </div>
							</div>
							<div class="col-lg-6 col-md-6 mb-4">
							   <div class="form-group">
								  <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
							   </div>
							</div>
							<div class="col-lg-12 col-md-12 mb-4">
							   <div class="form-group">
								  <input type="text" name="subject" class="form-control" placeholder="Số Điện Thoại">
							   </div>
							</div>
							<div class="col-md-12 col-lg-12 mb-4">
							   <div class="form-group">
								  <textarea name="message" class="form-control" placeholder="Lời Nhắn"></textarea>
							   </div>
							</div>
							<div class="col-md-12 col-lg-12">
							   <div class="wptb-item--button text-center"> 
								  <button class="btn white-opacity creative" type="submit">
								  <span class="btn-wrap">
								  <span class="text-first">Gửi Lời Nhắn</span>
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
							<a href="tel:{{$setting->phone1}}" class="wptb-item--link">Gọi Ngay</a>
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
							<a href="mailto:{{$setting->email}}" class="wptb-item--link">Gửi Mail</a>
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
							<p class="wptb-item--description">Đào Quý Hòa</p>
							<a  target="_blank" href="https://zalo.me/{{$setting->phone1}}" class="wptb-item--link">Nhắn tin</a>
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
							<a target="_blank" href="{{$setting->google}}" class="wptb-item--link">Xem Kênh</a>
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
							<a target="_blank" href="{{$setting->facebook}}" class="wptb-item--link">Truy Cập</a>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="col-lg-4 col-md-6">
				   <div class="wptb-icon-box1 wow fadeInLeft">
					  <div class="wptb-item--inner flex-start">
						 <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
						 <div class="wptb-item--holder">
							<h3 class="wptb-item--title">Địa chỉ</h3>
							<p style="font-size: 12px" class="wptb-item--description">{{$setting->address1}}</p>
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
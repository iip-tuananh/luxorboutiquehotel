@extends('layouts.main.master')
@section('title')
Về Chúng Tôi
@endsection
@section('description')
{{$setting->company}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="wrapper">
	<!-- Page Header -->
	<div class="wptb-page-heading">
	   <div class="wptb-item--inner" style="background-image: url('{{url('frontend/img/page-header-bg-4.jpg')}}');">
		  <div class="wptb-item-layer wptb-item-layer-one">
			 <img src="{{url('frontend/img/circle.png')}}" alt="img">
		  </div>
		  <h1 class="wptb-item--title ">Tôi Là Ai?</h1>
	   </div>
	</div>
	<!-- Details Content -->
	<section class="blog-details">
	   <div class="container">
		<div class="wptb-heading mb-0">
            <div class="wptb-item--inner text-center">
               <h6 class="wptb-item--subtitle"><span>01 //</span> About</h6>
               <h1 class="wptb-item--title lg">{{$setting->company}}</h1>
            </div>
         </div>
		  <div class="row">
			 <div class="col-lg-12 col-md-12 pe-md-5">
				<div class="blog-details-inner">
				   <div class="post-content">
					 
					  
					  <div class="fulltext">
						 
						{!!($gioithieu->content)!!}
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
	<!-- End Details Content -->
 </main>

@endsection
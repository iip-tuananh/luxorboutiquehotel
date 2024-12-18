@extends('layouts.main.master')
@section('title')
Dự án tiêu biểu
@endsection
@section('description')
Dự án tiêu biểu
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
<div class="page-content">
	<!-- INNER PAGE BANNER -->
	<div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image: url(&quot;{{url('frontend/images/3.jpg')}}&quot;); background-position: 50% -50px;">
	   <div class="overlay-main bg-black opacity-07"></div>
	   <div class="container">
		  <div class="sx-bnr-inr-entry">
			 <div class="banner-title-outer">
				<div class="banner-title-name">
				   <h1 class="m-tb0">Dự án tiêu biểu</h1>
				</div>
			 </div>
			 <!-- BREADCRUMB ROW -->
			 <div>
				<ul class="sx-breadcrumb breadcrumb-style-2">
				   <li><a href="{{route('home')}}">Home</a></li>
				   <li>Dự án tiêu biểu</li>
				</ul>
			 </div>
			 <!-- BREADCRUMB ROW END -->
		  </div>
	   </div>
	</div>
   <div class="section-full p-tb80 column-grid-4 inner-page-padding">
      <div class="container">
         <!-- GALLERY CONTENT START -->
         <ul  class="masonry-outer mfp-gallery row work-grid clearfix list-unstyled">
            @foreach ($duan as $item)
            @php
                $img = json_decode($item->images);
            @endphp
            <!-- COLUMNS 1 -->
            <li class="masonry-item cat-1 col-xl-3 col-6 col-lg-4 col-md-6 col-sm-12 m-b30">
                <div class="sx-box   image-hover-block">
                    <div class="sx-thum-bx">
                        <img src="{{$img[0]}}" alt="">
                    </div>
                    <div class="sx-info  p-t20 text-white">
                        <h4 class="sx-tilte m-t0"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></h4>
                        <p class="m-b0"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->location}}</p>
                    </div>
                    <a class="mfp-link" href="{{$img[0]}}">
                        <i class="fa fa-arrows-alt"></i>
                    </a>
               </div>
               <div class="figcaption bg-white text-center p-a20">
                  <h4 class="m-a0"><a href="{{route('serviceDetail',['slug'=>$item->slug])}}">{{$item->name}}</a></h4>
                  @if ($item->cateService != null)
                  <p>{{$item->cateService->name}}</p>
                  @endif

               </div>
            </li>
            @endforeach
         </ul>
         {{$duan->links()}}
      </div>
   </div>
 </div>
@endsection


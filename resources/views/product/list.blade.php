@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
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
	<div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center" data-stellar-background-ratio="0.5" style="background-image: url(&quot;{{url('frontend/images/5.jpg')}}&quot;); background-position: 50% -50px;">
	   <div class="overlay-main bg-black opacity-07"></div>
	   <div class="container">
		  <div class="sx-bnr-inr-entry">
			 <div class="banner-title-outer">
				<div class="banner-title-name">
				   <h1 class="m-tb0">{{$title}}</h1>
				</div>
			 </div>
			 <!-- BREADCRUMB ROW -->                            
			 <div>
				<ul class="sx-breadcrumb breadcrumb-style-2">
				   <li><a href="{{route('home')}}">Home</a></li>
				   <li>Sản Phẩm</li>
				   <li>{{$title}}</li>
				</ul>
			 </div>
			 <!-- BREADCRUMB ROW END -->                        
		  </div>
	   </div>
	</div>
	<!-- INNER PAGE BANNER END -->
	<div class="section-full p-t60 p-b60 bg-white mobile-page-padding">
      <div class="container">
         <div class="row d-flex justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
               <div class="row">
                  <!-- COLUMNS 1 -->
                  @if (count($list) > 0)
                  @foreach ($list as $item)
                  @php
                      $img = json_decode($item->images);
                  @endphp
                  <div class="col-lg-4 col-md-4 col-6 m-b30">
                     <div class="sx-box sx-product-box   overflow-hide">
                        <div class="sx-thum-bx sx-img-overlay1">
                           <img src="{{$img[0]}}" alt="">
                        </div>
                        <div class="sx-info p-t20 text-center">
                           <h5 class="sx-title">
                              <a href="{{route('detailProduct',['cate'=>$item->cate_slug,'type'=>$item->type_slug ? $item->type_slug : 'loai','id'=>$item->slug])}}">{{$item->name}}</a>
                           </h5>
                           @if ($item->price > 0)
                              @if ($item->status_variant == 1)
                              <span style="color: #000000;font-weight: 600; ">{{get_price_variant($item->id)}}₫ <del>{{number_format($item->price)}}₫</del></span>
                              @else 
                              <span style="color: #000000;font-weight: 600; ">{{number_format($item->discount)}}₫ <del>{{number_format($item->price)}}₫</del></span>
                              @endif
                           @else
                           <span style="color: #000000;font-weight: 600;">Liên Hệ</span>
                           @endif
                        </div>
                     </div>
                  </div>
                  @endforeach 
                  @else 
                  <h3>Nội dung đang cập nhật...</h3>
                  @endif
               </div>
               <div class="text-center">
                  {{$list->links()}}
               </div>
            </div>
            
         </div>
      </div>
   </div>
	<!-- CONTENT END -->
</div>
@endsection
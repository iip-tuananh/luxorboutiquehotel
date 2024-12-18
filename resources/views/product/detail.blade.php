@extends('layouts.main.master')
@section('title')
{{$product->name}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
@endsection
@section('js')
<script>
    $(document).ready(function() {
    
      var sync1 = $("#sync1");
      var sync2 = $("#sync2");
      var slidesPerPage = 4; //globaly define number of elements per page
      var syncedSecondary = true;
    
          sync1.owlCarousel({
            items : 1,
            slideSpeed : 2000,
            nav: false,
            autoplay: false,
            dots: false ,
            loop: true,
            responsiveRefreshRate : 200,
            navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
          }).on('changed.owl.carousel', syncPosition);
    
          sync2
            .on('initialized.owl.carousel', function () {
              sync2.find(".owl-item").eq(0).addClass("current");
            })
            .owlCarousel({
            items : slidesPerPage,
            dots: true,
            nav: false,
            margin:5,
            smartSpeed: 200,
            slideSpeed : 500,
            slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
            responsiveRefreshRate : 100
          }).on('changed.owl.carousel', syncPosition2);
    
      function syncPosition(el) {
        //if you set loop to false, you have to restore this next line
        //var current = el.item.index;
        
        //if you disable loop you have to comment this block
        var count = el.item.count-1;
        var current = Math.round(el.item.index - (el.item.count/2) - .5);
        
        if(current < 0) {
          current = count;
        }
        if(current > count) {
          current = 0;
        }
        
        //end block
    
        sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();
        
        if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }
      
      function syncPosition2(el) {
        if(syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
      }
      
      sync2.on("click", ".owl-item", function(e){
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
      });
    });
</script>
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
				   <h1 class="m-tb0">{{$product->name}}</h1>
				</div>
			 </div>
			 <!-- BREADCRUMB ROW -->                            
			 <div>
				<ul class="sx-breadcrumb breadcrumb-style-2">
				   <li><a href="{{route('home')}}">Home</a></li>
				   <li>Sản Phẩm</li>
				   <li>{{$product->name}}</li>
				</ul>
			 </div>
			 <!-- BREADCRUMB ROW END -->                        
		  </div>
	   </div>
	</div>
	<!-- INNER PAGE BANNER END -->
	<div class="section-full p-t80 p-b50 mobile-page-padding">
		<div class="container woo-entry">
		
			<div class="row m-b30">
				<div class="col-md-5 col-sm-12  m-b30">
					<div class="sx-box sx-product-gallery on-show-slider"> 
					
						<div id="sync1" class="owl-carousel owl-theme owl-btn-vertical-center m-b5">
							@foreach ($img as $item)
							<div class="item">
								<div class="mfp-gallery">
									<div class="sx-box">
										<div class="sx-thum-bx sx-img-overlay1 ">
											<img src="{{$item}}" alt="">
											<div class="overlay-bx">
												<div class="overlay-icon-1">
													<a class="mfp-link" href="{{$item}}">
														<i class="fa fa-search sx-icon-box-xs"></i>
													</a>
											  </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						
						<div id="sync2" class="owl-carousel owl-theme">
							@foreach ($img as $item)
							<div class="item">
								<div class="sx-media">
									<img src="{{$item}}" alt="">
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				
				<div class="col-md-7 col-sm-12">
					<div class="product-detail-info">
						<div class="single-product-title ">
							<h3 class="post-title"><a href="javascript:void(0);">{{$product->name}}</a></h3>
						</div>
						@if ($product->price > 0)
						@if ($product->status_variant == 1)
						<div class="product-single-price">
							<span class="p-single-old-price">{{number_format($product->price)}}₫</span>
							<span class="p-single-new-price">{{get_price_variant($product->id)}}₫</span>
						</div>
						@else 
						<div class="product-single-price">
							<span class="p-single-old-price">{{number_format($product->price)}}₫</span>
							<span class="p-single-new-price">{{number_format($product->discount)}}₫</span>
						</div>
						@endif
						@else
						<div class="product-single-price">
							<span class="p-single-old-price">{{number_format($product->price)}}₫</span>
							<span class="p-single-new-price">Liên Hệ</span>
						</div>
						@endif

						
						

						<div class="wt-product-text">
						<p>{{languageName($product->description)}}</p>

						</div>
						<form method="post" class="cart clearfix ">
							<a href="tel:{{$setting->phone1}}" class="site-cart-btn site-button text-white">Liên hệ đặt hàng</a>
						</form>
					</div>
				</div>
			</div>
				
			<!-- TABS CONTENT START -->
			<div class="product-full-detail m-b30">
				<div class="row">
					<div class="col-md-12">
						<div class="sx-tabs tabs-default">
							<ul class="nav nav-tabs">
								<li><a data-toggle="tab" href="#web-design-19" class="active">Chi tiết sản phẩm</a></li>
							</ul>
							<div class="tab-content">
								<div id="web-design-19" class="tab-pane active">
									{!!languageName($product->content)!!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- TABS CONTENT START -->
			
			
			<!-- TITLE START -->
				<div class="section-head  text-center">
					<h2 data-title="Product">Sản phẩm tương tự</h2>
					<div class="sx-separator-outer  m-b30">
						<div class="sx-separator bg-primary"></div>
					</div>
				</div>
			<!-- TITLE END -->
			
			<div class="row">
					<!-- Block 1 -->
					@foreach ($productlq as $item)
					<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-b30">
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
					
					<!-- Block 2 -->
					
				   
				</div>

		</div>
	</div>
	<!-- CONTENT END -->
</div>
@endsection


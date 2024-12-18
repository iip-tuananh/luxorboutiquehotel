@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
{{$title_page}} 
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('content')
<main class="wrapper">
   <!-- Page Header -->
   <div class="wptb-page-heading">
      <div class="wptb-item--inner" style="background-image: url('{{url('frontend/img/page-header-blog.jpg')}}');">
         <div class="wptb-item-layer wptb-item-layer-one">
            <img src="{{url('frontend/img/circle.png')}}" alt="img">
         </div>
         <h2 class="wptb-item--title ">{{$title_page}} </h2>
      </div>
   </div>
   <!-- Our Services -->
   <section>
      <div class="container">
         <div class="wptb-service--inner">
            <div class="row">
               <!-- Iconbox -->
               @if (count($blog) > 0)  
            @foreach ($blog as $item)
               <!-- Iconbox -->
           <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft">
            <div class="wptb-blog-grid1 highlight wow fadeInLeft">
               <div class="wptb-item--inner">
                  <div class="wptb-item--image">
                     <a href="{{route('detailBlog',['slug'=>$item->slug])}}" class="wptb-item-link"><img src="{{$item->image}}" alt="img"></a>
                  </div>
                  <div class="wptb-item--holder">
                     <div class="wptb-item--date">{{date_format($item->created_at,'d/m/Y')}}</div>
                     <h4 class="wptb-item--title"><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h4>
                     <p class="line_3">{{languageName($item->description)}}</p>
                  </div>
               </div>
            </div>
              
           </div>
           @endforeach
           @else 
           <h3>Nội dung đang cập nhật...</h3>
           @endif
            </div>
         </div>
         <div class="wptb-pagination-wrap text-center">
            {{$blog->links()}}
         </div>
      </div>
   </section>
</main>
@endsection
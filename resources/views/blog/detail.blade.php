@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main class="wrapper">
   <!-- Page Header -->
   <div class="wptb-page-heading">
      <div class="wptb-item--inner" style="background-image: url('{{url(''.$blog_detail->image)}}');">
         <div class="wptb-item-layer wptb-item-layer-one">
            <img src="{{url('frontend/img/circle.png')}}" alt="img">
         </div>
         <h1 class="wptb-item--title ">{{languageName($blog_detail->title)}}</h1>
      </div>
   </div>
   <!-- Details Content -->
   <section class="blog-details">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-8 pe-md-5">
               <div class="blog-details-inner">
                  <div class="post-content">
                     <div class="post-header">
                        <div class="wptb-item--meta d-flex align-items-center gap-4">
                           <div class="wptb-item wptb-item--author"><a href="#"><i class="bi bi-pencil-square"></i> <span>Admin</span></a></div>
                           <div class="wptb-item wptb-item--date"><a href="#"><i class="bi bi-calendar3"></i> <span>{{date_format($blog_detail->created_at,'d/m/Y')}}</span></a></div>

                        </div>
                     </div>

                     <div class="fulltext">

                        {!!languageName($blog_detail->content)!!}
                     </div>
                  </div>
               </div>
            </div>
            <!-- Sidebar  -->
            <div class="col-lg-3 col-md-4 p-md-0 mt-5 mt-md-0">
               <div class="sidebar">

                  <!-- end widget -->
                  <div class="widget widget_block">
                     <div class="wp-block-group__inner-container">
                        <h2 class="widget-title">Danh Mục Dịch Vụ Nổi Bật</h2>
                        <ul class="wp-block-categories-list wp-block-categories">
                           @foreach ($servicehome as $item)
                           <li class="cat-item"><a href="{{route('serviceList',['slug'=>$item->slug])}}">{{$item->name}}</a> <i class="bi bi-chevron-right"></i></li>
                           @endforeach

                        </ul>
                     </div>
                  </div>
                  <!-- end widget -->
                  <div class="widget widget_block">
                     <div class="wp-block-group__inner-container">
                        <h2 class="widget-title">Bài Viết Mới</h2>
                        <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                           @foreach ($blognew as $item)
                           <li>
                              <div class="latest-posts-content">
                                 <h5><a href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($item->title)}}</a></h5>
                              </div>
                           </li>
                           @endforeach


                        </ul>
                     </div>
                  </div>

                  <!-- end widget -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Details Content -->
</main>
@endsection

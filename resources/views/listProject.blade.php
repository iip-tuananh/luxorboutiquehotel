@extends('layouts.main.master')
@section('title')
Danh sách dịch vụ
@endsection
@section('description')
Danh sách dịch vụ
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')

@endsection
@section('content')
<main class="wrapper">
    <!-- Page Header -->
    <div class="wptb-page-heading">
       <div class="wptb-item--inner" style="background-image: url('{{url('frontend/img/pageheaderservice.jpg')}}');">
          <div class="wptb-item-layer wptb-item-layer-one">
             <img src="{{url('frontend/img/circle.png')}}" alt="img">
          </div>
          <h2 class="wptb-item--title ">Dịch vụ của tôi</h2>
       </div>
    </div>
    <!-- Our Services -->
    <section>
       <div class="container">
          <div class="wptb-service--inner">
             <div class="row">
                <!-- Iconbox -->
                @foreach ($list as $key => $item)
            @php
                $img_ser = json_decode($item->images);
            @endphp
                <!-- Iconbox -->
            <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInLeft ">
               <a href="{{route('serviceDetail',['slug'=>$item->slug])}}">
                  <div class="wptb-icon-box5 mb-3">
                     <div class="wptb-item--inner">
                        <div class="wptb-item--icon">
                           <img src="{{$img_ser[0]}}" alt="img" class="default-icon">
                           <img src="{{$img_ser[0]}}" alt="img" class="hover-icon">
                        </div>
                        <div class="wptb-item--holder">
                           <p class="wptb-item--description">0{{$key+1}}</p>
                           <h4 class="wptb-item--title mb-0">{{$item->name}}</h4>
                           <div class="line_3">
                              <p>{{languageName($item->description)}}</p>
                           </div>

                        </div>
                     </div>
                  </div>
               </a>

            </div>
            @endforeach
             </div>
          </div>
          <div class="wptb-pagination-wrap text-center">
             {{$list->links()}}
          </div>
       </div>
    </section>
 </main>

@endsection

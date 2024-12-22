@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url($banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <main class="wrapper">
        <!-- Slider Section -->
        <section class="wptb-slider style2">
            <div class="swiper-container wptb-swiper-slider-two">
                <!-- swiper slides -->
                <div class="swiper-wrapper">
                    <!-- Slide Item -->
                    @foreach ($banner as $item)
                        <div class="swiper-slide">
                            <div class="wptb-slider--item" data-overlay-dark="2">
                                <div class="wptb-slider--image" style="background-image: url('{{ $item->image }}');"></div>
                                <div class="wptb-slider--inner">
                                    <!-- Layer Image -->
                                    <div class="wptb-item-layer wptb-item-layer-one">
                                        <img src="{{ url('frontend/img/layer-3.png') }}" alt="img">
                                    </div>
                                    <div class="wptb-heading">
                                        <div class="wptb-item--inner mb-3">
                                        <h6 class="wptb-item--subtitle">{{ $item->title }}</h6>
                                            <h1 class="wptb-item--title">{{ $item->description }}</h1>


                                        </div>
                                        <a class="btn btn-two creative" href="{{ $item->link }}">
                                        <span class="btn-wrap">
                                            <span class="text-first text-white">View Detail</span>
                                            <span class="text-second"> <i class="bi bi-arrow-up-right text-white"></i> <i class="bi bi-arrow-up-right text-white"></i> </span>
                                        </span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Slide Item -->
                </div>
            </div>

            <!-- Left Pane -->
            <div class="wptb-left-pane justify-content-center">
                <div class="logo">
                    <h6>Our Room</h6>
                </div>
            </div>

            <!-- Right Pane -->
            <div class="wptb-right-pane">
                <div class="social-box style-oval">
                    <ul>
                        <li><a href="https://www.facebook.com/">FB</a></li>
                        <li><a href="https://www.instagram.com/">IG</a></li>
                        <li><a href="https://www.youtube.com/">YT</a></li>
                        <li><a href="https://www.dribbble.com/">DR</a></li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Pane -->
            <div class="wptb-bottom-pane justify-content-center">
                <!-- pagination dots -->
                <div class="wptb-swiper-dots style2">
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Swiper Navigation -->
                <div class="wptb-swiper-navigation style3">
                    <div class="wptb-swiper-arrow swiper-button-prev"></div>
                    <div class="wptb-swiper-arrow swiper-button-next"></div>
                </div>
            </div>

        </section>

        {{-- Search tour --}}
        {{-- *Search Widget Code: engver --}}
        <section id="hbe-bws-wrapper-widget-code"></section>
        <link type="text/css" rel="stylesheet" href="//book.securebookings.net/css/search-wdg.css" />
        <script type="text/javascript" src="//book.securebookings.net/js/widget.search.js"></script>
        <script type="text/javascript"
            src="//book.securebookings.net/searchWidgetCustomize?lang=en&id=5492ea90-15a0-1732871736-4060-9f95-a486922f3417&ajax=true">
        </script>

        <style>
            #hbe-bws-wrapper-widget-code {
                text-align: center !important;
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }
            #search-widget-panel .swp-horizontal .bws-swp-col {
                width: 300px !important;
            }
            #search-widget-panel .swp-horizontal .swp-col3{
                width: 100px !important;
            }
            #search-widget-panel .bws-ipt-calendar {
                width: 100% !important;
                height: 40px !important;
                font-family: 'Quicksand', serif !important;
                font-size: 16px !important;
                border-radius: 5px !important;
                border: 1px solid #e0e0e0 !important;
            }
            #search-widget-panel .bws-ipt-calendar .show-date {
                line-height: 40px !important;
                font-size: 16px !important;
            }
            #search-widget-panel .bws-button {
                font-size: 18px !important;
                font-family: 'Quicksand', serif !important;
            }
            div#search-widget-panel div.swp-col3 a#bws-button-search {
                background-color: #b37b2e !important;
                padding: 8px 20px !important;
            }
            div#search-widget-panel {
                padding: 42px 0px !important;
            }

            @media (max-width: 768px) {
                .hbe-bws .clearfix {
                    padding: 0 20px 0 40px;
                }
            }
        </style>

        {{-- *Search Widget Code: vietver --}}
        {{-- <section id="hbe-bws-wrapper-widget-code"></section>
        <link type="text/css" rel="stylesheet" href="//book.securebookings.net/css/search-wdg.css" />
        <script type="text/javascript" src="//book.securebookings.net/js/widget.search.js"></script>
        <script type="text/javascript"
            src="//book.securebookings.net/searchWidgetCustomize?lang=vi&id=5492ea90-15a0-1732871736-4060-9f95-a486922f3417&ajax=true">
        </script> --}}
        {{-- end search --}}

        <section class="wptb-about-two bg-transparent">
            <div class="container">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <h6 class="wptb-item--subtitle"><span>01 //</span> About Us </h6>
                                <h1 class="wptb-item--title">{{$setting->company}}</h1>
                            </div>
                            <div class="col-lg-5 text-lg-end">
                                <div class="wptb-item--button">
                                    <a href="{{route('orderNow')}}" class="btn btn-two creative text-uppercase">
                                        <span class="btn-wrap">
                                            <span class="text-first">Booking Now</span>
                                            <span class="text-second"><i class="bi bi-arrow-up-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="wptb-image-single wow fadeInUp">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--image position-relative">
                                    <img src="{{ json_decode($gioithieu->image)[0] }}" alt="img" loading="lazy">
                                    <div class="wptb-item--video-button">
                                        <a class="btn" data-fancybox=""
                                            href="https://www.youtube.com/watch?v=GF_rBXxoHvE">
                                            <span class="text-second"> <i class="bi bi-play-fill"></i> </span>
                                            <span class="line-video-animation line-video-1"></span>
                                            <span class="line-video-animation line-video-2"></span>
                                            <span class="line-video-animation line-video-3"></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="wptb-item-layer wptb-item-layer-one both-version">
                                <img src="{{ url('frontend/img/light-2.png') }}" alt="img" loading="lazy">
                                <img src="{{ url('frontend/img/light-2-light.png') }}" alt="img" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ps-md-5 mt-4 mt-md-0">
                        <div class="wptb-about--text ps-md-5">
                            <h3></h3>
                            <div class="line_10">
                                {!! $gioithieu->description !!}
                            </div>
                            <a class="btn btn-two white-opacity creative" href="{{ route('aboutUs') }}">
                                <span class="btn-wrap">
                                    <span class="text-first">View More</span>
                                    <span class="text-second"> <i class="bi bi-arrow-up-right"></i> <i
                                            class="bi bi-arrow-up-right"></i> </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Albums -->
        <section class="wptb-album-one">
            <div class="container-fluid">
                <div class="wptb-heading mb-0">
                    <div class="wptb-item--inner text-center">
                        <h6 class="wptb-item--subtitle"><span>02 //</span> View Rooms</h6>
                        <h1 class="wptb-item--title lg">Rooms & Suites</h1>
                    </div>
                </div>
                <div class="swiper-container swiper-gallery-two has-radius">
                    <div class="swiper-wrapper">
                        @foreach ($duan as $item)
                            @php
                                $imgduan = json_decode($item->image);
                            @endphp
                            <!-- Item -->
                            <div class="swiper-slide">
                                <div class="grid-item">
                                    <div class="wptb-item--inner ">
                                        <div class="wptb-item--image">
                                            <img src="{{ $imgduan[0] }}" alt="img" style="height: 324px !important;" loading="lazy">
                                        </div>
                                        <div class="wptb-item--holder">
                                            <div class="wptb-item--meta">
                                                <h4><a
                                                        href="{{ route('roomDetail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                                </h4>
                                                <ul class="option_project">
                                                    <li class=""><b class="proce">{{ number_format($item->price) }}đ</b></li><br>
                                                    <li>{{ $item->wc }} People |</li>
                                                    <li>{{ $item->phongngu }} |</li>
                                                    <li>{{ $item->dientich }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <!-- Swiper Navigation -->
                    <div class="wptb-swiper-navigation style2">
                        <div class="wptb-swiper-arrow swiper-button-prev"></div>
                        <div class="wptb-swiper-arrow swiper-button-next"></div>
                    </div>
                </div>
                {{-- <div class="shadow-heading">
            <h1 class="wptb-item--title">Portfolio</h1>
         </div> --}}
            </div>
        </section>
        <!-- About Kimono -->

        <!-- Services -->
        <section class="wptb-services-one">
            <div class="wptb-item-layer wptb-item-layer-one both-version">
                <img src="{{ url('frontend/img/texture-2.png') }}" alt="img">
                <img src="{{ url('frontend/img/texture-2-light.png') }}" alt="img">
            </div>
            <div class="container">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h6 class="wptb-item--subtitle"><span>02 //</span> Services</h6>
                                <h1 class="wptb-item--title">Our Service
                                </h1>
                            </div>
                            <div class="col-lg-6">
                                <p class="wptb-item--description">Luxor Boutique Hotel offers a comprehensive range of services designed to provide guests with a luxurious and convenient experience. Here's an overview of what you can expect:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($dichvu as $key => $item)
                        @php
                            $img_ser = json_decode($item->images);
                        @endphp
                        <!-- Iconbox -->
                        <div class="col-lg-4 col-md-6 col-sm-6 wow fadeInLeft">
                            {{-- <a href="{{ route('serviceDetail', ['cate' => $item->cateService->slug, 'slug' => $item->slug]) }}"> --}}
                                <div class="wptb-icon-box5 mb-3">
                                    <div class="wptb-item--inner">
                                        <a href="{{ route('serviceDetail', ['cate' => $item->cateService->slug, 'slug' => $item->slug]) }}">
                                            <div class="wptb-item--icon">
                                                <img src="{{ $img_ser[0] }}" alt="img" class="default-icon" loading="lazy">
                                                <img src="{{ $img_ser[0] }}" alt="img" class="hover-icon" loading="lazy">
                                            </div>
                                        </a>
                                        <div class="wptb-item--holder">
                                            <p class="wptb-item--description">0{{ $key + 1 }}</p>
                                            <h4 class="wptb-item--title mb-0">
                                                <a href="{{ route('serviceDetail', ['cate' => $item->cateService->slug, 'slug' => $item->slug]) }}">{{ $item->name }}</a>
                                            </h4>
                                            <div class="line_3">
                                                <p>{{ languageName($item->description) }}</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            {{-- </a> --}}

                        </div>
                    @endforeach

                </div>
            </div>
        </section>


        {{-- <div class="divider-line-hr"></div> --}}


        <!-- Testimonial -->
        <section class="wptb-testimonial-one bg-image"
            style="background-image: url('{{ url('frontend/img/bg-2.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="swiper-container swiper-testimonial">
                            <!-- swiper slides -->
                            <div class="swiper-wrapper">
                                @foreach ($ReviewCus as $item)
                                    <div class="swiper-slide">
                                        <div class="wptb-testimonial1">
                                            <div class="wptb-item--inner">
                                                <div class="wptb-item--holder">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mr-bottom-25">
                                                        <div class="wptb-item--meta-rating">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                        </div>
                                                        <div class="wptb-item--icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="57"
                                                                height="45" viewBox="0 0 57 45" fill="none">
                                                                <path
                                                                    d="M51.5137 38.5537C56.8209 32.7938 56.2866 25.3969 56.2697 25.3125V2.8125C56.2697 2.06658 55.9734 1.35121 55.4459 0.823763C54.9185 0.296317 54.2031 0 53.4572 0H36.5822C33.48 0 30.9572 2.52281 30.9572 5.625V25.3125C30.9572 26.0584 31.2535 26.7738 31.781 27.3012C32.3084 27.8287 33.0238 28.125 33.7697 28.125H42.4266C42.3671 29.5155 41.9517 30.8674 41.22 32.0513C39.7913 34.3041 37.0997 35.8425 33.2156 36.6188L30.9572 37.0688V45H33.7697C41.5969 45 47.5678 42.8316 51.5137 38.5537ZM20.5566 38.5537C25.8666 32.7938 25.3294 25.3969 25.3125 25.3125V2.8125C25.3125 2.06658 25.0162 1.35121 24.4887 0.823763C23.9613 0.296317 23.2459 0 22.5 0H5.625C2.52281 0 0 2.52281 0 5.625V25.3125C0 26.0584 0.296316 26.7738 0.823762 27.3012C1.35121 27.8287 2.06658 28.125 2.8125 28.125H11.4694C11.41 29.5155 10.9945 30.8674 10.2628 32.0513C8.83406 34.3041 6.1425 35.8425 2.25844 36.6188L0 37.0688V45H2.8125C10.6397 45 16.6106 42.8316 20.5566 38.5537Z"
                                                                    fill="#D70006" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <p class="wptb-item--description"> {!! languageName($item->content) !!}</p>
                                                    <div class="wptb-item--meta">
                                                        <div class="wptb-item--image">
                                                            <img src="{{ $item->avatar }}" alt="img" loading="lazy">
                                                        </div>
                                                        <div class="wptb-item--meta-left">
                                                            <h4 class="wptb-item--title">{{ languageName($item->name) }}
                                                            </h4>
                                                            <h6 class="wptb-item--designation">
                                                                {{ languageName($item->position) }}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Swiper Navigation -->
                            <div class="wptb-swiper-navigation style1">
                                <div class="wptb-swiper-arrow swiper-button-prev"></div>
                                <div class="wptb-swiper-arrow swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="divider-line-hr"></div> --}}
        <!-- Blog Grid -->
        <section class="wptb-blog-grid-one pb-0">
            <div class="container">
                <div class="wptb-heading">
                    <div class="wptb-item--inner">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h6 class="wptb-item--subtitle"><span>05 //</span> Blog</h6>
                                <h1 class="wptb-item--title mb-0">News & Activities<br>
                                </h1>
                            </div>
                            <div class="col-lg-6">
                                <p class="wptb-item--description">I will always update the latest activities to perfect products for customers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wptb-blog--inner">
                    <div class="swiper-container swiper-blog">
                        <!-- swiper slides -->
                        <div class="swiper-wrapper">
                            @foreach ($hotnews as $item)
                                <div class="swiper-slide">
                                    <div class="wptb-blog-grid1 highlight wow fadeInLeft">
                                        <div class="wptb-item--inner">
                                            <div class="wptb-item--image">
                                                <a href="" class="wptb-item-link"><img src="{{ $item->image }}"
                                                        alt="img" loading="lazy"></a>
                                            </div>
                                            <div class="wptb-item--holder">
                                                <div class="wptb-item--date">{{ date_format($item->created_at, 'd/m/Y') }}
                                                </div>
                                                <h4 class="wptb-item--title"><a
                                                        href="">{{ languageName($item->title) }}</a></h4>
                                                <p class="line_3">{{ languageName($item->description) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Swiper Navigation -->
                        <div class="wptb-swiper-navigation style1">
                            <div class="wptb-swiper-arrow swiper-button-prev"></div>
                            <div class="wptb-swiper-arrow swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact -->
        <section class="wptb-contact-form style1">
            <div class="wptb-item-layer both-version">
                <img src="{{ url('frontend/img/texture-2.png') }}" alt="texture-2.png" loading="lazy">
                <img src="{{ url('frontend/img/texture-2-light.png') }}" alt="texture-2-light.png" loading="lazy">
            </div>
            <div class="container">
                {{-- <div class="wptb-form--wrapper">
                    <div class="wptb-heading">
                        <div class="wptb-item--inner text-center">
                            <h1 class="wptb-item--title"> Yêu Cầu Tư Vấn</h1>
                            <div class="wptb-item--description"> Hãy nhập form để được đặt lịch tư vấn cùng Đào Quý Hòa
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <form class="wptb-form" action="" method="post">
                                <div class="wptb-form--inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Họ Và Tên*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Số Điện Thoại*" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control"
                                                    placeholder="Địa chỉ">
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
                                                        <span class="text-first">Gửi Thông Tin</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="wptb-office-address mr-top-100">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><i class="bi bi-phone"></i></div>
                                    <div class="wptb-item--holder">
                                        <h3 class="wptb-item--title">Hotline</h3>
                                        <p class="wptb-item--description hidden-xs">{{ $setting->phone1 }}</p>
                                        <a href="tel:{{ $setting->phone1 }}" class="wptb-item--link">Call Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
                                    <div class="wptb-item--holder">
                                        <h3 class="wptb-item--title">Email</h3>
                                        <p class="wptb-item--description hidden-xs">{{ $setting->email }}</p>
                                        <a href="mailto:{{ $setting->email }}" class="wptb-item--link">Send Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon">Z</div>
                                    <div class="wptb-item--holder">
                                        <h3 class="wptb-item--title">Zalo</h3>
                                        <p class="wptb-item--description hidden-xs"></p>
                                        <a target="_blank" href="https://zalo.me/{{ $setting->phone1 }}"
                                            class="wptb-item--link">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><i class="bi bi-youtube"></i></div>
                                    <div class="wptb-item--holder">
                                        <h3 class="wptb-item--title">Youtube</h3>
                                        <p class="wptb-item--description hidden-xs">{{ $setting->google }}</p>
                                        <a target="_blank" href="{{ $setting->google }}" class="wptb-item--link">View
                                            Channel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><i class="bi bi-facebook"></i></div>
                                    <div class="wptb-item--holder">
                                        <h3 class="wptb-item--title">Facebook</h3>
                                        <p class="wptb-item--description hidden-xs">{{ $setting->facebook }}</p>
                                        <a target="_blank" href="{{ $setting->facebook }}" class="wptb-item--link">Visit
                                            Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="wptb-icon-box1 wow fadeInLeft">
                                <div class="wptb-item--inner flex-start">
                                    <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
                                    <div class="wptb-item--holder">
                                        <h3 class="wptb-item--title">Address</h3>
                                        <a target="_blank" href="https://maps.app.goo.gl/RbxLcX4hv5CqZALo9" class="wptb-item--link">View
                                            Address</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        @media (max-width: 768px) {
            
            .wptb-icon-box1 .wptb-item--icon {
                height: 40px;
                width: 40px;
            }
        }
    </style>
@endsection

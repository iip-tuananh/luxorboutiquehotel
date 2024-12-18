@extends('layouts.main.master')
@section('title')
    {{ $detail_service->name }}
@endsection
@section('description')
    {{ $detail_service->description }}
@endsection
@section('image')
    @php
        $img = json_decode($detail_service->image);
    @endphp
    {{ url('' . $img[0]) }}
@endsection
@section('css')
    <style>
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #272535;
            opacity: .4;
            z-index: 2;
        }

        .hero-section-scroll {
            position: absolute;
            width: 20px;
            height: 30px;
            z-index: 20;
            bottom: 70px;
            left: 50%;
            margin-left: -10px;
        }

        .hero-section-scroll:before {
            content: '';
            position: absolute;
            bottom: -70px;
            height: 40px;
            width: 1px;
            left: 50%;
            background: rgba(255, 255, 255, .2);
        }

        .mousey {
            float: left;
            width: 20px;
            height: 30px;
            border-radius: 6px;
            padding: 0 6px;
            border: 1px solid rgba(255, 255, 255, .7);
            box-sizing: border-box;
            position: relative;
            z-index: 10;
        }

        .scroller {
            position: relative;
            left: 50%;
            top: 6px;
            margin-left: -2px;
            width: 4px;
            height: 4px;
            background: #c4a676;
            border-radius: 4px;
            animation-name: scroll;
            animation-duration: 2.2s;
            animation-timing-function: cubic-bezier(.15, .41, .69, .94);
            animation-iteration-count: infinite;
        }

        @keyframes scroll {
            0% {
                opacity: 0;
            }

            10% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(10px);
                opacity: 0;
            }
        }

        .dec-corner {
            border-color: rgba(255, 255, 255, .4);
        }

        .dc_lb {
            left: 30px;
            bottom: 30px;
            border-bottom: 1px dashed;
            border-left: 1px dashed;
            border-radius: 0 0 0 20px;
        }

        .dc_rb {
            right: 30px;
            bottom: 30px;
            border-bottom: 1px dashed;
            border-right: 1px dashed;
            border-radius: 0 0 20px 0;
        }

        .dc_rt {
            right: 30px;
            top: 90px;
            border-top: 1px dashed;
            border-right: 1px dashed;
            border-radius: 0 20px 0 0;
        }

        .dc_lt {
            left: 30px;
            top: 90px;
            border-top: 1px dashed;
            border-left: 1px dashed;
            border-radius: 20px 0 0 0;
        }

        .dec-corner {
            position: absolute;
            width: 70px;
            height: 70px;
            z-index: 10;
        }

        .wptb-page-heading .wptb-item--inner::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 50%;
            background: linear-gradient(to bottom, rgb(39 37 53 / 0%) 13%, rgba(64, 5, 5, 0.846) 65%);
            z-index: 1;
        }

        .wptb-page-heading .wptb-item--inner .container {
            width: min(100% - 25px, 1600px);
            margin-inline: auto;
            position: relative;
            z-index: 5;
        }

        .wptb-page-heading .wptb-item--inner .container h4 {
            color: #d6ad5b;
            font-style: italic;
            font-size: 18px;
            font-weight: 500;
            padding-bottom: 10px;
            position: relative;
            text-align: center;
            margin-bottom: 0;
        }
        .blog-details .wptb-project-info1 i {
            color: #d6ad5b;
        }

        @media screen and (max-width: 991px) {
            .wptb-page-heading .wptb-item--inner{
                height: 40vh;
            }
            .dc_rt {
                top: 15px;
            }

            .dc_lt {
                top: 15px;
            }
        }
    </style>
@endsection
@section('js')
@endsection
@section('content')
    <main class="wrapper">
        <!-- Page Header -->
        <div>
            <div class="wptb-page-heading">
                <div class="wptb-item--inner" style="background-image: url('{{ url($img[0]) }}');">
                    <div class="wptb-item-layer wptb-item-layer-one">
                        <img src="{{ url('frontend/img/circle.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h1 class="wptb-item--title ">{{ $detail_service->name }}</h1>
                    </div>
                    <div class="overlay"></div>
                    <div class="hero-section-scroll">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
                    </div>
                    <div class="dec-corner dc_lb"></div>
                    <div class="dec-corner dc_rb"></div>
                    <div class="dec-corner dc_rt"></div>
                    <div class="dec-corner dc_lt"></div>
                </div>
            </div>
        </div>
        <!-- Details Content -->
        <section class="blog-details blog-details-box">
            <div class="container-fluid">
                <div class="blog-details-inner">
                    <div class="post-content">
                        <div class="row">
                            <div class="col-xl-7 col-md-7 pe-xl-5 pe-md-4">
                                <div class="fulltext">
                                    @foreach ($img as $key => $item)
                                        @if ($key != 0)
                                            <figure class="block-gallery mb-3">
                                                <img class="w-100" src="{{ $item }}" alt="img">
                                                <a class="wptb-image-popup" href="{{ $item }}"
                                                    data-fancybox="gallery">
                                                    <i class="bi bi-arrows-fullscreen"></i>
                                                </a>
                                            </figure>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <!-- Service Side Info -->
                            <div class="col-xl-5 col-md-5 ps-xl-5 ps-md-4">
                                <div class="sidebar">
                                    <div class="post-header">
                                        <h1 class="post-title fw-normal">Thông tin chi tiết phòng</h1>
                                    </div>
                                    <div class="divider-line-hr my-4"></div>
                                    <div class="wptb-project-info1 mb-0 border-0 bg-transparent">
                                        <div class="wptb--holder p-0">
                                            <div class="row">
                                                <div class="col-xxl-6">
                                                    <div class="wptb--item border-0">
                                                        <div class="wptb--meta"><i class="fa-solid fa-crop"></i><label>Diện
                                                                Tích:</label>
                                                            <span>{{ $detail_service->dientich }}</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 mb-1 mt-xxl-0">
                                                    <div class="wptb--item border-0">
                                                        <div class="wptb--meta"><i class="fa-regular fa-user"></i><label>Số
                                                                lượng người:</label>
                                                            <span>{{ $detail_service->wc }}</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-12">
                                                    <div class="wptb--item border-0">
                                                        <div class="wptb--meta"><i class="fas fa-bed"></i><label>Giường
                                                                ngủ:</label> <span>{{ $detail_service->phongngu }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider-line-hr my-4"></div>
                                    <div class="price">
                                        @if ($detail_service->price > 0)
                                            <b>{{ number_format($detail_service->price) }} VNĐ</b>
                                        @else
                                            <b>Giá Liên Hệ</b>
                                        @endif

                                    </div>
                                    <div class="wptb-item--button mt-2 mb-2">
                                        <a class="btn btn-two white" href="tel:{{ $setting->phone1 }}">
                                            <span class="btn-wrap">
                                                <span class="text-first">Gọi hotline</span>
                                                <span class="text-second"> <i class="bi bi-telephone"></i> <i
                                                        class="bi bi-telephone"></i></span>
                                            </span>
                                        </a>
                                        <a href="{{ route('orderNow') }}" class="btn btn-two creative text-uppercase mt-1"
                                            style="font-size: 12px;padding: 7px 12px;">
                                            <span class="btn-wrap">
                                                <span class="text-first">Đặt Phòng</span>
                                            </span>
                                        </a>
                                    </div>

                                    <div class="fulltext">
                                        {!! languageName($detail_service->content) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details Content -->
        <section class="wptb-blog-grid-one pb-0">
            <div class="container">
                <div class="row has-radius">
                    <div class="col-lg-4 grid-item mt-3">
                        <div class="wptb-heading">
                            <div class="wptb-item--inner">
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <h6 class="wptb-item--subtitle"><span>01 //</span> Project</h6>
                                        <h1 class="wptb-item--title mb-0">Phòng khác<br>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($serviceLq) > 0)
                        @foreach ($serviceLq as $key => $item)
                            @php
                                $imageRoom = json_decode($item->image);
                            @endphp
                            <div class="col-lg-4 grid-item mt-3">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--image">
                                        <a class="w-100" href="{{ route('roomDetail', ['slug' => $item->slug]) }}">
                                            <img src="{{ $imageRoom[0] }}" alt="img">
                                        </a>
                                    </div>
                                    <div class="wptb-item--holder mt-1 mb-5">
                                        <div class="wptb-item--meta">
                                            <h4><a
                                                    href="{{ route('roomDetail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                            </h4>
                                            <ul class="option_project">
                                                <li class=""><b class="proce">{{ number_format($item->price) }}đ</b>
                                                    |</li>
                                                <li>{{ $item->phongngu }} |</li>
                                                <li>{{ $item->dientich }} |</li>
                                                <li>{{ $item->wc }} người</li>
                                            </ul>
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
        </section>
    </main>
@endsection

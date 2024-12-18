@extends('layouts.main.master')
@section('title')
    {{ $detail->name }}
@endsection
@section('description')
    {{ $detail->description }}
@endsection
@section('image')
    @php
        $img = json_decode($detail->images);
    @endphp
    {{ url('' . $img[0]) }}
@endsection
@section('js')
@endsection
@section('css')
@endsection
@section('content')
    <main class="wrapper">
        <!-- Page Header -->
        <div class="wptb-page-heading">
            <div class="wptb-item--inner" style="background-image: url('{{ $img[0] }}');">
                <div class="wptb-item-layer wptb-item-layer-one">
                    <img src="{{ url('frontend/img/circle.png') }}" alt="img">
                </div>
                <h2 class="wptb-item--title ">{{ $detail->name }}</h2>
            </div>
        </div>
        <!-- Details Content -->
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <!-- Service Navigation List -->

                    <div class="col-lg-8 col-md-8 mb-5 mb-md-0 ps-md-0">
                        <div class="blog-details-inner">
                            <div class="post-content">
                                <div class="post-header">
                                    <h1 class="post-title">{{ $detail->name }}</h1>
                                </div>
                                <div class="fulltext">
                                    {!! languageName($detail->content) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 pe-md-5">
                        <div class="sidebar">
                            <div class="sidenav">
                                <ul class="side_menu">
                                    @foreach ($list as $item)
                                        <li class="menu-item {{ request()->slug == $item->slug ? 'active' : '' }}">
                                            <a href="{{ route('serviceDetail', ['cate' => $item->cate_service_slug, 'slug' => $item->slug]) }}"
                                                class="d-flex align-items-center justify-content-between">
                                                <span>
                                                    {{ $item->name }}
                                                </span>
                                                <i class="bi bi-chevron-right"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Details Content -->
        <!-- Contact -->
        {{-- <section class="wptb-contact-form-two pt-5">
            <div class="container">
                <div class="wptb-form--wrapper">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="wptb-heading">
                                <div class="wptb-item--inner">
                                    <h6 class="wptb-item--subtitle"> <span>01 //</span> Contact Us</h6>
                                    <h1 class="wptb-item--title">Đăng ký dịch vụ</h1>
                                </div>
                            </div>
                            <div class="widget">
                                <div class="wptb-office">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--subtitle">
                                            Gọi Hotline
                                        </div>
                                        <h5 class="wptb-item--title"><a
                                                href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a></h5>
                                    </div>
                                </div>
                                <div class="wptb-office">
                                    <div class="wptb-item--inner">
                                        <div class="wptb-item--subtitle">
                                            Liên hệ qua email
                                        </div>
                                        <h5 class="wptb-item--title"><a
                                                href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <form class="wptb-form" id="commentformservec">
                                <div class="wptb-form--inner">
                                    <div class="row">
                                        <input hidden type="text" name="dichvu" value="{{ $detail->name }}"
                                            id="">
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Họ Tên*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-4">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 mb-4">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Số điện thoại*">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 mb-4">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="Lời nhắn"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="wptb-item--button">
                                                <button class="btn" type="submit">
                                                    <span class="btn-wrap">
                                                        <span class="text-first"><span
                                                                class="loader ml-15 spin-icon"></span> Gửi Thông Tin</span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script>
                                $('#commentformservec').validate({
                                    rules: {
                                        "name": {
                                            required: true,
                                        },
                                        "phone": {
                                            required: true,
                                            minlength: 8
                                        }
                                    },
                                    messages: {
                                        "name": {
                                            required: "Tên bạn là gì?",
                                        },
                                        "phone": {
                                            required: "Nhập sdt liên hệ",
                                        }
                                    },
                                    submitHandler: function(form) {
                                        $(".spin-icon").css("display", "block");
                                        $.ajax({
                                            url: "https://script.google.com/macros/s/AKfycbxA9o5dMJy7VgIkjImoE70sNh2AfPI85P_P0D6dOMIY6hJiQfQrkRuFoB6wJZ0XUnkH/exec",
                                            type: "post",
                                            data: $("#commentformservec").serializeArray(),
                                            success: function() {
                                                $(".spin-icon").css("display", "none");
                                                jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
                                            },
                                            error: function() {
                                                jQuery.notify("Gửi thông tin thất bại", "error");
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    </main>
@endsection

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#d70018">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
    <meta name='revisit-after' content='2 days' />
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta http-equiv="Content-Language" content="vi" />
    <link rel="alternate" href="{{ url()->current() }}" hreflang="vi-vn" />
    <meta name="description" content="@yield('description')">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="@yield('title')" />
    <meta name="rating" content="General">
    <meta name="application-name" content="@yield('title')" />
    <meta name="theme-color" content="#ed3235" />
    <meta name="msapplication-TileColor" content="#ed3235" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="{{ url()->current() }}" />
    <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
    <meta property="og:url" content="">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image')">
    <meta property="og:site_name" content="{{ url()->current() }}">
    <meta property="og:image:alt" content="@yield('title')">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="vi_VN" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@{{ url() - > current() }}" />
    <meta name="twitter:title" content="@yield('title')" />
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:image" content="@yield('image')" />
    <meta name="twitter:url" content="" />
    <meta itemprop="name" content="@yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="@yield('image')">
    <meta itemprop="url" content="">
    <link rel="canonical" href="{{ \Request::url() }}">
    <!-- <link rel="amphtml" href="amp/" /> -->
    <link rel="image_src" href="@yield('image')" />
    <link rel="image_src" href="@yield('image')" />
    <link rel="shortcut icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/callbutton.css') }}">
    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')
    <style>
        @media (min-width: 1200px) {
            .c-book-expand {
                right: 18px;
                top: 150px;
            }
        }

        @media (min-width: 992px) {
            .c-book-expand {
                width: 70px;
                height: 70px;
                top: 101px;
            }
        }

        .c-book-expand {
            width: 78px;
            height: 78px;
            border: none;
            background-color: #b37a2d;
            position: fixed;
            z-index: 69;
            top: 91px;
            right: 15px;
            display: block;
            vertical-align: top;
            cursor: pointer;
            padding: 0;
            overflow: hidden;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        a.c-book-expand:hover {
            background-color: #b37a2d;
            -webkit-background-clip: unset;
        }

        @media (min-width: 992px) {
            .c-book-expand span {
                width: 70px;
                height: 70px;
                font-size: 14px;
                padding-top: 18px;
            }
        }

        .c-book-expand span {
            display: block;
            width: 71px;
            height: 50px;
            font-size: 16px;
            padding-top: 14px;
            padding-right: 17px;
            text-transform: uppercase;
            line-height: normal;
            text-align: center;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            color: #fff;
        }

        .c-book-expand span {
            font-weight: bold;
        }

        .c-book-expand span:after {
            content: "";
            position: absolute;
            z-index: 2;
            top: -40px;
            bottom: -40px;
            background: #fff;
            width: 10px;
            left: -10%;
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
            -webkit-filter: blur(12px);
            filter: blur(12px);
            -webkit-animation-name: item-float;
            animation-name: item-float;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            -webkit-animation-timing-function: linear;
        }

        @keyframes item-float {
            0% {
                left: -20%;
            }

            100% {
                left: 120%;
            }
        }
    </style>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi,vi,zh-CN',
            }, 'translate_select');
        }
    </script>
    <style>
        .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
            display: none;
        }

        .skiptranslate {
            display: none;
            top: 0;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            position: revert !important;
            top: 0px !important;
        }
    </style>
</head>

<body class="theme-style--light">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <img src="{{ $setting->logo }}" alt="img">
                {{-- <img src="{{ $setting->logo }}" alt="img" class="wheel"> --}}
            </div>
        </div>
    </div>
    <!-- pointer start -->
    <div class="pointer bnz-pointer" id="bnz-pointer"></div>
    @include('layouts.header.index')

    <!-- Main Wrapper-->
    @yield('content')
    <!-- Footer -->
    @include('layouts.footer.index')
    <div id="translate_select"></div>
    <script>
        function translateheader(lang) {

            var languageSelect = document.querySelector("select.goog-te-combo");
            languageSelect.value = lang;
            languageSelect.dispatchEvent(new Event("change"));
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <div onclick="window.location.href= 'tel:0338999639'" class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:0338999639" class="pps-btn-img">
                    <img src="{{ url('frontend/img/phone.png') }}" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
        <a href="tel:0338999639">
        </a>
        <div class="hotline-bar"><a href="tel:0338999639">
            </a><a href="tel:0338999639">
                <span class="text-hotline">0338999639</span>
            </a>
        </div>

    </div>
    <div class="inner-fabs">
        <a target="blank" href="" class="fabs roundCool" id="challenges-fab"
            data-tooltip="Send Messenger">
            <img class="inner-fab-icon" src="{{ url('frontend/img/messenger-icon.png') }}" alt="challenges-icon"
                border="0">
        </a>
        <a target="blank" href="https://zalo.me/0338999639" class="fabs roundCool" id="chat-fab"
            data-tooltip="Send message Zalo">
            <img class="inner-fab-icon" src="{{ url('frontend/img/zalo.png') }}" alt="chat-active-icon"
                border="0">
        </a>
        <a target="blank" href="https://maps.app.goo.gl/RbxLcX4hv5CqZALo9" class="fabs roundCool" id="chat-fab"
            data-tooltip="View map">
            <img class="inner-fab-icon" src="{{ url('frontend/img/map.png') }}" alt="chat-active-icon"
                border="0">
        </a>

    </div>
    <div class="fabs roundCool call-animation" id="main-fab">
        <img class="img-circle" src="{{ url('frontend/img/lienhe.png') }}" alt="" width="135">
    </div>
    <div class="totop">
        <a href="#"><i class="bi bi-chevron-up"></i></a>
    </div>
    <a href="{{ route('orderNow') }}" class="c-book-expand" style="display: inline;"><span>Book Now</span></a>


    <!-- Framework -->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!-- WOW Scroll Effect -->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- Swiper Slider -->
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/swiper-gl.min.js') }}"></script>
    <!-- Odometer Counter -->
    <!-- <script src="js/appear.js"></script> -->
    <script src="{{ asset('frontend/js/notify.min.js') }}"></script>
    <!-- Fancybox -->
    <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
    <!-- Flatpickr -->
    <!-- <script src="js/flatpickr.min.js"></script> -->
    <!-- Nice Select -->
    <!-- <script src="js/jquery.nice-select.min.js"></script> -->
    <!-- Cursor Effect -->
    <!-- <script src="js/cursor-effect.js"></script> -->
    <!-- Theme Custom JS -->
    <script src="{{ asset('frontend/js/theme.js') }}"></script>
    <script src="{{ asset('frontend/js/callbutton.js') }}"></script>
</body>

</html>

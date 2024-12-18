@extends('layouts.main.master')
@section('title')
    Đặt phòng
@endsection
@section('description')
    Đặt phòng
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
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
    .blog-details.blog-details-box {
        padding: 0 100px;
    }
</style>
@endsection
@section('content')
    <main class="wrapper">
        <!-- Page Header -->
        <div>
            <div class="wptb-page-heading">
                <div class="wptb-item--inner" style="background-image: url('{{ url('frontend/img/brecum.jpg') }}');">
                    <div class="wptb-item-layer wptb-item-layer-one">
                        <img src="{{ url('frontend/img/circle.png') }}" alt="img">
                    </div>
                    <div class="container">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h1 class="wptb-item--title ">Đặt phòng</h1>
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
                            <div class="col-xl-12 col-md-12 pe-xl-5 pe-md-4">
                                {{-- *Embedded Code: engver --}}

                                <div class="hbe-bws">
                                    <section id="hbe-bws-page">
                                        <div id="hbe-bws-wrapper"> </div>
                                    </section>
                                </div>
                                <link type="text/css" rel="stylesheet" href="//book.securebookings.net/css/app.css" />
                                <script type="text/javascript" src="//book.securebookings.net/js/widget.all.js"></script>
                                <script type="text/javascript"
                                    src="//book.securebookings.net/widgetCustomize?lang=en&widgetType=Widget&id=5492ea90-15a0-1732871736-4060-9f95-a486922f3417&ajax=true">
                                </script>

                                {{-- *Embedded Code: vietver --}}

                                <div class="hbe-bws">
                                    <section id="hbe-bws-page">
                                        <div id="hbe-bws-wrapper"> </div>
                                    </section>
                                </div>
                                <link type="text/css" rel="stylesheet" href="//book.securebookings.net/css/app.css" />
                                <script type="text/javascript" src="//book.securebookings.net/js/widget.all.js"></script>
                                <script type="text/javascript"
                                    src="//book.securebookings.net/widgetCustomize?lang=vi&widgetType=Widget&id=5492ea90-15a0-1732871736-4060-9f95-a486922f3417&ajax=true">
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

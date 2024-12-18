<!-- Main Header -->
<header class="header color-fixed">
    <!-- Lower Bar -->
    <div class="header-inner">
        <div class="container-fluid pe-0">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Left Part -->
                <div class="header_left_part d-flex align-items-center" style="width: 176px;">
                    <div class="logo">
                        <a href="/" class="light_logo"><img src="{{ $setting->logo }}" alt="logo"></a>
                        {{-- <a href="/" class="dark_logo"><img src="./img/logo-dark.svg" alt="logo"></a> --}}
                    </div>
                </div>
                <!-- Center Part -->
                <div class="header_center_part d-none d-xl-block">
                    <div class="mainnav">
                        <ul class="main-menu">
                            <li class="menu-item ">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{ route('aboutUs') }}">Giới thiệu</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Phòng</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach ($rooms as $item)
                                        <li class="menu-item"><a
                                                href="{{ route('roomDetail', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">Dich vụ</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach ($servicehome as $item)
                                        <li class="menu-item"><a
                                                href="{{ route('serviceList', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Tin tức</a>
                                <ul class="sub-menu" data-lenis-prevent>
                                    @foreach ($blogCate as $item)
                                        <li class="menu-item"><a
                                                href="{{ route('listCateBlog', ['slug' => $item->slug]) }}">{{ languageName($item->name) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('lienHe') }}">Liên Hệ</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Right Part -->
                <div class="header_right_part d-flex align-items-center">
                    {{-- <a href="" class="aside_open_button btn btn-two creative text-uppercase"
                        style="    font-size: 12px;padding: 7px 12px;">
                        <span class="btn-wrap">
                            <span class="text-first">Đặt Lịch Tư Vấn</span>
                        </span>
                    </a> --}}
                    <div class="lang-wrap">
                        <a href="javascript:;" onclick="translateheader('vi')"><img style="width: 30px;" src="{{url('frontend/img/vn.png')}}" alt=""></a>
                        {{-- <span>/</span> --}}
                        <a href="javascript:;" onclick="translateheader('en')"><img style="width: 30px;" src="{{url('frontend/img/eng.png')}}" alt=""></a>
                     </div>
                    <button type="button" class="mr_menu_toggle wptb-element d-xl-none">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Main Header -->
<!-- Mobile Responsive Menu -->
<div class="mr_menu" data-lenis-prevent>
    <button type="button" class="mr_menu_close"><i class="bi bi-x-lg"></i></button>
    <div class="logo"></div>
    <!-- Keep this div empty. Logo will come here by JavaScript -->
    <h6>Menu</h6>
    <div class="mr_navmenu"></div>
    <!-- Keep this div empty. Menu will come here by JavaScript -->
    <h6>Liên Hệ</h6>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
            </div>
        </div>
    </div>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-geo-alt"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="">{{ $setting->address1 }}</a></p>
            </div>
        </div>
    </div>
    <div class="wptb-icon-box1 style2">
        <div class="wptb-item--inner flex-start">
            <div class="wptb-item--icon"><i class="bi bi-envelope"></i></div>
            <div class="wptb-item--holder">
                <p class="wptb-item--description"><a href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a></p>
            </div>
        </div>
    </div>
    <h6>Mạng Xã Hội</h6>
    <div class="social-box">
        <ul>
            <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
            <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
        </ul>
    </div>
</div>
<div class="aside_info_wrapper" data-lenis-prevent>
    <button class="aside_close">Đóng <i class="bi bi-x-lg"></i></button>

    <div class="aside_info_inner">
        <h6>// Vui Lòng Nhập Thông Tin</h6>
        <form class="wptb-form" method="post" id="commentform">
            <div class="wptb-form--inner">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Họ Tên*">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="form-group">
                            <input type="phone" name="phone" class="form-control" placeholder="Số Điện Thoại*">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
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
                                    <span class="text-first"><span class="loader ml-15 spin-icon"></span> Gửi</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <h6>// Mạng Xã Hội</h6>
        <div class="social-box style-square">
            <ul>
                <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/"><i class="bi bi-linkedin"></i></a></li>
                <li><a href="https://www.behance.com/"><i class="bi bi-behance"></i></a></li>
                <li><a href="https://www.youtube.com/"><i class="bi bi-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Modal Search -->
<div class="search-modal">
    <div class="modal fade" id="modalSearch">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="search_overlay">
                    <form class="credential-form" method="post">
                        <div class="form-group">
                            <input type="text" name="search" class="keyword form-control"
                                placeholder="Search Here">
                        </div>
                        <button type="submit" class="btn-search">
                            <span class="text-first"> <i class="bi bi-arrow-right"></i> </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#commentform').validate({
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
        // submitHandler: function(form) {
        //     $(".spin-icon").css("display", "block");
        //     $.ajax({
        //         url: "https://script.google.com/macros/s/AKfycbxA9o5dMJy7VgIkjImoE70sNh2AfPI85P_P0D6dOMIY6hJiQfQrkRuFoB6wJZ0XUnkH/exec",
        //         type: "post",
        //         data: $("#commentform").serializeArray(),
        //         success: function() {
        //             $(".spin-icon").css("display", "none");
        //             jQuery.notify("Thành công! Chúng tôi sẽ sớm liên hệ", "success");
        //         },
        //         error: function() {
        //             jQuery.notify("Gửi thông tin thất bại", "error");
        //         }
        //     });
        // }
    });
</script>

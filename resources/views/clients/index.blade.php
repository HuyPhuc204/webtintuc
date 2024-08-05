@extends('clients.layouts.master')
@section('title')
    Magnews - Trang chủ
@endsection
@section('content')
    <!-- content    -->
    <div class="content">
        <!-- hero-slider-wrap     -->
        <div class="hero-slider-wrap fl-wrap">
            <!-- hero-slider-container     -->
            <div class="hero-slider-container multi-slider fl-wrap full-height">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($tinMoiNhat as $item)
                            <!-- swiper-slide -->
                            <div class="swiper-slide">
                                <div class="bg-wrap">
                                    <div class="bg" data-bg="{{ asset($item->hinh_anh) }}" data-swiper-parallax="40%">
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                                <div class="hero-item fl-wrap">
                                    <div class="container">
                                        <a class="post-category-marker" href="category.html">{{ $item->ten_danh_muc }}</a>
                                        <div class="clearfix"></div>
                                        <h2><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $item->tieu_de }}</a></h2>
                                        <h4>{{ $item->tom_tat }} </h4>
                                        <div class="clearfix"></div>
                                        <span class="post-date"><i class="far fa-clock"></i>{{ $item->ngay_dang }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide  end   -->
                        @endforeach
                    </div>
                </div>
                <div class="fs-slider_btn color-bg fs-slider-button-prev"><i class="fas fa-caret-left"></i>
                </div>
                <div class="fs-slider_btn color-bg fs-slider-button-next"><i class="fas fa-caret-right"></i>
                </div>
            </div>
            <!-- hero-slider-container  end   -->
            <!-- hero-slider_controls-wrap   -->
            <div class="hero-slider_controls-wrap">
                <div class="container">
                    <div class="hero-slider_controls-list multi-slider_control">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach ($tinMoiNhat as $item)
                                    <!-- swiper-slide  -->
                                    <div class="swiper-slide">
                                        <div class="hsc-list_item fl-wrap">
                                            <div class="hsc-list_item-media">
                                                <div class="bg-wrap">
                                                    <div class="bg" data-bg="{{ asset($item->hinh_anh) }}"></div>
                                                </div>
                                            </div>
                                            <div class="hsc-list_item-content fl-wrap">
                                                <h4>{{ $item->tieu_de }}</h4>
                                                <span class="post-date"><i class="far fa-clock"></i>
                                                    {{ $item->ngay_dang }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end   -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="multi-pag"></div>
                </div>
            </div>
            <!-- hero-slider_controls-wrap end  -->
            <div class="slider-progress-bar act-slider">
                <span>
                    <svg class="circ" width="30" height="30">
                        <circle class="circ2" cx="15" cy="15" r="13" stroke="rgba(255,255,255,0.4)"
                            stroke-width="1" fill="none" />
                        <circle class="circ1" cx="15" cy="15" r="13" stroke="#e93314" stroke-width="2"
                            fill="none" />
                    </svg>
                </span>
            </div>
        </div>
        <!-- hero-slider-wrap  end   -->
        <!-- section   -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-container fl-wrap fix-container-init">
                            <div class="section-title">
                                <h2>Tin tức mới nhất</h2>
                                <h4>ngày hôm nay</h4>
                                {{-- <div class="ajax-nav">
                                    <ul>
                                        @foreach ($danhMuc as $key => $item)
                                            <li>
                                                <a href="clients.category" class="{{ $key == 0 ? 'current_page' : '' }}">
                                                    {{ $item->ten_danh_muc }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div> --}}
                                @include('clients.category')
                                @yield('category')
                            </div>
                            <div class="ajax-wrapper fl-wrap">
                                <div class="ajax-loader"><img src="{{ asset('assets/images/loading.gif') }}"
                                        alt="" />
                                </div>
                                <div id="ajax-content" class="fl-wrap">
                                </div>
                            </div>
                            <div class="content-banner-wrap cbw_mar">
                                <img src="{{ asset('assets/images/all/banner.jpg') }}" class="respimg" alt="">
                            </div>
                            <div class="clearfix"></div>
                            <div class="section-title sect_dec">
                                <h2>Tin nổi bật</h2>
                                <h4>ngày hôm nay</h4>
                            </div>
                            <div class="grid-post-wrap">
                                <!--grid-post-item-->
                                <div class="single-grid-slider-wrap fl-wrap">
                                    <div class="single-grid-slider">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                @foreach ($tinNoiBat as $item)
                                                    <!-- swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="grid-post-item  bold_gpi  fl-wrap">
                                                            <div class="grid-post-media gpm_sing">
                                                                <div class="bg" data-bg="{{ asset($item->hinh_anh) }}">
                                                                </div>
                                                                {{-- <div class="author-link"><a href="author-single.html"><img
                                                                        src="images/avatar/2.jpg" alt="">
                                                                    <span>By Mark Rose</span></a></div> --}}
                                                                <div class="grid-post-media_title">
                                                                    <a class="post-category-marker"
                                                                        href="category.html">{{ $item->ten_danh_muc }}</a>
                                                                    <h4><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $item->tieu_de }}</a>
                                                                    </h4>
                                                                    <span class="video-date"><i class="far fa-clock"></i>
                                                                        {{ $item->ngay_dang }}</span>
                                                                    <ul class="post-opt">
                                                                        <li><i class="far fa-comments-alt"></i>
                                                                            {{ $item->binh_luan }}
                                                                        </li>
                                                                        <li><i class="fal fa-eye"></i>
                                                                            {{ $item->luot_xem }} </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- swiper-slide end-->
                                                @endforeach

                                            </div>
                                            <div class="sgs-pagination sgs_ver "></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- sidebar   -->
                        <div class="sidebar-content fl-wrap fix-bar">
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="box-widget-content">
                                    <!-- content-tabs-wrap -->
                                    <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                        <div class="content-tabs fl-wrap">
                                            <ul class="tabs-menu fl-wrap no-list-style">
                                                <li class="current"><a href="#tab-popular"> Tin phổ biến </a>
                                                </li>
                                                <li><a href="#tab-resent">Tin gần đây</a></li>
                                            </ul>
                                        </div>
                                        <!--tabs -->
                                        <div class="tabs-container">
                                            <!--tab -->
                                            <div class="tab">
                                                <div id="tab-popular" class="tab-content first-tab">
                                                    <div class="post-widget-container fl-wrap">
                                                        <!-- post-widget-item -->
                                                        @foreach ($tinNoiBat as $item)
                                                            <div class="post-widget-item fl-wrap">
                                                                <div class="post-widget-item-media">
                                                                    <a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}"><img
                                                                            src="{{ asset($item->hinh_anh) }}"
                                                                            alt=""></a>
                                                                </div>
                                                                <div class="post-widget-item-content">
                                                                    <h4><a
                                                                            href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $item->tieu_de }}</a>
                                                                    </h4>
                                                                    <ul class="pwic_opt">
                                                                        <li><span><i
                                                                                    class="far fa-clock"></i>{{ $item->ngay_dang }}</span>
                                                                        </li>
                                                                        <li><span><i class="far fa-comments-alt"></i>
                                                                                {{ $item->binh_luan }}</span></li>
                                                                        <li><span><i class="fal fa-eye"></i>
                                                                                {{ $item->luot_xem }}</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- post-widget-item end -->
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!--tab  end-->
                                            <!--tab -->
                                            <div class="tab">
                                                <div id="tab-resent" class="tab-content">
                                                    <div class="post-widget-container fl-wrap">
                                                        @foreach ($tinGanDay as $item)
                                                            <!-- post-widget-item -->
                                                        <div class="post-widget-item fl-wrap">
                                                            <div class="post-widget-item-media">
                                                                <a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}"><img
                                                                        src="{{asset($item->hinh_anh)}}" alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{$item->tieu_de}}</a></h4>
                                                                <ul class="pwic_opt">
                                                                    <li><span><i class="far fa-clock"></i>{{$item->ngay_dang}}</span></li>
                                                                    <li><span><i class="far fa-comments-alt"></i>
                                                                        {{$item->binh_luan}}</span></li>
                                                                    <li><span><i class="fal fa-eye"></i>
                                                                        {{$item->luot_xem}}</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- post-widget-item end -->
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <!--tab end-->
                                        </div>
                                        <!--tabs end-->
                                    </div>
                                    <!-- content-tabs-wrap end -->
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="widget-title">Theo dõi chúng tôi</div>
                                <div class="box-widget-content">
                                    <div class="social-widget">
                                        <a href="#" target="_blank" class="facebook-soc">
                                            <i class="fab fa-facebook-f"></i>
                                            <span class="soc-widget-title">Lượt thích</span>
                                            <span class="soc-widget_counter">2640</span>
                                        </a>
                                        <a href="#" target="_blank" class="twitter-soc">
                                            <i class="fab fa-twitter"></i>
                                            <span class="soc-widget-title">Lượt theo dõi</span>
                                            <span class="soc-widget_counter">1456</span>
                                        </a>
                                        <a href="#" target="_blank" class="youtube-soc">
                                            <i class="fab fa-youtube"></i>
                                            <span class="soc-widget-title">Lượt theo dõi</span>
                                            <span class="soc-widget_counter">1456</span>
                                        </a>
                                        <a href="#" target="_blank" class="instagram-soc">
                                            <i class="fab fa-instagram"></i>
                                            <span class="soc-widget-title">Lượt theo dõi</span>
                                            <span class="soc-widget_counter">1456</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                            <!-- box-widget -->
                            <div class="box-widget fl-wrap">
                                <div class="widget-title">Tag phổ biến</div>
                                <div class="box-widget-content">
                                    <div class="tags-widget">
                                        @foreach ($danhMuc as $item)
                                            <a href="#">{{ $item->ten_danh_muc }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- box-widget  end -->
                        </div>
                        <!-- sidebar  end -->
                    </div>
                </div>
                <div class="limit-box fl-wrap"></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="section-title sect_dec">
                    <h2>Lượt xem nhiều nhất</h2>
                    <h4>ngày hôm nay</h4>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="list-post-wrap list-post-wrap_column list-post-wrap_column_fw">
                            @if ($xemNhieuNhat)
                                <!--list-post-->
                                <div class="list-post fl-wrap">
                                    <a class="post-category-marker" href="#">{{ $xemNhieuNhat->ten_danh_muc }}</a>
                                    <div class="list-post-media">
                                        <a href="{{ url('/chi-tiet-tin', ['id' => $xemNhieuNhat->id]) }}">
                                            <div class="bg-wrap">
                                                <div class="bg" data-bg="{{ asset($xemNhieuNhat->hinh_anh) }}"></div>
                                            </div>
                                        </a>
                                        <span class="post-media_title">&copy; Image Copyrights Title</span>
                                    </div>
                                    <div class="list-post-content">
                                        <h3><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $xemNhieuNhat->tieu_de }} </a></h3>
                                        <span class="post-date"><i
                                                class="far fa-clock"></i>{{ $xemNhieuNhat->ngay_dang }}</span>
                                        <p>{{ $xemNhieuNhat->tom_tat }} </p>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i> {{ $xemNhieuNhat->binh_luan }} </li>
                                            <li><i class="fal fa-eye"></i> {{ $xemNhieuNhat->luot_xem }} </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--list-post end-->
                            @endif

                        </div>
                        {{-- <a href="blog2.html" class="dark-btn fl-wrap"> Read all News </a> --}}
                    </div>
                    <div class="col-md-7">
                        <div class="picker-wrap-container fl-wrap">
                            <div class="picker-wrap-controls">
                                <ul class="fl-wrap">
                                    <li><span class="pwc_up"><i class="fas fa-caret-up"></i></span></li>
                                    <li><span class="pwc_pause"><i class="fas fa-pause"></i></span></li>
                                    <li><span class="pwc_down"><i class="fas fa-caret-down"></i></span></li>
                                </ul>
                            </div>
                            <div class="picker-wrap fl-wrap">
                                <div class="list-post-wrap  fl-wrap">
                                    @foreach ($listXemNhieuNhat as $item)
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{ asset($item->hinh_anh) }}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <a class="post-category-marker"
                                                    href="#">{{ $item->ten_danh_muc }}</a>
                                                <h3><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $item->tieu_de }}</a>
                                                </h3>
                                                <span class="post-date"><i class="far fa-clock"></i>
                                                    {{ $item->ngay_dang }}</span>
                                                <p>{{ $item->tom_tat }}</p>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i> {{ $item->binh_luan }} </li>
                                                    <li><i class="fal fa-eye"></i> {{ $item->luot_xem }} </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--list-post end-->
                                    @endforeach
                                </div>
                            </div>
                            <div class="controls-limit fl-wrap"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="limit-box"></div>
        </section>
        <!-- section end -->
        <!-- section  -->
        <div class="gray-bg ad-wrap fl-wrap">
            <div class="content-banner-wrap">
                <img src="images/all/banner.jpg" class="respimg" alt="">
            </div>
        </div>
        <!-- section end -->
    </div>
    <!-- content  end-->
    <!-- cookie-info-bar -->
    {{-- <div class="cookie-info-bar">
        <div class="container">
            <div class="cookie-info-bar_title"><i class="fal fa-cookie"></i>Trang web của chúng tôi sử dụng cookie.
                Tìm hiểu thêm về việc sử dụng cookie của chúng tôi: <a href="#">Chính sách cookie</a></div>
            <a href="#" class="sicb_btn color-bg">Chấp nhận</a>
            <a href="#" class="sicb_btn">Hủy</a>
        </div>
    </div> --}}
    <!-- cookie-info-bar end -->
@endsection

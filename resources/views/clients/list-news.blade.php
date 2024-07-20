@extends('clients.layouts.master')
@section('title')
    Magnews - Danh mục
@endsection
@section('content')
    <!-- content    -->
    <div class="content">
        <div class="breadcrumbs-header fl-wrap">
            <div class="container">
                <div class="breadcrumbs-header_url">
                    <a href="{{ url('/') }}">Trang chủ</a><span>Danh mục</span>
                </div>
                <div class="scroll-down-wrap">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                    <span>Cuộn xuống để xem hết</span>
                </div>
            </div>
            <div class="pwh_bg"></div>
        </div>
        <!--section   -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="main-container fl-wrap fix-container-init">
                            <div class="section-title">
                                <h2>Most Recent World News</h2>
                                <h4>Don't miss daily news</h4>
                                {{-- <div class="steader_opt steader_opt_abs">
                                    <select name="filter" id="list" data-placeholder="Persons"
                                        class="style-select no-search-select">
                                        <option>Latest</option>
                                        <option>Most Read</option>
                                        <option>Most Viewed</option>
                                        <option>Most Commented</option>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="list-post-wrap">
                                @foreach ($tinTheoLoai as $item)
                                    <!--list-post-->
                                <div class="list-post fl-wrap">
                                    <div class="list-post-media">
                                        <a href="post-single.html">
                                            <div class="bg-wrap">
                                                <div class="bg" data-bg="{{asset($item->hinh_anh)}}"></div>
                                            </div>
                                        </a>
                                        <span class="post-media_title">&copy; Image Copyrights Title</span>
                                    </div>
                                    <div class="list-post-content">
                                        <a class="post-category-marker" href="#">{{$item->ten_danh_muc}}</a>
                                        <h3><a href="post-single.html">{{$item->tieu_de}}</a></h3>
                                        <span class="post-date"><i class="far fa-clock"></i>{{$item->ngay_dang}}</span>
                                        <p>{{$item->tom_tat}} </p>
                                        <ul class="post-opt">
                                            <li><i class="far fa-comments-alt"></i> {{$item->binh_luan}} </li>
                                            <li><i class="fal fa-eye"></i> {{$item->luot_xem}} </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--list-post end-->
                                @endforeach
                            </div>
                            <!--pagination-->
                            {{-- Phân trang --}}
                            <div class="pagination">
                                <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i></a>
                                <a href="#" class="current-page">01.</a>
                                <a href="#" >02.</a>
                                <a href="#">03.</a>
                                <a href="#">04.</a>
                                <a href="#" class="nextposts-link"><i class="fas fa-caret-right"></i></a>
                            </div>
                            <!--pagination end-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- sidebar   -->
                    <div class="sidebar-content fl-wrap fixed-bar">
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="box-widget-content">
                                <div class="search-widget fl-wrap">
                                    <form action="#">
                                        <input name="se" id="se12" type="text" class="search"
                                            placeholder="Search..." value="" />
                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- box-widget  end -->
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Danh mục</div>
                            <div class="box-widget-content">
                                <ul class="cat-wid-list">
                                    @foreach ($demDanhMuc as $item)
                                        <li><a href="#">{{$item->ten_danh_muc}}</a><span>{{$item->soLuongTin}}</span></li>
                                    @endforeach
                                </ul>
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
                        <!-- box-widget -->
                        <div class="box-widget fl-wrap">
                            <div class="widget-title">Theo dõi chúng tôi</div>
                            <div class="box-widget-content">
                                <div class="social-widget">
                                    <a href="#" target="_blank" class="facebook-soc">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="soc-widget-title">Lượt Thích</span>
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
                                                                <h4><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $item->tieu_de }}</a>
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
                                                                        src="{{ asset($item->hinh_anh) }}"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="post-widget-item-content">
                                                                <h4><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{ $item->tieu_de }}</a>
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
                                        <!--tab end-->
                                    </div>
                                    <!--tabs end-->
                                </div>
                                <!-- content-tabs-wrap end -->
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
        <!-- section end -->
    </div>
    <!-- content  end-->
@endsection

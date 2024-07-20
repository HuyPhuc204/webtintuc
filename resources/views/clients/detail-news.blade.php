@extends('clients.layouts.master')
@section('title')
    Magnews - Chi tiết tin
@endsection

@section('content')
    <!-- content    -->
    <div class="content">
        <div class="breadcrumbs-header fl-wrap">
            <div class="container">
                <div class="breadcrumbs-header_url">
                    <a href="{{ url('/') }}">Trang chủ</a><span>Chi tiết tin</span>
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
                            <!-- single-post-header  -->
                            @if ($chiTietTin)
                                <div class="single-post-header fl-wrap">
                                    <a class="post-category-marker" href="category.html">{{ $chiTietTin->ten_danh_muc }}</a>
                                    <div class="clearfix"></div>
                                    <h1>{{ $chiTietTin->tieu_de }}</h1>
                                    <h4>{{ $chiTietTin->tom_tat }}</h4>
                                    <div class="clearfix"></div>
                                    <span class="post-date"><i class="far fa-clock"></i> {{ $chiTietTin->ngay_dang }}</span>
                                    <ul class="post-opt">
                                        <li><i class="far fa-comments-alt"></i> {{ $chiTietTin->binh_luan }} </li>
                                        <li><i class="fal fa-eye"></i> {{ $chiTietTin->luot_xem }} </li>
                                    </ul>
                                </div>
                                <!-- single-post-header end   -->
                                <!-- single-post-content   -->
                                <div class="single-post-content spc_column fl-wrap">
                                    <div class="single-post-content_column">
                                        <div class="share-holder ver-share fl-wrap">
                                            <div class="share-title">Chia sẻ <br> Bài viết:</div>
                                            <div class="share-container  isShare"></div>
                                        </div>
                                    </div>
                                    <div class="fs-wrap smpar fl-wrap">
                                        <div class="fontSize"><span class="fs_title">Cỡ chữ: </span><input type="text"
                                                class="rage-slider" data-step="1" data-min="12" data-max="15"
                                                value="12">
                                        </div>
                                        <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                                        <div class="show-more-snopt-tooltip">
                                            <a href="#comments" class="custom-scroll-link"> <i
                                                    class="fas fa-comment-alt"></i>
                                                Viết bình luận</a>
                                            <a href="#"> <i class="fas fa-exclamation-triangle"></i> Báo cáo </a>
                                        </div>
                                        <a class="print-btn" href="javascript:window.print()"
                                            data-microtip-position="bottom"><span>Print</span><i
                                                class="fal fa-print"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="single-post-content_text" id="font_chage">
                                        <div class="single-post-content_text_media fl-wrap">
                                            <div class="row">
                                                <div class="col-md-6"><img src="{{ asset($chiTietTin->hinh_anh) }}"
                                                        alt="" class="respimg"></div>
                                                <div class="col-md-6">
                                                    <p class="has-drop-cap">{{ $chiTietTin->noi_dung }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endif

                            <div class="single-post-footer fl-wrap">
                                <div class="post-single-tags">
                                    <span class="tags-title"><i class="fas fa-tag"></i> Các thẻ khác : </span>
                                    <div class="tags-widget">
                                        @foreach ($danhMuc as $item)
                                            <a href="#">{{ $item->ten_danh_muc }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-post-content  end   -->
                        <div class="limit-box2 fl-wrap"></div>

                        <div class="more-post-wrap  fl-wrap">
                            <div class="pr-subtitle prs_big">Các tin cùng loại:</div>
                            <div class="list-post-wrap list-post-wrap_column fl-wrap">
                                <div class="row">
                                    @foreach ($tinCungLoai as $item)
                                    <div class="col-md-6">
                                        <!--list-post-->
                                        <div class="list-post fl-wrap">
                                            <a class="post-category-marker" href="category.html">{{$item->ten_danh_muc}}</a>
                                            <div class="list-post-media">
                                                <a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{asset($item->hinh_anh)}}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <h3><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{$item->tieu_de}}</a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> 0{{$item->ngay_dang}}</span>
                                            </div>
                                        </div>
                                        <!--list-post end-->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--comments  -->
                        <div id="comments" class="single-post-comm fl-wrap">
                            <div class="pr-subtitle prs_big">Bình luận <span></span></div>
                            <ul class="commentlist clearafix">
                                @foreach ($binhLuan as $item)
                                <li class="comment">
                                    <div class="comment-author">
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="comment-body smpar">
                                        <h4><a href="#">{{$item->ten_user}}</a></h4>
                                        <div class="box-widget-menu-btn smact"></div>
                                        <div class="clearfix"></div>
                                        <p>{{$item->noi_dung}}</p>
                                        <div class="comment-meta"><i class="far fa-clock"></i>{{$item->ngay_binh_luan}}</div>
                                        <div class="comment-body_dec"></div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="clearfix"></div>
                            <div id="addcom" class="clearafix">
                                <div class="pr-subtitle"> Để lại bình luận <i class="fas fa-caret-down"></i></div>
                                <div class="comment-reply-form fl-wrap">
                                    <form id="add-comment" class="add-comment custom-form">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Tên của bạn *" value="" />
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" placeholder="Địa chỉ Email*" value="" />
                                                </div>
                                            </div>
                                            <textarea placeholder="Viết bình luận:"></textarea>
                                        </fieldset>
                                        <button class="btn float-btn color-btn">Gửi bình luận <i
                                                class="fas fa-caret-right"></i> </button>
                                    </form>
                                </div>
                            </div>
                            <!--end respond-->
                        </div>
                        <!--comments end -->
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

<div class="header-inner fl-wrap">
    <div class="container">
        <!-- logo holder  -->
        <a href="index-2.html" class="logo-holder"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
        <!-- logo holder end -->
        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Tìm
                kiếm</span></div>
        <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <span class="header-tooltip">Đăng
                nhập</span></div>
        <!-- header-search-wrap -->
        <div class="header-search-wrap novis_sarch">
            <div class="widget-inner">
                <form action="#">
                    <input name="se" id="se" type="text" class="search" placeholder="Search..."
                        value="" />
                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- header-search-wrap end -->
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul>
                    <li>
                        <a href="{{ url('/') }}" class="">Trang chủ</i></a>
                    </li>
                    <li>
                        <a href="#">Danh mục<i class="fas fa-caret-down"></i></a>
                        <!--second level -->
                        <ul>
                            @foreach ($danhMuc as $item)
                                <li><a href="{{ url('/danh-muc', ['id_danh_muc' => $item->id]) }}">{{$item->ten_danh_muc}}</a></li>
                            @endforeach
                        </ul>
                        <!--second level end-->
                    </li>
                    <li><a href="about.html">Giới thiệu</a></li>
                    <li><a href="contacts.html">Liên hệ</a></li>

                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
</div>

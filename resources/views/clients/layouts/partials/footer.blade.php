<div class="container">
    <!-- footer-widget-wrap -->
    <div class="footer-widget-wrap fl-wrap">
        <div class="row">
            <!-- footer-widget -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="footer-widget-content">
                        <a href="index-2.html" class="footer-logo"><img src="{{ asset('assets/images/logo2.png') }}"
                                alt=""></a>
                        <p>Magnews là trang web tin tức thể thao là nguồn thông tin hàng đầu về các sự kiện, trận đấu,
                            thông tin cầu thủ và các câu chuyện hấp dẫn trong lĩnh vực thể thao. Tại đây, bạn sẽ được
                            cập
                            nhật nhanh chóng với các tin tức mới nhất về bóng đá, bóng rổ, quần vợt và nhiều môn thể
                            thao khác trên khắp thế giới.</p>
                        <div class="footer-social fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-widget  end-->
            <!-- footer-widget -->
            <div class="col-md-2">
                <div class="footer-widget">
                    <div class="footer-widget-title">Danh mục </div>
                    <div class="footer-widget-content">
                        <div class="footer-list footer-box fl-wrap">
                            <ul>
                                @foreach ($danhMuc as $item)
                                <li> <a href="#">{{$item->ten_danh_muc}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-widget  end-->
            <!-- footer-widget -->
            <div class="col-md-2">
                <div class="footer-widget">
                    <div class="footer-widget-title">Links</div>
                    <div class="footer-widget-content">
                        <div class="footer-list footer-box fl-wrap">
                            <ul>
                                <li> <a href="#">Trang chủ</a></li>
                                <li> <a href="#">Giới thiệu</a></li>
                                <li> <a href="#">Liên hệ</a></li>
                                <li> <a href="#">Tin tức</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-widget  end-->
            <!-- footer-widget -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="footer-widget-title">Đăng ký</div>
                    <div class="footer-widget-content">
                        <div class="subcribe-form fl-wrap">
                            <p>Muốn được thông báo khi chúng tôi khởi chạy một mẫu mới hoặc một udpate. Chỉ cần ký tên
                                lên và chúng tôi sẽ gửi cho bạn thông báo qua email.</p>
                            <form id="subscribe" class="fl-wrap">
                                <input class="enteremail" name="email" id="subscribe-email" placeholder="Email của bạn"
                                    spellcheck="false" type="text">
                                <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Gửi
                                </button>
                                <label for="subscribe-email" class="subscribe-message"></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-widget  end-->
        </div>
    </div>
    <!-- footer-widget-wrap end-->
</div>
<div class="footer-bottom fl-wrap">
    <div class="container">
        <div class="copyright"><span>&#169; Magnews 2024</span> . All rights reserved. </div>
        <div class="to-top"> <i class="fas fa-caret-up"></i></div>
        <div class="subfooter-nav">
            <ul>
                <li><a href="#">Điều khoản & Điều kiện</a></li>
                <li><a href="#">Chính sách bảo mật</a></li>
            </ul>
        </div>
    </div>
</div>

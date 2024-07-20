<div class="main-register-holder">
    <div class="main-register-wrap fl-wrap">
        <div class="main-register_bg">
            <div class="bg-wrap">
                <div class="bg par-elem " data-bg="{{ asset('assets/images/bg/1.jpg') }}"></div>
                <div class="overlay"></div>
            </div>
            <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
        </div>
        <div class="main-register tabs-act fl-wrap">
            <ul class="tabs-menu">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Đăng nhập</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Đăng ký</a></li>
            </ul>
            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
            <!--tabs -->
            <div id="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content first-tab">
                        <div class="custom-form">
                            <form method="post" name="registerform">
                                <label>Tên đăng nhập hoặc địa chỉ email <span>*</span> </label>
                                <input name="email" type="text" onClick="this.select()" value="">
                                <label>Mật khẩu <span>*</span> </label>
                                <input name="password" type="password" onClick="this.select()" value="">
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check" checked>
                                    <label for="check-a">Nhớ mật khẩu</label>
                                </div>
                                <div class="lost_password">
                                    <a href="#">Quên mật khẩu</a>
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit" class="log-submit-btn color-bg"><span> Đăng nhập</span></button>
                            </form>
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <div class="custom-form">
                                <form method="post" name="registerform" class="main-register-form"
                                    id="main-register-form2">
                                    <label>Tên đăng nhập <span>*</span> </label>
                                    <input name="name" type="text" onClick="this.select()" value="">
                                    <label>Địa chỉ email <span>*</span></label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Mật khẩu <span>*</span></label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit"
                                        class="log-submit-btn color-bg"><span>Đăng ký</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->
                <div class="log-separator fl-wrap"><span>Hoặc</span></div>
                <div class="soc-log  fl-wrap">
                    <p>Để đăng nhập hoặc đăng ký nhanh hơn, hãy sử dụng tài khoản xã hội của bạn.</p>
                    <a href="#"><i class="fab fa-facebook-f"></i>Kết nối với facebook</a>
                </div>
            </div>
        </div>
    </div>
</div>

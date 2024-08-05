<div class="main-register-holder">
    <div class="main-register-wrap fl-wrap">
        <div class="main-register_bg">
            <div class="bg-wrap">
                <div class="bg par-elem " data-bg="{{ asset('assets/images/bg/1.jpg') }}"></div>
                <div class="overlay"></div>
            </div>
            <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
        </div>
        @if (session('login'))
            <div class="main-register tabs-act fl-wrap">
                <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                <!--tabs -->
                <div id="tabs-container">
                    @if ($user)
                        <h4 style="margin-bottom:20px; font-weight:600; color:orangered">Tên tài khoản:
                            {{ $user->name }}</h4>
                        <h4 style="margin-bottom:20px; font-weight:600; color:orangered">Email: {{ $user->email }}</h4>
                        @if ($user->type==="admin")
                            <a href="{{ route('admin') }}" style="margin-bottom:20px; font-weight:600; color:orangered">Vào trang quản trị</a>
                        @endif
                    @endif
                    <div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn" type="submit">Đăng xuất</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
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
                                <form action="{{ route('login') }}" method="post" name="registerform">
                                    @csrf
                                    <label>Địa chỉ email <span>*</span> </label>
                                    <input name="email" type="text" value="">
                                    @error('email')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                    <label>Mật khẩu <span>*</span> </label>
                                    <input name="password" type="password" value="">
                                    @error('password')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                    @if (session('error'))
                                        <div style="color: red">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="lost_password" style="margin-bottom:10px">
                                        <a href="{{ route('forgotpass') }}">Quên mật khẩu</a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="log-submit-btn color-bg"><span> Đăng
                                            nhập</span></button>
                                </form>
                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form"
                                        id="main-register-form2" action="{{ route('register') }}">
                                        @csrf
                                        <label>Tên người dùng <span>*</span> </label>
                                        <input name="name" type="text" value="">
                                        @error('name')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                        <label>Địa chỉ email <span>*</span></label>
                                        <input name="email" type="text" value="">
                                        @error('email')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                        <label>Mật khẩu <span>*</span></label>
                                        <input name="password" type="password" value="">
                                        @error('password')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                        <label>Nhập Lại Mật khẩu <span>*</span></label>
                                        <input name="password_confirmation" type="password" value="">
                                        @error('password')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                        <button type="submit" class="log-submit-btn color-bg"><span>Đăng
                                                ký</span></button>
                                    </form>
                                    @if (session('success'))
                                        <div style="color: green">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->

                </div>
            </div>
        @endif
    </div>
</div>

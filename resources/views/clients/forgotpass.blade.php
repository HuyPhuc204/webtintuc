@extends('clients.layouts.master')
@section('title')
    Magnews - Quên mật khẩu
@endsection
@section('content')
    <div class="main-register tabs-act fl-wrap">
        <div id="tab-1" class="tab-content first-tab">
            <div id="tabs-container">
                <div class="tab">
                    <div class="custom-form">
                        <h2>Lấy lại mật khẩu bằng email của bạn</h2>
                        <form action="{{ route('password.reset') }}" method="post" name="registerform">
                            @csrf
                            <label>Địa chỉ email <span>*</span> </label>
                            <input name="email" type="text" value="">
                            @error('email')
                                <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="clearfix"></div>
                            <button type="submit" class="log-submit-btn color-bg"><span>Lấy lại mật khẩu</span></button>
                        </form>
                        @if (session('error'))
                            <div style="color: red">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div style="color: red; font-size:20px">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection

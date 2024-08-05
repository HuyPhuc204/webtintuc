@extends('admins.layouts.master')
@section('title')
    Tạo mới tin
@endsection
@section('content')
    <h1>Tạo một tin mới</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('create-new') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="tieu_de" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="tieu_de" name="tieu_de" value="{{ old('tieu_de') }}">
            @error('tieu_de')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tom_tat" class="form-label">Tóm tắt</label>
            <textarea class="form-control" id="tom_tat" name="tom_tat" rows="5" value="{{ old('tom_tat') }}"></textarea>
            @error('tom_tat')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="noi_dung" class="form-label">Nội dung</label>
            <textarea class="form-control" id="noi_dung" name="noi_dung" rows="3" value="{{ old('noi_dung') }}"></textarea>
            @error('noi_dung')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="hinh_anh" class="form-label">Hình ảnh</label>
            <input type="file" class="form-control" id="hinh_anh" name="hinh_anh" value="{{ old('hinh_anh') }}">
            @error('hinh_anh')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="id_danh_muc" class="form-label">Danh mục</label>
            <select class="form-control" id="id_danh_muc" name="id_danh_muc" value="{{ old('id_danh_muc') }}">
                @foreach ($danhMucs as $danhMuc)
                    <option value="{{ $danhMuc->id }}">{{ $danhMuc->ten_danh_muc }}</option>
                @endforeach
                @error('id_danh_muc')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm tin tức</button>
    </form>
@endsection

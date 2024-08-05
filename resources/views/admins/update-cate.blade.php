@extends('admins.layouts.master')
@section('title')
Sửa danh mục
@endsection
@section('content')
<h1>Sửa danh mục</h1>
@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<form action="{{ route('edit-cate', $danhMuc->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ten_danh_muc" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" id="ten_danh_muc" name="ten_danh_muc"
            value="{{ $danhMuc->ten_danh_muc }}" >
        @error('ten_danh_muc')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
@endsection

@extends('admins.layouts.master')
@section('title')
Danh sách tin
@endsection
@section('content')
<h1>Danh sách tin</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Tóm tắt</th>
            <th>Nội dung</th>
            <th>Ảnh</th>
            <th>ID danh mục</th>
            <th>Ngày đăng</th>
            <th>Lượt xem</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">{{ $item->id_tin }}</h6>
                        </div>
                    </div>
                </td>
                <td>{{ Str::limit($item->tieu_de, 50) }}</td>
                <td>{{ Str::limit($item->tom_tat, 50) }}</td>
                <td>{{ Str::limit($item->noi_dung, 50) }}</td>
                <td> <img src="{{ $item->hinh_anh }}" style="width:50px;"/></td>
                <td>{{$item->id_danh_muc}}</td>
                <td>{{$item->ngay_dang}}</td>
                <td>{{$item->luot_xem}}</td>
                <td>
                    <a href="{{ route('edit-new', $item->id_tin) }}"
                        class="btn btn-warning mb-2">
                        Sửa
                    </a>
                     <form action="{{ route('destroy-new', $item->id_tin) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>


                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

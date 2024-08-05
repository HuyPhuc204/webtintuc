@extends('admins.layouts.master')
@section('title')
    Danh sách danh mục
@endsection
@section('content')
    <h1>Danh sách danh mục</h1>
    @if (session('destroy'))
    <div class="alert alert-success">
        {{ session('destroy') }}
    </div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Tên danh mục:</th>
                <th>Hành động:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($danhMuc as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->ten_danh_muc }}</td>
                    <td>
                        <a href="{{route('edit-cate',$item->id)}}" class="btn btn-warning">
                            Sửa
                        </a>
                     <form action="{{route('destroy-cate',$item->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                      <button type="submit" class="btn btn-danger">Xóa</i></button>


                     </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

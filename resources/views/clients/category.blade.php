@section('category')
<div class="ajax-inner fl-wrap">
    <div class="list-post-wrap">
        @foreach ($tinMoiNhat as $item)
            <!--list-post-->
            <div class="list-post fl-wrap">
                <div class="list-post-media">
                    <a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">
                        <div class="bg-wrap">
                            <div class="bg" data-bg="{{asset($item->hinh_anh)}}"></div>
                        </div>
                    </a>
                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                </div>
                <div class="list-post-content">
                    <a class="post-category-marker" href="#">{{$item->ten_danh_muc}}</a>
                    <h3><a href="{{ url('/chi-tiet-tin', ['id' => $item->id]) }}">{{$item->tieu_de}}</a></h3>
                    <span class="post-date"><i class="far fa-clock"></i>{{$item->ngay_dang}}</span>
                    <p>{{$item->tom_tat}}</p>
                    <ul class="post-opt">
                        <li><i class="far fa-comments-alt"></i> {{$item->binh_luan}} </li>
                        <li><i class="fal fa-eye"></i> {{$item->luot_xem}} </li>
                    </ul>
                </div>
            </div>
            <!--list-post end-->
        @endforeach
    </div>
</div>
@endsection


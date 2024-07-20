<div class="aside-panel">
    <ul>
        @foreach ($danhMuc as $item)
            <li> <a href="#"><i class="far fa-atom"></i><span>{{ $item->ten_danh_muc }}</span></a></li>
        @endforeach
    </ul>
</div>

<div class="top-bar fl-wrap">
    <div class="container">
        <div class="date-holder">
            <span class="date_num"></span>
            <span class="date_mounth"></span>
            <span class="date_year"></span>
        </div>
        <div class="header_news-ticker-wrap">
            <div class="hnt_title">TIN NÓNG :</div>
            <div class="header_news-ticker fl-wrap">
                <ul>
                    @foreach ($tinHot as $tin)
                        <li class="text-truncate" style="max-width: 300px;"><a href="post-single.html">{{ $tin->tieu_de}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="n_contr-wrap">
                <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
            </div>
        </div>
        <ul class="topbar-social">
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

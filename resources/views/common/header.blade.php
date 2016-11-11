@section('header')
<div id="wrapper">
    <div class="inner">
        <div id="top">
            <div class="inner">
                <h1 id="logo"><span><a href="#">富フリーの道：アフィリエイト</a></span></h1>
            </div>
            <div id="topmenubtn"><span>メニュー</span></div>
            <div id="topmenubox">
                <div id="searchbox">
                    <form name="search" id="search" method="get" action="./search.php">
                        <input type="text" class="skwd" name="keyword" size="20" value="" />
                        <input type="submit" src="./img/searchbutton.jpg" alt="検索" value="Search" />
                    </form>
                </div>
                <div id="topmenu">
                    <ul>
                        <li><a href="#">TOPページ</a></li>
                        <li><a href="#" target="_blank">小雪メインブログへ</a></li>
                        <li><a href="#" target="_blank">小雪メルマガへ</a></li>
                        <li><a href="#" target="_blank">問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="headerbox">
            <div id="header">
                <img src="./img/header.jpg" alt="アフィリエイトの始め方　完全攻略ガイドブック" />
                <div id="headertxt">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
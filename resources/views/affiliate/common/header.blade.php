@section('header')
<header>
    <div class="container">
        <a href="/"><img src="{{url('img/affiliate/common','logo.png')}}" alt="副業ネット" class="logo"></a>
        <nav id="global-navigation" class="global-navigation">
            <ul class="dropdown">
                <li><a href="/"><i class="fa fa-home"></i>副業</a></li>
                <li><a href="/fukugyou/"><i class="fa fa-trophy"></i>副業ランキング</a></li>
                <li><a href="/article/"><i class="fa fa-graduation-cap"></i>副業予備知識</a></li>
                <li><a href="/info/"><i class="fa fa-user"></i>プロフィール</a></li>
            </ul>
        </nav>
        <div class="toggle-dropdown">
            <input type="checkbox" id="toggle-nav">
            <label for="toggle-nav" class="toggle-switch">
                <div class="icon-bar first"></div>
                <div class="icon-bar second"></div>
                <div class="icon-bar third"></div>
            </label>
        </div>
    </div>
</header>
@endsection
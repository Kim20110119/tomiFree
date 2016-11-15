@extends('point.common.layout')
@include('point.common.head')
@include('point.common.header')
@include('point.common.menu')
@include('point.common.footer')
@include('point.common.javascript')
@section('content')
@yield('header')
<div id="wrapper">
    <main id="main">
        <div class="page-head">
            <div class="container hidden-xs">
            </div>
        </div>

        <div class="container">
            <div class="row home-top3">
                <h3>クリックポイント</h3>
                <div class="home-toptext">
                    <p>
                        ポイントサイトに登録するとクリックポイント付メールが届きます。
                        その中にあるポイント付URLをクリックしてポイントを獲得する方法を
                        リードメールと言います。

                        リードメール効率よいやり方の説明
                        ico_arrow8e_r 「リードメールの攻略法」

                        クリックポイントの報酬は大体ワンクリック0.1円でげん玉やポイントタウンは
                        クリックURLが大量にありますのでクリックポイントだけでもそこそこ貯まります。
                    </p>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <div class="sns-container">
            <ul class="sns">
                <li class="facebook">
                    <a href="http://www.facebook.com/share.php?u=pageUrlReplace" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><span class="icon-facebook"></span><span class="sns-text">シェア</span></a>
                </li>
                <li class="twitter">
                    <a href="http://twitter.com/share?url=pageUrlReplace&text=pageMetaTitleReplace" target="_blank"><span class="icon-twitter"></span><span class="sns-text">ツイート</span></a>
                </li>
                <li class="google-plus">
                    <a href="http://line.me/R/msg/text/?pageMetaTitleReplace%0D%0ApageUrlReplace" target="_blank"><span class="icon-google-plus"></span><span class="sns-text">Google+</span></a>
                </li>
            </ul>
        </div>
        <hr>
    </div>
</div>
@endsection

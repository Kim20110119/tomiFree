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
                <h3>ポイントサイトランキング</h3>
                <div class="home-toptext">
                    @foreach($categorys as $key => $value)
                    <hr>
                    <table class="ranking">
                        <tbody>
                            <tr class="even">
                                <td colspan="3">
                                    <p class="f18">
                                        第1位　<strong><a href="http://moppy.jp/top.php?jt4me1fc" target="_blank">moppy（モッピー）</a></strong>
                                    </p>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="ta sp-no-dis" rowspan="7">
                                    <a href="http://moppy.jp/top.php?jt4me1fc" target="_blank">
                                        <img src="http://img.moppy.jp/pub/pc/friend/300x250-2.jpg" width="200" alt="モッピー！お金がたまるポイントサイト" data-lazy-loaded="true" style="display: inline;">
                                        <noscript>&lt;img src="http://img.moppy.jp/pub/pc/friend/300x250-2.jpg" width="200" alt="モッピー！お金がたまるポイントサイト" /&gt;</noscript></a>
                                </td>
                                <td>評　価</td>
                                <td>
                                    <b class="f18 orange2">★★★★★</b>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="w80p">レート</td>
                                <td>1ポイント＝1円　10コイン＝1pt</td>
                            </tr>
                            <tr class="odd">
                                <td>最低換金</td>
                                <td>300ポイント（300円）～</td>
                            </tr>
                            <tr class="even">
                                <td>換金手数料</td>
                                <td>無料～147円</td>
                            </tr>
                            <tr class="odd">
                                <td>年齢制限</td>
                                <td>12才以上</td>
                            </tr>
                            <tr class="even">
                                <td>紹介制度</td>
                                <td>2ティア　50%</td>
                            </tr>
                            <tr class="odd">
                                <td colspan="2"> 広告利用ポイントが高還元率が魅力！スマホ併用で稼ぎやすくなる。ゲーム類だけでも毎月換金額が稼げる！
                                    <p></p>
                                    <p class="al-r"><a href="./moppy">もっと詳しく</a></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row home-top3">
                <hr>
                <h3>私がお勧めするTOP3ポイントサイト</h3>
                @foreach($point_sites as $key => $value)
                <div class="col-sm-4 home-top3">
                    <div class="rank{{$key + 1}} rank-box">
                        <a href="{{$value['url']}}" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>{{$value['name']}}</h4>
                        </div>
                        <p class="copy-bold">{{$value['catchphrase']}}</p>
                        <img src="{{$value['image']}}" class=top3-illust alt="{{$value['catchphrase']}}" />
                    </div>
                </div>
                @endforeach

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

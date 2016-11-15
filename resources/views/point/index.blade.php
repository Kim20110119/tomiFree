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
                <h3>ポイントサイトとは？</h3>
                <div class="home-toptext">
                    <p>
                        ポイントサイトとは、サイト内でいろいろなサービスを利用することでポイントを貯めることができる「お小遣い稼ぎサイト」のことです。
                        ネットCMを見たり、ミニゲームや、アンケートに答えることでポイントが貯まり、
                        貯まったポイントは、「現金」「Amazonギフト券」「楽天銀行」「WebMoney」などに交換が可能！
                        ポイントサイトへの登録は「無料」で、中学生からでも登録できるほど簡単にはじめることができます。
                    </p>
                </div>
            </div>
            <div class="row home-3point">
                <h3>ポイントサイトの稼ぎ方</h3>
                @foreach($categorys as $key => $value)
                <div class="col-sm-4 home-3point">
                    <a href="#click">
                        <div class="point-icon point-{{$key % 2 + 1}}">
                            <h4 class="point-pc">
                                {{$value['name']}}
                            </h4>
                            <img src="{{url('img/point/category',$value['name_en'].'_icon-256x256.png')}}" alt="{{$value['name']}}">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="container" id="click">
                <hr>
                <h2 class="final">クリックポイント</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>説明</h3>
                        <ul>
                            <li>
                                <div class="r-txt">
                                    <p>
                                        ポイントサイトに登録するとクリックポイント付メールが届きます。
                                        その中にあるポイント付URLをクリックしてポイントを獲得する方法を リードメールと言います。
                                        リードメール効率よいやり方の説明 ico_arrow8e_r 「リードメールの攻略法」 クリックポイントの報酬は大体ワンクリック0.1円でげん玉やポイントタウンは クリックURLが大量にありますのでクリックポイントだけでもそこそこ貯まります。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3>お勧め</h3>
                        <ul>
                            <li>
                                <a href="http://www.gendama.jp/invite/?frid=6187765&ref=90000-banner" target="_blank">
                                    <div class="rank1 rank-box">
                                        <img src="http://www.gendama.jp/img/invitation_banner94.gif" class=top3-illust>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://pointi.jp/p/?a=rbf880045720" target="_blank">
                                    <div class="rank2 rank-box">
                                        <img src="http://pointi.jp/share_cpn/img/bnr/468_60_2.png" class=top3-illust alt="暮らしをおトクにかえていく｜ポイントインカム" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://dietnavi.com/?id=3088603" target="_blank">
                                    <div class="rank3 rank-box">
                                        <img src="http://dietnavi.com/pc/banner/gm_friend_468x60.gif" class=top3-illust alt="お小遣い稼ぎならポイントサイトGetMoney!" />
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row home-top3">
                <hr>
                <h3>私がお勧めするTOP3ポイントサイト</h3>
                <div class="col-sm-4 home-top3">
                    <div class="rank1 rank-box">
                        <a href="http://pointi.jp/p/?a=rbf880045720" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>ポイントインカム</h4>
                        </div>
                        <p class="copy-bold">約4,000円からの人気の投資！</p>
                        <img src="http://pointi.jp/share_cpn/img/bnr/468_60_2.png" class=top3-illust alt="暮らしをおトクにかえていく｜ポイントインカム" />
                    </div>
                </div>
                <div class="col-sm-4 home-top3">
                    <div class="rank2 rank-box">
                        <a href="http://www.gendama.jp/invite/?frid=6187765&ref=90000-banner" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>げん玉</h4>
                        </div>
                        <p class="copy-bold">約4,000円からの人気の投資！</p>
                        <img src="http://www.gendama.jp/img/invitation_banner94.gif" class=top3-illust>
                    </div>
                </div>
                <div class="col-sm-4 home-top3">
                    <div class="rank3 rank-box">
                        <a href="http://osaifu.com/33q1d/" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>お財布</h4>
                        </div>
                        <p class="copy-bold">約4,000円からの人気の投資！</p>
                        <img src="http://osaifu.com/img/friend_guide/banner/468_60_01.jpg" class=top3-illust alt="お財布.com - 無料で手軽に貯まる魔法のお財布">
                    </div>
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

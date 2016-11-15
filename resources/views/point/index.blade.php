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
            <div class="container">
                @foreach($categorys as $key => $value)
                <hr>
                <h2 class="final"  id="{{$value['name_en']}}">{{$value['name']}}</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>説明</h3>
                        <ul>
                            <li>
                                <div class="r-txt">
                                    <p>{{$value['description']}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h3>お勧め</h3>
                        <ul>
                            @if($value['link_01'] <> '')
                            <li>
                                <a href="{{$value['link_01']}}" target="_blank">
                                    <div class="rank1 rank-box">
                                        <img src="{{$value['image_01']}}" class=top3-illust>
                                    </div>
                                </a>
                            </li>
                            @endif
                            @if($value['link_02'] <> '')
                            <li>
                                <a href="{{$value['link_02']}}" target="_blank">
                                    <div class="rank2 rank-box">
                                        <img src="{{$value['image_02']}}" class=top3-illust>
                                    </div>
                                </a>
                            </li>
                            @endif
                            @if($value['link_03'] <> '')
                            <li>
                                <a href="{{$value['link_03']}}" target="_blank">
                                    <div class="rank3 rank-box">
                                        <img src="{{$value['image_03']}}" class=top3-illust>
                                    </div>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
                @endforeach

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

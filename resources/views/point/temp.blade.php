@extends('point.common.layout')
@include('point.common.head')
@include('point.common.header')
@include('point.common.navigation')
@include('point.common.footer')
@include('point.common.side')
@include('point.common.javascript')
@section('content')
<div id="content">
    <div class="p_menu lv005">
        <p>
            ポイントサイト（お小遣いサイト）では、
            ポイントサイトに登録し、
            会員登録や資料請求といったデータ入力の案件を消化したり、
            ゲームをしたり、アンケートを回答したり、メールのURLをクリックしたりすることで、
            ウェブポイントをゲットできます。そしてそのウェブポイントをためていくと、
            現金に換えることができる、という稼ぎ方です。

            自分のウェブサイトを持っていなくても稼げるので、
            ネットを使って無料でお金を稼いでいくのなら、
            ポイントサイトは初心者向けとして無視できません。
            そして基本的にポイントサイトでは年齢制限がありませんので、
            小学生や中学生でも可能なお金稼ぎの方法となっています。
            ほとんどのポイントサイトは携帯にも対応していますから、
            携帯でお金を稼ぎたいという方にもオススメです。

            まずは「初心者ガイド」から始めましょう！
        </p>
    </div>
    <h1 class="title">最新記事</h1>
    <div class="p_menu">
        <ul>
            <li>
                <span><img src="../img/point/common/start_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">最新記事01</a>
            </li>
            <li>
                <span><img src="../img/point/common/start_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">最新記事02</a>
            </li>
            <li>
                <span><img src="../img/point/common/start_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">最新記事03</a>
            </li>
        </ul>
    </div>
</div>
@endsection

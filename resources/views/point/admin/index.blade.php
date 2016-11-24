@extends('point.common.layout')
@include('point.common.head')
@include('point.common.header')
@include('point.common.navigation')
@include('point.common.footer')
@include('point.common.side')
@include('point.common.javascript')
@section('content')
<div id="content">
    <h1 class="title">ポイントサイト管理</h1>
    <div class="p_menu">
        <ul>
            <li>
                <span><img src="../img/point/common/admin_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">「カテゴリ」管理</a>
            </li>
            <li>
                <span><img src="../img/point/common/admin_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">「今週のお勧め-TOP3」管理</a>
            </li>
            <li>
                <span><img src="../img/point/common/admin_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">「注目の記事-TOP5」管理</a>
            </li>
            <li>
                <span><img src="../img/point/common/admin_icon-16x16.png" alt="記事"></span><a href="http://kanemotilevel.com/add/kizi271.html">「広告」管理</a>
            </li>
        </ul>
    </div>
</div>
@endsection

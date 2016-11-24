@extends('point.common.layout')
@include('point.common.head')
@include('point.common.header')
@include('point.common.navigation')
@include('point.common.footer')
@include('point.common.side')
@include('point.common.javascript')
@section('content')
<div id="content">
    <h1 class="title">ポイントサイトカテゴリ一覧</h1>
    <div class="p_menu">
        @foreach($categorys as $category)
        <table class="table">
            <tbody>
                <tr>
                    <th>カテゴリ名</th>
                    <td>
                        <b>ホーム</b>
                    </td>
                </tr>
                <tr>
                    <th>表示フラグ</th>
                    <td>
                        <b>表示</b>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">キャッチフレーズ</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <p>広告利用ポイントが高還元率が魅力！スマホ併用で稼ぎやすくなる。ゲーム類だけでも毎月換金額が稼げる！</p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p><a href="./moppy">編集</a></p>
                    </td>
                </tr>
            </tbody>
        </table>
        @endforeach
    </div>
</div>
@endsection

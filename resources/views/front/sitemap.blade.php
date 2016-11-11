@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.page_js')
@section('content')
@yield('header')
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            <li class="lnk home"><a href="{{url('/top')}}">得割ドックTOP</a></li>
            <li class="current"><span>サイトマップ</span></li>
        </div>
    </div>
</div>
<article>
    <section id="sitemap01" class="pt30 pb30">
        <div class="wrapper">
            <div class="cmn_block08">
                <h1 class="cmn_h2_01"><span class="spn01">サイトマップ</span></h1>
                <h2 class="cmn_h3_01 mt20">トップ</h2>
                <ul class="cmn_ul04 mt10">
                    <li><a href="{{url('/top')}}">トップ</a></li>
                </ul>
                <h2 class="cmn_h3_01 mt20">サイトご利用について</h2>
                <ul class="cmn_ul04 mt10">
                    <!-- <li><a href="">このサイトについて</a></li> -->
                    <li><a href="{{url('/terms')}}">利用規約</a></li>
                    <li><a href="{{url('/privacypolicy')}}">プライバシーポリシー</a></li>
                    <li><a href="{{url('/information')}}">運営会社</a></li>
                    <li><a href="{{url('/sitemap')}}">サイトマップ</a></li>
                </ul>
            </div>
        </div>
    </section>
</article>
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection

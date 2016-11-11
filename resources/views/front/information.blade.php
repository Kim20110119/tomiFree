@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@section('content')
@yield('header')
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            <li class="lnk home"><a href="{{url('/top')}}">得割ドックTOP</a></li>
            <li class="current"><span>運営会社</span></li>
        </div>
    </div>
</div>
<article>
    <section id="information01" class="pt30 pb30">
        <div class="wrapper">
            <div class="cmn_block08">
                <h1 class="cmn_h2_01"><span class="spn01">運営会社</span></h1>
                <table class="cmn_table01 mt20">
                    <tr>
                        <th>会社名</th>
                        <td>株式会社シンバス</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2010年1月5日</td>
                    </tr>
                    <tr>
                        <th>役員</th>
                        <td>代表取締役社長：榛葉 壮士</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>107,288,500円</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>
                            <p>【本社】<br>〒103-0007 東京都中央区日本橋浜町2-17-8<br>浜町平和ビル7階<br>TEL:0120-451-125</p>
                            <p class="mt20">【大阪オフィス】<br>〒530-0047 大阪府大阪市北区西天満4丁目4番18号<br>梅ヶ枝中央ビル9階</p>
                            <p class="mt20">【第2営業オフィス】<br>103-0013 東京都中央区日本橋人形町2-21-10<br>セブンビル7階</p>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせメールアドレス</th>
                        <td><a href="mailto:shinbus-hp@shinbus.jp" class="cmn_lnk08">shinbus-hp@shinbus.jp</a></td>
                    </tr>
                    <tr>
                        <th>顧問弁護士</th>
                        <td>西村あさひ法律事務所</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</article>
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection

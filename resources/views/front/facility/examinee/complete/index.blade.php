@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.examinee.complete.page_js')
@inject('master', 'App\Common\Master')
@inject('common', 'App\Common\Common')
@section('content')
@yield('header')
{{-- */$holidays = $common->commaExplode($facility['holiday'])/* --}}
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            @yield('top')
            {!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_head')) !!}
            <li class="lnk"><a href="javascript:viod(0)" id="pref" data-pref="{{$facility['prefecture']}}">{{$master->getPrefectureName($facility['prefecture'])}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="city" data-city="{{$facility['city']}}">{{$facility['city']}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="facility" data-city="{{$facility['city']}}">{{$facility['name']}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="plan" data-city="{{$facility['city']}}">{{$plan['name']}}</a></li>
            <li class="current"><span>情報入力完了</span></li>
            <input type="hidden" name="pref_code" value="{{$facility['prefecture']}}"/>
            <input type="hidden" name="city_code" value="{{$facility['city']}}"/>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<article>
    <section id="rsrv">
        <div class="wrapper">
            <div class="cmn_block08">
                <h1 class="cmn_h2_01 mt10"><span class="spn01">情報入力完了</span></h1>
                <p class="rsrv-flow mt20"><img src="{{url('images/preferred','rsrv4-flow.png')}}" alt=""></p>

                <section class="rsrv_complete">
                    <div class="rsrv_complete_inner" id="thanks">
                        <h3 class="mb30">健診希望日の申請が完了いたしました。</h3>
                        <p>この度は健診希望の申請誠にありがとうございます。</p>
                        <p class="mb20">医療施設に確認の上、得割ドックセンターの担当者よりご連絡差し上げます。</p>
                        <div class="rsrv_att_mail">
                            <p>メールが届かない場合は、ご入力いただいたメールアドレスに間違いがあった可能性があります。</p>
                            <p>お手数ですがもう一度お問い合わせをお願いいたします。</p>
                            <div class="att_mail_item">
                                <p><b>ドメイン設定受信をしている</b></p>
                                <p>ドメイン設定受信をしている場合は <b class="ex">w-dock.jp</b>の設定をお願いたします。</p>
                            </div>
                            <div class="att_mail_item">
                                <p><b>迷惑メールとして扱われている</b></p>
                                <p>迷惑メールフォルダに振り分けられている可能性がございますので、</p>
                                <p>必ずご確認をお願いたします。</p>
                            </div>
                        </div>
                    </div>
                </section>
                {!! Form::open(array('url' => '/menu', 'method' => 'post', 'id' => 'form_menu')) !!}
                <div class="rsrv_btn_box">
                    <p class="rsrv_next"><a href="javascript:void(0)" class="rsrv_next_btn">一覧画面へ戻る</a></p>
                </div>
                <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
</article>
{!! Form::open(array('url' => '/menu/detail', 'method' => 'post', 'id' => 'form_menu_detail')) !!}
<input type="hidden" name="facility_number" value="{{$facility['facility_number']}}"/>
<input type="hidden" name="plan_id" value="{{$plan['plan_id']}}"/>
{!! Form::close() !!}
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection

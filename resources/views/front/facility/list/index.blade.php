@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.list.page_js')
@include('front.facility.list.paging')
@inject('master', 'App\Common\Master')
@inject('common', 'App\Common\Common')
@section('content')
@yield('header')
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            @yield('top')
            {!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_head')) !!}
            @if ($city_code != '')
            <li class="lnk"><a href="javascript:viod(0)" id="pref" data-pref="{{$pref_code}}">{{$master->getPrefectureName($pref_code)}}</a></li>
            <li class="lnk"><span>{{$city_code}}</span></li>
            @else
            <li class="lnk"><span>{{$master->getPrefectureName($pref_code)}}</span></li>
            @endif
            <li class="current"><span>医療施設一覧</span></li>
            <input type="hidden" id="pref_code" name="pref_code" value="{{$pref_code}}"/>
            <input type="hidden" id="city_code" name="city_code" value="{{$city_code}}"/>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<article>
    <section id="list01">
        <div class="wrapper">
            <div class="cmn_block05">
                <div id="main">
                    <h1 class="cmn_h1_01">{{$master->getPrefectureName($pref_code)}}の医療施設</h1>
                    <p class="cmn_txt01 mt15"><span>{{$facilitys->total()}}</span>件の医療施設が該当しました。</p>
                    <div class="cmn_block06">
                        <ul class="ul01 cf">
                            <li class="li01 active"><a href="javascript:void(0)">医療施設一覧</a></li>
                            <!-- <li class="li02"><a href="">プラン一覧</a></li> -->
                        </ul>
                        <div class="block01">
                            @if(count($facilitys) > 0)
                            <div class="sort">
                                <p class="ttl">並べ替え｜</p>
                                <ul class="ul02">
                                    <li @if ($order_by == 'created_at') class="active" @endif><a href="javascript:void(0)" id="order_create">新着順</a></li>
                                    <li @if ($order_by == 'reserve_count') class="active" @endif><a href="javascript:void(0)" id="order_reserve">予約数順</a></li>
                                    <!--
                                    <li @if ($order_by == 'after_price' && $sort == 'asc') class="active" @endif><a href="javascript:void(0)" id="order_price_asc">安い順</a></li>
                                    <li @if ($order_by == 'after_price' && $sort == 'desc') class="active" @endif><a href="javascript:void(0)" id="order_price_desc">高い順</a></li>
                                    -->
                                </ul>
                            </div>
                            @yield('paging')
                            @else
                            <div class="block02">
                                </br></br></br></br>
                                <h1 class="cmn_h1_01">検索条件に該当する医療施設はまだ登録されてません</h1>
                                </br></br></br></br>
                            </div>
                            @endif
                            {!! Form::open(array('url' => 'menu', 'method' => 'post', 'id' => 'form_menu')) !!}
                            @foreach($facilitys as $facility)
                            <div class="block03">
                                <h2 class="cmn_h2_01"><span class="spn01">{{$facility['name']}}</span><span class="spn02">({{$facility['name_kana']}})</span></h2>
                                <ul class="ul03 cf">
                                    {{-- */$facility_courses = $common->commaExplode($facility['course'])/* --}}
                                    @foreach($facility_courses as $course)
                                    <li class="li{{$course}}">{{$master->getInspectionCourseName($course)}}</li>
                                    @endforeach
                                </ul>
                                <div class="block04 cf">
                                    {{-- */$images = $common->commaExplode($facility['image'])/* --}}
                                    @if($facility['image'] <> '')
                                    <div class="left"><p><img src="{{url('images/upload/'.$facility['number'].'/facility',$images[0])}}" alt=""></p></div>
                                    @else
                                    <div class="left"><p><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt=""></p></div>
                                    @endif
                                    <div class="center">
                                        <div class="block05">
                                            <p class="block05_left"><img src="{{url('images/list','icon07.png')}}" alt="電車"></p>
                                            <p class="block05_right">{{$facility['station']}}</p>
                                        </div>
                                        <div class="block05 mt10">
                                            <p class="block05_left"><img src="{{url('images/list','icon08.png')}}" alt="住所"></p>
                                            <p class="block05_right">{{$facility['access']}}</p>
                                        </div>
                                        <div class="block06 mt10">
                                            <p class="block06_left">診療時間</p>
                                            <p class="block06_right">{{$facility['start_time']}}～{{$facility['end_time']}}</p>
                                        </div>
                                        <div class="block06 mt10">
                                            <p class="block06_left">休診日</p>
                                            <p class="block06_right">
                                                {{-- */$holidays = $common->commaExplode($facility['holiday'])/* --}}
                                                @foreach($holidays as $holiday)
                                                {{$master->getBreakDayName($holiday)}}
                                                @endforeach
                                            </p>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <p>{{$facility['catchphrase']}}</p>
                                    </div>
                                </div>
                                <div class="block07">
                                    @if ($facility['min_price'] <> 0 & $facility['max_price'] <> 0)
                                    <p class="left">@if ($facility['min_price'] <> 0){{number_format($facility['min_price'])}}<span>円</span>@endif&nbsp;～&nbsp;@if ($facility['max_price'] <> 0){{number_format($facility['max_price'])}}<span>円（税込）</span>@endif</p>
                                    @else
                                    <p class=""></p>
                                    @endif
                                    <p class="right"><a class="cmn_lnk01" href="javascript:void(0)" data-number="{{$facility['number']}}">詳細を見る</a></p>
                                </div>
                                @if (count($facility['plans']) > 0)
                                <h3 class="cmn_h3_01">人気のプラン</h3>
                                @foreach($facility['plans'] as $plan)
                                <div class="block08">
                                    <div class="block09 cf">
                                        <div class="left">
                                            <p class="txt01">{{$common->strRound($plan['name'],70)}}<span class="spn02"></p>
                                            <ul class="ul04 cf">
                                                <li><img src="{{url('images/list','icon'.$plan['course'].'.png')}}" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="right cf">
                                            <p class="txt02"><span class="ovln">{{number_format($plan['before_price'])}}円</span><span class="price1">{{number_format($plan['after_price'])}}</span><span class="price2">円</span><span class="price3">({{$master->getTaxName($plan['tax_flag'])}})</span></p>
                                            <p class="lnk01"><a class="cmn_lnk02" href="javascript:void(0)" data-facility_number="{{$plan['facility_number']}}" data-plan_id="{{$plan['plan_id']}}">このメニューで予約</a></p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            @endforeach
                            <input type="hidden" id="facility_number" name="facility_number" value=""/>
                            {!! Form::close() !!}
                            {!! Form::open(array('url' => 'menu/detail', 'method' => 'post', 'id' => 'form_menu_detail')) !!}
                            <input type="hidden" id="preferred_facility_number" name="facility_number" value=""/>
                            <input type="hidden" id="preferred_plan_id" name="plan_id" value=""/>
                            {!! Form::close() !!}
                            @if(count($facilitys) > 0)
                            @yield('paging')
                            @endif
                        </div>
                    </div>
                </div>
                <div id="side">
                    <p class="ttl01">選択中の条件</p>
                    <div class="block01">
                        <p id="button_japan" class="active button01">{{$condition_pref}}</p>
                        @if($city_code == '')
                        <p id="button_city" class="button01 mt10">{{$condition_city}}</p>
                        @else
                        <p id="button_city" class="active button01 mt10">{{$condition_city}}</p>
                        @endif
                        <p class="ttl02">検診コース</p>
                        <p id="course" class="txt01">@foreach($condition_courses as $condition_course)・{{$condition_course}}@if ($condition_course != end($condition_courses)) <br /> @endif @endforeach</p>
                        <p id="button_course">検診コースを選択する</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 検索条件 -->
    <section id="modal_window">
        <div id="cover"></div>
        {!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_searches')) !!}
        <div class="block01">
            <p id="button_pref_select" class="button01">都道府県 (選択なし)</p>
            <div id="block_pref">
                <div class="tbl01">
                    <div class="tr">
                        <div class="th">全国</div>
                        <div class="td">
                            <label><input name="pref" type="radio" value="00" data-pref="選択なし" checked="checked">選択なし</label>
                        </div>
                    </div>
                    @foreach($regions as $region)
                    <div class="tr">
                        <div class="th">{{$region['region_name']}}</div>
                        <div class="td">
                            @foreach($region['prefectures'] as $prefecture)
                            <label><input name="pref" type="radio" value="{{$prefecture['prefecture_code']}}" data-pref_name="{{$prefecture['prefecture_name']}}" @if($prefecture['prefecture_code'] == $pref_code)checked="checked"@endif>{{$prefecture['prefecture_name']}}</label>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <p id="button_city_select" class="button01 mt10">市区町村 (都道府県を選択してください)</p>
            <div id="block_city">
            </div>
            <p id="button_course_select" class="button01 mt10">検診コース</p>
            <div id="block_course">
                @foreach($courses as $key => $course)
                <label><input name="course" type="checkbox" value="{{$key}}" data-course_name="{{$course}}">{{$course}}</label>
                @endforeach
            </div>
            <p id="confirm_buttom"><input type="button" id="search_buttom" value="この条件で検索する"></p>
            <input type="hidden" id="search_pref_code" name="pref_code" value="{{$pref_code}}"/>
            <input type="hidden" id="search_city_code" name="city_code" value="{{$city_code}}"/>
            <input type="hidden" id="course_code" name="course_code" value="{{$course_code}}"/>
            <input type="hidden" id="order_by" name="order_by" value=""/>
            <input type="hidden" id="sort" name="sort" value=""/>
        </div>
        {!! Form::close() !!}
    </section>
</article>
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection

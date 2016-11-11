@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.page_js')

@section('content')
@yield('header')
{!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_searche')) !!}
<article>
    <section id="index01">
        <div class="wrapper">
            <div class="cmn_block01 cf">
                <div class="left">
                    <h2><img src="{{url('images/index','h2_01.png')}}" alt="エリアから探す"></h2>
                    @foreach($regions as $region)
                    <div class="cmn_block02 cf">
                        <h3>{{$region['region_name']}}</h3>
                        <ul class="ul01 cf">
                            @foreach($region['prefectures'] as $prefecture)
                            <li>
                                <a href="javascript:void(0)" class="pref" data-vlaue="{{$prefecture['prefecture_code']}}">{{$prefecture['prefecture_name']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
                <div class="right">
                    <h2><img src="{{url('images/index','h2_02.png')}}" alt="コースから探す"></h2>
                    <div class="cmn_block03 cf">
                        <ul class="ul01 cf">
                            @foreach($courses as $key => $course)
                            <li class="li{{$key}}">
                                <a href="javascript:void(0)" class="course" data-vlaue="{{$key}}"><img src="{{url('images/index','button'.$key.'.png')}}" alt="{{$course}}"></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
<input type="hidden" id= "pref_code" name="pref_code" value=""/>
<input type="hidden" id="course_code" name="course_code" value=""/>
{!! Form::close() !!}
@endsection

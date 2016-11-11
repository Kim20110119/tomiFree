@section('facilty_name')
<!-- 医療機関名 -->
<div class="clearfix" id="HospName">
    <link rel="stylesheet" href="../css/app_csp/hospital/hoverlink.css?=1472706000000"><!-- ARCDOCK-3450  ホバーリンク表示用CSS -->
    <script type="text/javascript">

        function callScCustomLink(linkName) {
            scCustomLink(linkName, '', {prop35: linkName, eVar35: linkName});
        }
    </script>

    <dl id="HospNameL">
        <dt class="title x_medium_short_b">
            <img src="../img/shared/icon_hosp.gif" alt="" width="20" height="17" class="IconHead"><!-- 隙間発生防止の為、改行をコメントアウト
            -->{{$name}}<!--
            --><span class="area"><!--
                -->（{{$prefecture}} {{$city}}）<!--
                --></span>

            <a href="/mypage/controller.jsp?add=true&key=dock_hos&id1=1033710"><img src="../img/common/btn_mypage.gif" alt="マイページへ保存" width="138" height="22" class="hover btnClip"></a>

        </dt>
        <dd class="medium">
            休診日：日曜／祝日
        </dd>
        <dd class="medium">
            <ul class="Adress">
                <li>
                    {{$address}}
                </li>


                <li class="IconArrow">
                    <a href="../humanDock/public/facilty/map/" onclick="scCustomLink('dock:hos_info_map_access', '', {prop35: 'dock:hos_info_map_access', eVar35: 'dock:hos_info_map_access'});">
                        地図・アクセス
                    </a>
                </li>

            </ul>
        </dd>
        <!-- 駅 -->
        <dd class="medium IconTrain01">
            <span>
                {{$station}}
            </span>
        </dd>
        <dd class="medium">
            <div class="mediumCourseList">
                取り扱い検査コース：
            </div>
            <div class="mediumCourseListItems">
                @foreach($courses as $course)
                <div class="mediumItemContainer">
                    <div class="mediumItemHead">
                        <a href="https://dock.cocokarada.jp/bd/" class="medium-item mediumItem" onclick="callScCustomLink('dock:hos_hoverlink_themetop');">
                            <span class="medium-item">{{$course}}</span>
                        </a>
                    </div><!-- /mediumItemHead -->
                    <div class="mediumItemBody">
                        <ul class="mediumItemList">

                            <li>
                                <a href="https://dock.cocokarada.jp/bd/s-aomori/" onclick="callScCustomLink('dock:hos_hoverlink_themetop_pref');">
                                    {{$course}}
                                    <span class="xMark">×</span>
                                    {{$prefecture}}
                                </a>
                            </li>
                            <li>
                                <a href="https://dock.cocokarada.jp/bd/s-aomori/203/" onclick="callScCustomLink('dock:hos_hoverlink_themetop_city');">
                                    {{$course}}
                                    <span class="xMark">×</span>
                                    {{$city}}
                                </a>
                            </li>

                        </ul>
                    </div><!-- /mediumItemBody -->
                </div><!-- /mediumItemContainer -->
                @endforeach
            </div><!-- /mediumCourseListItems -->
        </dd>
    </dl>
    <link rel="stylesheet" href="../css/app_csp/top/ARCDOCK-6928.css">
    <script type="text/javascript" src="/app_csp/js/common/modal_viewer.js?key=HOSPITAL&hospital_id=1033710&hospital_name=メディカルコート八戸西病院付属八戸西健診プラザ&hospital_address=青森県八戸市大字長苗代字中坪７４−１" id="viewKey2"></script>
    <ul id="HospNameR">
        <li><a href="../humanDock/public/facilty/course/" onclick="scCustomLink('dock:hos_map_course_btn_top', '', {prop35: 'dock:hos_map_course_btn_top', eVar35: 'dock:hos_map_course_btn_top'});"><img src="../img/common/btn_show_course_all.jpg" alt="検査コースをすべて見る" width="212" height="80" class="hover"></a></li>
    </ul>
</div>
<!-- /医療機関名 -->
@endsection
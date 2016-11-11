@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.menu')
@include('common.footer')
@include('common.javascript')
@section('content')

<div id="wrapper">
    <div class="inner">
        <div id="top">
            <div class="inner">
                <h1 id="logo"><span><a href="#">富フリーの道：アフィリエイト</a></span></h1>
            </div>
            <div id="topmenubtn"><span>メニュー</span></div>
            <div id="topmenubox">
                <div id="searchbox">
                    <form name="search" id="search" method="get" action="./search.php">
                        <input type="text" class="skwd" name="keyword" size="20" value="" />
                        <input type="submit" src="./img/searchbutton.jpg" alt="検索" value="Search" />
                    </form>
                </div>
                <div id="topmenu">
                    <ul>
                        <li><a href="#">TOPページ</a></li>
                        <li><a href="#" target="_blank">小雪メインブログへ</a></li>
                        <li><a href="#" target="_blank">小雪メルマガへ</a></li>
                        <li><a href="#" target="_blank">問い合わせ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="headerbox">
            <div id="header">
                <img src="./img/header.jpg" alt="アフィリエイトの始め方　完全攻略ガイドブック" />
                <div id="headertxt">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="inner">
    <div id="column2">
        <div id="contents">
            <div id="layoutbox">
                <div id="main">
                    <div id="main_container">
                        <div id="main_inner">
                            <div id="mainbox">
                                <div id="mainbox-inner">
                                    <div class="inner">
                                        <div id="text1" class="txt-decbox2">
                                            <div class="top"><div class="top_inner"><div class="top_box"><div class="top_box2">&nbsp;</div></div></div></div>
                                            <div class="body">
                                                <p class="txt-img" style="text-align:center"><img src="{{url('img/affiliate/top','ttttp.gif')}}" alt="アフィリエイトの始め方" /></p>
                                                <p>&nbsp;</p>
                                                <p class="txt-img"><img src="{{url('img/affiliate/top','kokoru.gif')}}" align="left" /></p>
                                                <div class="bln balloon7">
                                                    <p class="img-l">&nbsp;</p>
                                                    <div class="b_body rnd1">
                                                        <p>このサイトにたどり着くまでにあなたは</p>
                                                        <p>&nbsp;</p>
                                                        <p class="arrow_red">アフィリエイト　初心者</p>
                                                        <p class="arrow_red">アフィリエイト　入門</p>
                                                        <p class="arrow_red">アフィリエイト　始め方</p>
                                                        <p class="arrow_red">アフィリエイト　やり方</p>
                                                        <p>&nbsp;</p>
                                                        <p>などなど・・・<br />思いつく限りの言葉を片っ端から検索てみては<br />何故か<span style="color:#FF0A0A">調べれば調べるほど更にわからなく</span>なったり</p>
                                                        <p>&nbsp;</p>
                                                        <p>アフィリエイトのスタート方法を知りたいだけなのに<br />そのわかりやすい説明の記事が見つけられずに</p>
                                                        <p>&nbsp;</p>
                                                        <p class="txt-img"><img src="{{url('img/affiliate/top','bikkuri01.gif')}}" align="left" alt="アフィリエイト初心者必見" /></p><span style="color:#FF0A0A">どう見ても怪しいサイト</span>ばかりが目に付いたり
                                                        <p>&nbsp;</p>
                                                        <p class="txt-img"><img src="{{url('img/affiliate/top','bikkuri01.gif')}}" align="left" alt="アフィリエイト初心者必見" /></p><span style="color:#FF0A0A">如何わしいキャッチフレーズ</span>に惑わされたり
                                                        <p>&nbsp;</p>
                                                        <p class="txt-img"><img src="{{url('img/affiliate/top','bikkuri01.gif')}}" align="left" alt="アフィリエイト初心者必見" /></p>何故か<span style="color:#FF0A0A">広告ページに飛ばされてまくり</span>
                                                        <p>&nbsp;</p>
                                                        <p>・・・etc・・・</p>
                                                        <p>&nbsp;</p>
                                                        <p>そんな迷子になっていませんでしたか？</p>
                                                    </div>
                                                </div>
                                                <br clear="all">
                                                <p class="txt-img"><img src="./img/cegao.gif" align="left" /></p>
                                                <div class="bln balloon7">
                                                    <p class="img-l">&nbsp;</p>
                                                    <div class="b_body rnd1">
                                                        <p><span style="font-size:26px;">でもっ！</span></p>
                                                        <p>&nbsp;</p>
                                                        <p>今、このサイトにたどり着いたならもうゴールです♪</p>
                                                    </div>
                                                </div>
                                                <br clear="all">
                                                <p>&nbsp;</p>
                                                <p style="text-align:center;"><span style="font-size:32px;"><span style="color:#C50000">よくぞたどり着いて頂けました♪</span></span></p>
                                                <p>&nbsp;</p>
                                                <p>&nbsp;</p>
                                                <p class="txt-img"><img src="./img/kegaopera.gif" align="left" /></p>
                                                <div class="bln balloon7">
                                                    <p class="img-l">&nbsp;</p>
                                                    <div class="b_body rnd1">
                                                        <p>この「アフィリエイトの始め方完全攻略ガイドブック」は<br />そんな迷子アフィリエイトの初心者さんの為に</p>
                                                        <p>&nbsp;</p>
                                                        <p>どこよりもわかりやすく<strong>アフィリエイトの始め方</strong>が<br /><span style="color:#FF0A0A">一つ一つ順を追ってわかるようになっています</span></p>
                                                        <p>&nbsp;</p>
                                                        <p>アフィリエイト未経験で0状態からスタートするあなたが<br />今から何をどうすればいいのか</p>
                                                        <p>&nbsp;</p>
                                                        <p>の作業手順がわかるようになっているサイトなんです</p>
                                                    </div>
                                                </div>
                                                <br clear="all">
                                                <p class="txt-img"><img src="./img/_1318154242_313.gif" align="left" /></p>
                                                <div class="bln balloon7">
                                                    <p class="img-l">&nbsp;</p>
                                                    <div class="b_body rnd1">
                                                        <p>しかもこの講座は<span style="color:#C50000">もちろん無料</span>だから安心してね！</p>
                                                    </div>
                                                </div>
                                                <br clear="all">

                                            </div>
                                            <div class="bottom"><span>&nbsp;</span></div>
                                        </div>


                                        <div id="text2" class="txt-decbox2">
                                            <div class="top"><div class="top_inner"><div class="top_box"><div class="top_box2"><h3><span><span><span>アフィリエイトの始め方目次　</span></span></span></h3></div></div></div></div>
                                            <div class="body">

                                                <h5>　はじめての方は上から順にどうぞ♪<img src="./img/yajirushi2_d.gif" alt="アフィリエイトの始め方" /></h5>
                                                <table class="rnk1item" cellspacing="0">
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y1.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category1/"><img alt="アフィリエイトの始め方　０日目" src="./img/1n.jpg" /></a></td>
                                                            <td>
                                                                <div class="ttitle"><a href="./category1/">アフィリエイトの始め方　０日目編</a></div>
                                                                <p>実際にアフィリエイトの作業に取り掛かる前の素朴な疑問や、謎、心の準備など含む「アフィリエイトとは？」に<br />お答えします</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y4.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category2/"><img alt="アフィリエイトの始め方　１日目" src="./img/0n.jpg" /></a></td>
                                                            <td>
                                                                <div class="ttitle"><a href="./category2/">アフィリエイトの始め方　１日目編</a></div>
                                                                <p>いざ出陣！の前に多くの方が失敗するハンドルネーム・・実はこのハンドルネーム一つにしても<br />「売れないアフィリエイターになってしまう法則」<br />があるのをご存知ですか？</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y2.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category3/"><img alt="" src="./img/2n.jpg" /></a></td>
                                                            <td>
                                                                <div class="ttitle"><a href="./category3/">アフィリエイトの始め方　２日目編</a></div>
                                                                <p>アフィリエイトをスタートするならまずは<br />アフィリエイト専用メールアドレスの準備をお忘れなく<br />最初のこの一手間で今後の管理が断然楽になりますよ</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y6.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category5/"><img src="./img/3n.jpg" alt="アフィリエイトの始め方　３日目" /></a></td>
                                                            <td>
                                                                <p class="ttitle"><a href="./category5/">アフィリエイトの始め方　３日目編</a></p>
                                                                <p>さっそく無料ブログで最初のあなたのお店を開店していきます。肩の力を抜いて練習ブログを始めますよ！<br />初めての方でもわかるように無料ブログの作り方を<br />図解で丁寧に説明していきますね</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y8.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category6/"><img src="./img/4n.jpg" alt="アフィリエイトの始め方　４日目" /></a></td>
                                                            <td>
                                                                <p class="ttitle"><a href="./category6/">アフィリエイトの始め方　４日目編</a></p>
                                                                <p>いよいよアフィリエイト広告を取得する為のASPに登録です<br />ＡＳＰとは一体何だろう？<br />ここが一番面倒な作業の山場になるかな～<br />頑張れ頑張れ！</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y5.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category7/"><img src="./img/5n.jpg" alt="アフィリエイトの始め方　５日目" /></a></td>
                                                            <td>
                                                                <p class="ttitle"><a href="./category7/">アフィリエイトの始め方　５日目編</a></p>
                                                                <p>さあ！自分のブログに広告を貼ってみましょう♪<br />ここまで頑張った自分へのご褒美として今日はなんと<br />早速ネットから初報酬も得ちゃいましょう♪</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y3.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category8/"><img src="./img/6n.jpg" alt="アフィリエイトの始め方　６日目" /></a></td>
                                                            <td>
                                                                <p class="ttitle"><a href="./category8/">アフィリエイトの始め方　６日目編</a></p>
                                                                <p>ダメリエイターにならず本当に稼げるアフィリエイターになる為の加速のコツをお伝えします<br />スタートダッシュでコケないようしっかり読んで下さいね</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <!-- startRank -->
                                                                <p><img src="./img/y7.gif" alt="アフィリエイトの始め方" /></p>
                                                                <!-- /endRank -->
                                                            </th>
                                                            <td class="timg"><a href="./category4/"><img src="./img/7n.jpg" alt="コラム" /></a></td>
                                                            <td>
                                                                <p class="ttitle"><a href="./category4/">ちょっと休憩コラム</a></p>
                                                                <p>作業の合間など、ちょっと気分転換したい時などに読んでね</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="txt-img"><img src="./img/cegao.gif" align="left" /></p>
                                                <div class="bln balloon7">
                                                    <p class="img-l">&nbsp;</p>
                                                    <div class="b_body rnd1">
                                                        <p>記事の順に沿って進めていくと<br />たった6日間であなたもアフィリエイターデビュー<br />ができるようになってるよ！</p>
                                                        <p>&nbsp;</p>
                                                        <p>このサイト内のページをすべて読み終わり、<br />書かれている手順通りに作業を進めた暁には<br />もう、<span class="ylw"><span style="color:#FF0A0A">今の「何がわからないのかすらわからない状態」</span></span><br />からはスッパリ卒業できるハズです♪</p>
                                                        <p>&nbsp;</p>
                                                        <p>今は有名なアフィリエイターさんの中にも<br />このサイトを最初のきっかけにスタートしたという方が<br />実はたーーくさんいるんだよっ！</p>
                                                    </div>
                                                </div>
                                                <br clear="all">

                                            </div>
                                            <div class="bottom"><span>&nbsp;</span></div>
                                        </div>
                                        <div class="rnd1 rbox1 shadow1">
                                            <p class="arrow_red">記事がお役に立てたらシェアやお気に入りに追加してくれると嬉しいです</p>
                                            <br />
                                            <div class="ninja_onebutton">
                                                <script type="text/javascript">
                                                    //<![CDATA[
                                                    (function (d) {
                                                        if (typeof (window.NINJA_CO_JP_ONETAG_BUTTON_2ae173daebb3115bbb1d162795134d3c) == 'undefined') {
                                                            document.write("<sc" + "ript type='text\/javascript' src='http:\/\/omt.shinobi.jp\/b\/2ae173daebb3115bbb1d162795134d3c'><\/sc" + "ript>");
                                                        } else {
                                                            window.NINJA_CO_JP_ONETAG_BUTTON_2ae173daebb3115bbb1d162795134d3c.ONETAGButton_Load();
                                                        }
                                                    })(document);
                                                    //]]>
                                                </script><span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
                                            </div>
                                            <div style="text-align:center">
                                                <script type="text/javascript">
                                                    <!--
                                                //Internet Explorer
                                                    if (navigator.userAgent.indexOf("MSIE") > -1) {
                                                        document.write('<input type="button" value="お気に入りに追加" onclick="window.external.AddFavorite(\'http://beginner.koyuki-afiri.com/\',\'アフィリエイトの始め方　完全攻略ガイドブック\')">');
                                                    } else if (navigator.userAgent.indexOf("Firefox") > -1) {
                                                        document.write('<input type="button" value="ブックマークに追加" onclick="window.sidebar.addPanel(\'アフィリエイトの始め方　完全攻略ガイドブック\',\'http://beginner.koyuki-afiri.com/\',\'\');">');
                                                    } else if (navigator.userAgent.indexOf("Netscape") > -1) {
                                                        document.write('<input type="button" value="ブックマークに追加" onclick="window.sidebar.addPanel(\'アフィリエイトの始め方　完全攻略ガイドブック\',\'http://beginner.koyuki-afiri.com/\',\'\');">');
                                                    } else if (navigator.userAgent.indexOf("Opera") > -1) {
                                                        document.write('<a href="http://beginner.koyuki-afiri.com/" rel="sidebar" title="アフィリエイトの始め方　完全攻略ガイドブック">ブックマークに追加</a>');
                                                    } else {
                                                        document.write('<input type="button" value="お気に入りに追加" onclick="alert(\'未対応のブラウザです。ブラウザのお気に入り機能をご利用ください。\');">');
                                                    }
                                                    // -->
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('menu')
                <br class="clear" />
            </div>

        </div>
    </div>
    <div id="btnbox">
        <ul>
            <li id="toppage"><a href="./">Home</a></li>
            <li id="pagetop"><a href="#top">Page Top</a></li>
        </ul>
    </div>
    <div id="gotop"><span><img src="{{url('img/affiliate/common','page_top.png')}}" alt="pagetop"></span></div>
</div>
@endsection

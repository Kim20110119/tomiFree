@extends('point.common.layout')
@include('point.common.head')
@include('point.common.header')
@include('point.common.menu')
@include('point.common.footer')
@include('point.common.javascript')
@section('content')
@yield('header')
<div id="wrapper">
    <main id="main">
        <div class="page-head">
            <div class="container hidden-xs">
            </div>
        </div>

        <div class="container">
            <div class="row home-top3">
                <h3>ポイントサイトとは？</h3>
                <div class="home-toptext">
                    <p>
                        ポイントサイトとは、サイト内でいろいろなサービスを利用することでポイントを貯めることができる「お小遣い稼ぎサイト」のことです。
                        ネットCMを見たり、ミニゲームや、アンケートに答えることでポイントが貯まり、
                        貯まったポイントは、「現金」「Amazonギフト券」「楽天銀行」「WebMoney」などに交換が可能！
                        ポイントサイトへの登録は「無料」で、中学生からでも登録できるほど簡単にはじめることができます。
                    </p>
                </div>
            </div>
            <div class="row home-3point">
                <div class="col-sm-4 home-3point">
                    <div class="point-icon point-1">
                        <h4 class="point-pc">
                            クリックポイント
                        </h4>
                        <img src="{{url('img/point/common','click_icon-256x256.png')}}" alt="クリックポイント">
                    </div>
                </div>
                <div class="col-sm-4 home-3point">
                    <div class="point-icon point-2">
                        <h4 class="point-pc">
                            ミニゲーム
                        </h4>
                        <img src="{{url('img/point/common','game_icon-256x256.png')}}" alt="ミニゲーム">
                    </div>
                </div>
                <div class="col-sm-4 home-3point">
                    <div class="point-icon point-3">
                        <h4 class="point-pc">
                            CM動画を見る
                        </h4>
                        <img src="{{url('img/point/common','movie_icon-256x256.png')}}" alt="CM動画">
                    </div>
                </div>
                <div class="col-sm-4 home-3point">
                    <div class="point-icon point-3">
                        <h4 class="point-pc">
                            アンケート
                        </h4>
                        <img src="{{url('img/point/common','enquete_icon-256x256.png')}}" alt="アンケート">
                    </div>
                </div>
                <div class="col-sm-4 home-3point">
                    <div class="point-icon point-3">
                        <h4 class="point-pc">
                            レビューや記事を書く
                        </h4>
                        <img src="{{url('img/point/common','article_icon-256x256.png')}}" alt="記事">
                    </div>
                </div>
                <div class="col-sm-4 home-3point">
                    <div class="point-icon point-3">
                        <h4 class="point-pc">
                            広告を利用
                        </h4>
                        <img src="{{url('img/point/common','advertisement_icon-256x256.png')}}" alt="広告">
                    </div>
                </div>

            </div>
            <div class="row home-top3">
                <h3>お勧めTOP3ポイントサイト</h3>
                <div class="col-sm-4 home-top3">
                    <div class="rank1-fx rank-box">
                        <a href="http://pointi.jp/p/?a=rbf880045720" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>ポイントインカム</h4>
                        </div>
                        <p class="copy-bold">約4,000円からの人気の投資！</p>
                        <img src="http://pointi.jp/share_cpn/img/bnr/468_60_2.png" class=top3-illust alt="暮らしをおトクにかえていく｜ポイントインカム" />
                    </div>
                </div>
                <div class="col-sm-4 home-top3">
                    <div class="rank2-crowd rank-box">
                        <a href="http://pointi.jp/p/?a=rbf880045720" target="_blank"></a>
                        <a href="http://www.gendama.jp/invite/?frid=6187765&ref=90000-banner" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>げん玉</h4>
                        </div>
                        <p class="copy-bold">約4,000円からの人気の投資！</p>
                        <img src="http://www.gendama.jp/img/invitation_banner94.gif" class=top3-illust>
                    </div>
                </div>
                <div class="col-sm-4 home-top3">
                    <div class="rank3-aff rank-box">
                        <a href="http://osaifu.com/33q1d/" target="_blank"></a>
                        <div class="top3-title">
                            <div class="top3-meddal">
                                <p></p>
                            </div>
                            <h4>お財布</h4>
                        </div>
                        <p class="copy-bold">約4,000円からの人気の投資！</p>
                        <img src="http://osaifu.com/img/friend_guide/banner/468_60_01.jpg" class=top3-illust alt="お財布.com - 無料で手軽に貯まる魔法のお財布">
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <div class="ranking-top">
                <h2>副業ランキング</h2>
                <img src="./images/common/icon-rank.png" alt="職業ランキング">
                <h4>オススメの副業をジャンルごとに解説！</h4>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>金融 / 投資</h3>
                    <ul class="ranking">
                        <li>
                            <a href="/fukugyou/fx/">
                                <div class="r-txt">
                                    <h4>FX</h4>
                                    <p>FXとは外国通貨を売買して利益を得る投資です。 4千円の資金からでも始められ投資の中でも簡単で初心者向きです。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/kabu/">
                                <div class="r-txt">
                                    <h4>株式投資</h4>
                                    <p>株を売買して配当・差益を得まる投資です。セミナーに通うなど、専門的な知識が必要です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/fudosan/">
                                <div class="r-txt">
                                    <h4>不動産投資</h4>
                                    <p>住むためではなく、賃貸や転売をして利益を生み出す目的で不動産を購入します。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3>ネット副業</h3>
                    <ul class="ranking">
                        <li>
                            <a href="/fukugyou/aff/">
                                <div class="r-txt">
                                    <h4>アフィリエイト</h4>
                                    <p>自分のブログやホームページに広告やリンクを表示し、そこから報酬をが支払われるものです。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/auction/">
                                <div class="r-txt">
                                    <h4>ネットオークション</h4>
                                    <p>要らなくなった物をネットオークションに出品し落札されると、利益が得られます。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/sedori/">
                                <div class="r-txt">
                                    <h4>せどり/転売</h4>
                                    <p>安く購入してきた古本や中古DVDなどを、ネット上で転売することで利益を得るビジネスです。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>制作/クリエイター</h3>
                    <ul class="ranking">
                        <li>
                            <a href="/fukugyou/crowd-sourcing/">
                                <div class="r-txt">
                                    <h4>クラウドソーシング</h4>
                                    <p>個人や企業がアウトソースしたい単発の仕事を、ネットを介して請け負います。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/blog/">
                                <div class="r-txt">
                                    <h4>ブログライター</h4>
                                    <p>ブログライターとは、自分のブログに依頼された内容の記事を書いて原稿料をもらう仕事です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/youtube/">
                                <div class="r-txt">
                                    <h4>YouTuber / YouTube広告</h4>
                                    <p>Youtubeに動画をアップロードし、閲覧者に広告をクリックしてもらうことで儲けを出します。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3>代行</h3>
                    <ul class="ranking">
                        <li>
                            <a href="/fukugyou/translation/">
                                <div class="r-txt">
                                    <h4>翻訳</h4>
                                    <p>翻訳の業務は多岐にわたりWebサイト、書類、映像、さらに専門性の高い文章の翻訳業務です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/tape/">
                                <div class="r-txt">
                                    <h4>テープ起こし</h4>
                                    <p>テープ起こしとは、会議や講演会などで録音音声を文字に起こす業務です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/data/">
                                <div class="r-txt">
                                    <h4>データ入力</h4>
                                    <p>データ入力とは、主にパソコンを使っってあらゆるデータを入力する仕事です。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <h3>モニター/懸賞</h3>
                    <ul class="ranking">
                        <li>
                            <a href="/fukugyou/monitor/">
                                <div class="r-txt">
                                    <h4>商品モニター</h4>
                                    <p>商品モニターとは商品を使ったり食べたりして感想を報告して報酬をもらう仕事です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/enquete/">
                                <div class="r-txt">
                                    <h4>アンケートモニター</h4>
                                    <p>アンケートモニターとはネットや郵送、座談会などでアンケートに答える仕事です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/kenshou/">
                                <div class="r-txt">
                                    <h4>懸賞</h4>
                                    <p>懸賞に応募して当たればお金やプレゼントが当たります。もれなくプレゼントもありますが、配当金額は低いです。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h3>資格/技能</h3>
                    <ul class="ranking">
                        <li>
                            <a href="/fukugyou/tutor/">
                                <div class="r-txt">
                                    <h4>添削 / 赤ペン先生</h4>
                                    <p>添削は、通信教育などの答案の丸つけをする仕事です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/tutor/">
                                <div class="r-txt">
                                    <h4>家庭教師</h4>
                                    <p>家庭教師とは小学生～高校生に学業を教える業務です。</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="/fukugyou/taxi/">
                                <div class="r-txt">
                                    <h4>個人タクシー</h4>
                                    <p>タクシードライバーとして車に乗客を乗せ対価を受け取る場合には、第二種運転免許を取得する必要があります。</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>　<a href="./fukugyou/index.html"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>ランキングをもっと見る</a></p>
            </div>
        </div>

      　<div class="container">
            <h2>副業予備知識</h2>
            <ul class="article-home">
                <li>
                    <a href="/article/barenai/">
                        <div class="r-img">
                            <img src="./images/content/barenai-300x158.png" alt="会社にバレない副業の方法">
                        </div>
                        <div class="r-txt">
                            <h4>会社に副業がバレないためにやるべき3つのコト</h4>
                            <p>副業が認められている会社であっても、副業をしている事を言いにくい方も多いのではないでしょうか？そんな方必見の、会社にバレない副業の方法をお伝えいたします。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="/article/koumuin/">
                        <div class="r-img">
                            <img src="./images/content/koumuin-300x158.png" alt="公務員でもできる副業とは？">
                        </div>
                        <div class="r-txt">
                            <h4>公務員は副業禁止？副業が許可される職業とは</h4>
                            <p>民間企業のサラリーマンだけでなくて、公務員の給与の実態も良い状態とは言えないのがいまの日本です。公務員でもできる副業についてまとめています。</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </main>

    <div class="container">
        <div class="sns-container">
            <ul class="sns">
                <li class="facebook">
                    <a href="http://www.facebook.com/share.php?u=pageUrlReplace" onclick="window.open(this.href, 'FBwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;"><span class="icon-facebook"></span><span class="sns-text">シェア</span></a>
                </li>
                <li class="twitter">
                    <a href="http://twitter.com/share?url=pageUrlReplace&text=pageMetaTitleReplace" target="_blank"><span class="icon-twitter"></span><span class="sns-text">ツイート</span></a>
                </li>
                <li class="line">
                    <a href="http://line.me/R/msg/text/?pageMetaTitleReplace%0D%0ApageUrlReplace" target="_blank"><span class="icon-line"></span><span class="sns-text">LINE</span></a>
                </li>
                <li class="hatena">
                    <a href="http://b.hatena.ne.jp/entry/pageUrlReplace" class="hatena-bookmark-button" data-hatena-bookmark-layout="simple" title="pageMetaTitleReplace"><span class="icon-hatena"></span><span class="sns-text">はてブ</span></a>
                    <script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>
                </li>
            </ul>
        </div>
        <hr>
        <h2 class="final">私がオススメする副業！<span>短期間で最も稼げる副業</span>「FX」</h2>
        <div class="show-pc">
            <a href="/link/fx.html" target="_blank"><img src="/images/banner/fx-main.jpg" class="img-responsive" alt="教えて！あなたの副業月収・FXでいくら稼げるの？"></a>
        </div>
        <div class="show-mb">
            <a href="/link/fx.html" target="_blank"><img src="/images/banner/fx-main-mb.jpg" class="img-responsive recommend-sm" alt="教えて！あなたの副業月収・FXでいくら稼げるの？"></a>
        </div>
        <p class="mt-sm">FXは24時間パソコンやスマホで稼げるため、<b>在宅の副業</b>や<b>空いた時間を使った副業</b>に向いています。約4千円の少額からできる投資として人気があり、短期間で稼ぎたい方に向いています。FXの始め方については、こちらのサイトに分かりやすくまとまっているのでオススメです。</p>
        <div class="text-center mb-lg">
            <a href="/link/fx.html" target="_blank" class="btn-main"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>FXでいくら稼げるの？</a>
        </div>
    </div>
</div>
@endsection

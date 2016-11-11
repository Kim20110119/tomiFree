@inject('common', 'App\Common\Common')
@inject('master', 'App\Common\Master')
{{-- */$holidays = $common->commaExplode($facility['holiday'])/* --}}
{{$examinee['name']}} 様

ご利用ありがとうございます。得割ドックでございます。
この度は健診希望日の申請、誠にありがとうございます。
以下の内容にて、健診希望日の申請を承りました。

こちら希望の医療施設へ確認をいたしますので、
5営業日ほどお時間頂く場合がございます。

確認が済み次第、$［受診者様　ご氏名］様にご連絡差し上げますので
ご不便をおかけしますが今しばらくお待ち下さいませ。

===========================================

■ 健診プラン情報

【医療施設名】:　{{$facility['name']}}
【医療施設住所】:　{{$master->getPrefectureName($facility['prefecture'])}} {{$facility['city']}} {{$facility['town']}} {{$facility['address']}} {{$facility['building']}}
【アクセス】:　{{$facility['access']}}
【最寄り駅】:　{{$facility['station']}}
【診療時間】:　{{$facility['start_time']}}～{{$facility['end_time']}}
【休診日】:　@foreach($holidays as $holiday){{$master->getBreakDayName($holiday)}} @endforeach

【カテゴリ】　{{$master->getInspectionCourseName($plan['course'])}}
【プラン名称】　{{$plan['name']}}
【プラン価格】　{{number_format($plan['after_price'])}}円 {{$master->getTaxName($plan['tax_flag'])}}

- - - - - - - - - - - - - - - - - - - - - - -

■ 健診希望日

【第１希望】:　{{$examinee['preferred_date_01']}}
【第２希望】:　{{$examinee['preferred_date_02']}}
【第３希望】:　{{$examinee['preferred_date_03']}}
【第４希望】:　{{$examinee['preferred_date_04']}}
【第５希望】:　{{$examinee['preferred_date_05']}}

- - - - - - - - - - - - - - - - - - - - - - -

■ 申請者様情報

【WELBOX会員名】:　{{$examinee['ewel_name']}}
※ 受診者様と同一の場合は空欄可となります。

【受診者様ご指名】:　{{$examinee['name']}}
【フリガナ】:　{{$examinee['name_kana']}}
【生年月日】:　{{$examinee['year']}}年{{$examinee['month']}}月{{$examinee['day']}}日
【年齢】:　{{$examinee['age']}}才
【性別】:　{{$master->getSexName($examinee['sex'])}}
【電話番号１】:　{{$examinee['tel01']}}
【電話番号２】:　{{$examinee['tel02']}}
【メールアドレス】:　{{$examinee['email']}}
【住所】:　{{$examinee['zip']}}　{{$examinee['address']}}

【備考】
{{$examinee['note']}}

===========================================

内容変更・キャンセルをされる場合は、
下記メールアドレスまたは電話番号までご連絡頂ますようお願い申し上げます。
【メール】
w-dock@shinbus.jp

【電話番号】0120-451-125

※※※※※※※※※※※※※※※※※※※※※※※※

　本メールは送信専用となっております。
　ご返信なさらぬようお願い申し上げます。

※※※※※※※※※※※※※※※※※※※※※※※※


┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏┏

　　会員限定健診手配サービスサイト「得割ドック」
　　得割ドックサポート
　　TEL：0120-451-125
　　Mail：w-dock@shinbus.jp

　　【運営】
　　株式会社シンバス
　　URL：http://www.shinbus.jp

　┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛┛


～本メールの無断転載・利用はご遠慮ください～
特に注記がなくても、受取人以外の内容の閲覧、配布、または使用については固く禁じられております。

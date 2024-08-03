@extends('layouts.app')

@section('title')
    <title>work | {{config('app.name')}}</title>
@endsection


@section('content')


<main id="works">
    <h2>ワークページ</h2>
    <p>このページでは、私がこれまでに作成してきたものを掲載しています。</p>

    <article>

        <section>
            <h3>Analysis DB (TokyoLab17 php選手権1位)</h3>
            <hr width="200">
            <ul>
                <li>
                    <a href="https://gsacademy02.sakura.ne.jp/phpt/login.php" target="_blank">
                        <img src="{{ asset('img/Analysis_DB.png') }}" alt="Analysis_DB.png">
                        https://gsacademy02.sakura.ne.jp/phpt/login.php
                    </a>
                </li>
                
                <li><p>機器分析後のpdfデータから必要項目を抽出し編集後DBに登録。登録したデータ検索以外に、
                    <br>測定したい試料の物性値から参考できる試験条件を提案してくれるアプリです。
                    <br>Employee_ID: 111, Password: password でログインできます。
                    <br>
                    <br>従事している会社で、研究開発にいた際に抱いていた不満をもとに作成しました。
                    <br>会社で実装していきたいと思っています。
                    <br>※かなり専門的なアプリのため、ログイン→HPLC→Search→検索クエリで"G05"で検索したデータの閲覧をお勧めします。
                    <br>
                    <br>主な使用技術は
                    <br>　PHP / TailwindowCSS / JavaScript / MySQL
                    <br>　smalot/PdfParser / composer
                    <br>PdfParserは、フォント依存性が高いようで、結局pdfデータのフォーマットを順守する必要あり。OCRとかも複合できるとより幅が広がるかも。<a href="https://basic.dance/article/47/" class="text-red">『Pythonライブラリ「PDFMiner.six」🔍』</a>で対応をした方が良さそう。
                </p></li>
            </ul>
        </section>

        <section>
            <h3>KaizenEx (TokyoFukuoka合同Team開発2位)</h3>
            <hr width="200">
            <ul>
                <li>
                    <a href="https://gsacademy02.sakura.ne.jp/kaizenex/login" target="_blank">
                        <img class="img_kaizen" src="{{ asset('/img/KaizenEx.png') }}" alt="KaizenEx.png">
                        https://gsacademy02.sakura.ne.jp/kaizenex/login
                    </a>
                </li>
                

                <li><p>Laravelを用いてチーム開発した、AIに提案書の原案を作成依頼、登録後に承認工程を含んだ業務補助アプリです。
                    <br>困っていることをAIに相談し、AIが提案書の原案を作成し、それを元に提案書を作成することができる、
                    <br>そんなイメージを形にしました。
                    <br>名前: testtest , パスワード: testtest 
                    <br>名前: katyou2 , パスワード: testtest      でログインできます。
                    <br>
                    <br>主な使用技術は
                    <br>　PHP / Laravel / TailwindowCSS / JavaScript / MySQL
                    <br>　Chart.js / GeminiAPI
                    <br>　Carbon(日付関係) / PHPUnit / Docker
                    <br>Spechal Thanks 2 @Gensan, @Nakaji, @Izumi
                </p></li>
            </ul>
        </section>

        <section>
            <h3>BassMemo (TokyoLab17 javaScript選手権1位)</h3>
            <hr width="200">
            <ul>
                <li>
                    <a href="https://gsacademy02.sakura.ne.jp/BassFishing/BASSFishing.html" target="_blank">
                        <img src="{{ asset('img/BassMemo.png') }}" alt="BassMemo.png">
                        https://gsacademy02.sakura.ne.jp/BassFishing/BASSFishing.html
                    </a>
                </li>
                <li><p>趣味のバス釣り釣果登録用のAPPです。実測した体長と重量はもちろん、
                    <br>位置情報から天候情報を取得・Firebaseに保存し、さらに取得しなおしたデータをMap上に情報含めてピン留めします。
                    <br>熱中して帰りが遅くならないように、位置情報からBingMap経由で帰宅時間（私の自宅への）も算出します。
                    <br>
                    <br>主な使用技術は
                    <br>　HTML / TailwindowCSS / JavaScript
                    <br>　Firebase / Firestorage / BingMapsAPI（逆ジオ）/ OpenWeatherAPI
                </p></li>
        
            </ul>
        </section>

        <section>
            <h3>論文共有アプリ</h3>
            <hr width="200">
            <ul>
                <li>
                    <a href="https://gsacademy02.sakura.ne.jp/php04_db02/index.php" target="_blank">
                        <img src="{{ asset('img/Articl_Search.png') }}" alt="Articl_Search.png">
                        https://gsacademy02.sakura.ne.jp/php04_db02/login.php
                    </a>
                </li>

                <li><p>このアプリは、研究開発部門の仲間内で論文を共有するためのアプリです。
                    <br>主な使用技術は
                    <br>　PHP / CSS / MySQL
                    <br>　Chart.js
                    <br>　※PHP試作品です。
                </p></li>
            </ul>
        </section>
    </article>
</main>
@endsection
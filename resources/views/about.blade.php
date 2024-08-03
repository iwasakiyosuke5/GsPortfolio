@extends('layouts.app')

@section('title')
    <title>about | {{config('app.name')}}</title>
@endsection


@section('content')

@php
    use Carbon\Carbon;
    $startDate = Carbon::create(2024, 4, 15);
    $now = Carbon::now();
    $diff = $startDate->diffInMonths($now);
    $aboutMonth = number_format($diff, 1); 
    // $diff = $startDate->diffIndate($now);
@endphp

    <main id="about">
        <h2>このポートフォリオと私について</h2>
        <p>当サイトは、私がGsAcademyにて、<br>プログラミングを勉強していく中で作成したWebAPPの記録を残すための、<br>簡単なポートフォリオを作成したいと思い作成しました。</p>

        <article id="profile">
            <img src="" alt="">

            <h2 class="name">ニックネーム：Gann</h2>
            <ul>
                <li>生年月日：1984年2月2日生まれ</li>
                <li>プログラミング開発歴：<span class="aboutMonth">{{ $aboutMonth }}ヶ月</span> (2024.04.15から)</li>
                <li>好きな飲食：<a href="https://www.instagram.com/hanaabi_official/">花陽浴🔎</a>、<a href="https://www.sapporobeer.jp/lager/">サッポロラガー🔎</a>、<a href="http://ieke1.com/">吉村家🔎</a>、砂肝、ピーナッツ</li>
                <li>趣味：登山、昆虫採集、スニーカー集め、ガンプラ作り（最近は塗装）、擬似餌釣り</li>
                <li>好きなモノ：Raf Simons、大排気量のCセグメント、山道、ニーア</li>
                <li>お仕事：大学院卒業(2010)→有機合成屋さん（2024年）→社内DX推進部(2024~)・内製開発 <span>(現在GsAcademyにて修行中)</span></li>
            </ul>
        </article>
    </main>

@endsection
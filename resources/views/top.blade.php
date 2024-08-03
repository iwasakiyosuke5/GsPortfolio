@extends('layouts.app')

@section('title')
    <title>top | {{config('app.name')}}</title>
@endsection

@section('content')
    <img src="" alt="">

    <main id="top">
        <h2>Welcome to Gann’s Web Portpholioへ</h2>
        <p>
            当サイトでは私の拙いWeb作品を掲載しています。<br>
            このwebページも、Laravel11の練習を兼ねて作成しており、<br>
            <span class="orange">Laravel11</span>、<span class="blue">SASS(7月末に授業で習ったので触り程度に)</span>を使用して作成しています。<br>
            <span class="bold">"About"</span>には私のプロフィールを掲載しています。<br>
            <span class="bold">"Works"</span>には私が作成したWebアプリの概要を掲載しています。<br>
            当サイトに関する事や、紹介したWebアプリの感想のお問い合わせは<a href="{{ route('contact') }}" class="contact-btn">contact</a>よりご連絡ください。
        </p>
    </main>
@endsection

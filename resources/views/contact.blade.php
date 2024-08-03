@extends('layouts.app')

@section('title')
    <title>contact | {{config('app.name')}}</title>
@endsection


@section('content')


    <main id="contact">
        <h2>お問い合わせフォーム</h2>
        <p>当サイトに関する事や、紹介したWebアプリの感想・お仕事のご依頼はこちらからご連絡ください。</p>

        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="li">
                <label for="name">お名前</label>
                <input type="text" name="name" id="name" placeholder="Gann">
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="li">
                <label for="email">メール</label>
                <input type="email" name="email" id="email" placeholder="example@example.com">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="li">
                <label for="text">内容</label>
                <textarea name="text" id="text" rows="6" placeholder="こちらにお問い合わせ内容をご入力ください"></textarea>
                @error('text')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">送信</button>
        </form>
        

    </main>
@endsection
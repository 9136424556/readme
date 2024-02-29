<!DOCTYPE html>
<html lang="ja">
@extends('layouts.app')

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム入力ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
    @endsection
</head>

<body>
    <header class="header">
    <h1 class="header-line">
        <a href="/" class="header-logo">
           
        </a>
      </h1>
    </header>
    
    <main>
        @section('content')

        <div class="contact-form">
            <div class="contact-form__head">
                <h2>Contact</h2>
            </div>
            <form action="/confirm" class="form" method="post">
            @csrf
            <div class="form">
                <div class="form-title">
                    <span class="form-label">お名前</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <input type="text" name="name1" placeholder="例：山田" value="{{ old('name') }}"/>
                        <input type="text" name="name2" placeholder="例：太郎" value="{{ old('name') }}"/>
                    </div>
                    <div class="form-error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">性別</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <input type="radio" id="1"  name="button" value="{{ old('button') }}" checked/>
                        <label for="1">男性</label>
                        <input type="radio" id="2" name="button" value="{{ old('button') }}"/>
                        <label for="2">女性</label>
                        <input type="radio" id="3" name="button" value="{{ old('button') }}"/>
                        <label for="3">その他</label>
                    </div>
                    <div class="form-error">
                        @error('gender')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">メールアドレス</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
                    </div>
                    <div class="form-error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">電話番号</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <input type="tel" name="tel1" placeholder="080" value="{{ old('tel') }}"/>
                        <input type="tel" name="tel2" placeholder="1234" value="{{ old('tel') }}"/>
                        <input type="tel" name="tel3" placeholder="5678" value="{{ old('tel') }}"/>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">住所</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷１－２－３" value="{{ old('address') }}"/>
                    </div>
                    <div class="form-error">
                        @error('address')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">建物名</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション１０１" value="{{ old('building') }}"/>
                    </div>
                    <div class="form-error">
                        @error('building')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">お問い合わせの種類</span>
                </div>
                <div class="form-group">
                    <div class="form-input">
                        <select name="content" >
                            <option value="0">選択してください</option>
                            <option value="1">商品のお届けについて</option>
                            <option value="2">商品の交換について</option>
                            <option value="3">商品トラブル</option>
                            <option value="4">ショップへの問い合わせ</option>
                            <option value="5">その他</option>
                        </select>
                    </div>
                    <div class="form-error">
                        
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="form-title">
                    <span class="form-label">お問い合わせ内容</span>
                </div>
                <div class="form-group">
                    <div class="form__input--textarea">
                        <textarea  name="content2" placeholder="お問い合わせ内容をご記載ください"></textarea>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button--submmit" type="submit">確認画面</button>
            </div>
            </form>
        </div>
        @endsection
    </main>
</body>
</html>
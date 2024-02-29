<!DOCTYPE html>
<html lang="ja">
  @extends('layouts.app')

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
  @endsection
</head>

<body>
    <main>
        @section('content')
        <div class="thanks">
            <div class="thanks__content">
                お問い合わせありがとうございました
            </div>
            <div class="form__button">
                <button class="home__button">HOME</button>
            </div>
        </div>
    </main>
</body>
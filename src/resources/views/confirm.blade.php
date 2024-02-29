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
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
  @endsection
</head>

<body>
    

    <main>
        @section('content')
        <div class="confirm">
            <div class="confirm-head">
                <h2>confirm</h2>
            </div>
            <form class="form" action="/contacts" method="post">
            @csrf
                <div class="confirm-table">
                    <table class="confirmtable-inner">
                        <tr class="table-row">
                            <th class="table-head">お名前</th>
                            <td class="table-text">
                                <span class="table-name">
                                     <input type="text" name="name" value="{{ $contact['name'] }}"  readonly/>
                                </span>
                                <span class="table-name">
                                     <input type="text" name="name" value="{{ $contact['name'] }}"  readonly/>
                                </span>
                               
                            </td>
                        </tr>
                        <tr class="table-row">
                            <th class="table-head">性別</th>
                            <td class="table-text">
                                <input type="text" name="button" value="{{ $contact['button'] }}" readonly/>
                            </td>
                         </tr>
                         <tr class="table-row">
                            <td class="table-text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly/>
                            </td>
                         </tr>
                         <tr class="table-row">
                            <td class="table-text">
                            <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly/>
                             </td>
                         </tr>
                         <tr class="table-row">
                            <td class="table-text">
                                <input type="text" name="adress" value="{{ $contact['address'] }}" readonly/>
                            </td>
                         </tr>
                         <tr class="table-row">
                            <td class="table-text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly/>
                            </td>
                         </tr>
                         <tr class="table-row">
                            <td class="table-text">
                                <input type="text" name="content" value="{{ $contact['content'] }}" readonly/>
                            </td>
                         </tr>
                         <tr class="table-row">
                            <td class="table-text">
                                <input type="text" name="content2" value="{{ $contact['content2'] }}" readonly/>
                            </td>
                         </tr>
                    </table>
                
                </div>
                <div class="form__button">
                    <button class="form__button-submit">送信</button>

                </div>
            </form>
        </div>
        @endsection
    </main>
</body>
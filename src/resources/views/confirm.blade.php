@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@php
  $hideNav = true;
@endphp

@section('content')

    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr>
              <th>お名前</th>
              <td class="confirm-table__text">
                <input type="text" name="last_name" value="{{ $contact['last_name']}}" readonly />
                <input type="text" name="first_name" value="{{ $contact['first_name']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>性別</th>
              <td class="confirm-table__text">
                <input type="text" name="gender"value="{{ $contact['gender']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $contact['tel1']}}" readonly />
                <input type="tel" name="tel" value="{{ $contact['tel2']}}" readonly />
                <input type="tel" name="tel" value="{{ $contact['tel3']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>建物</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>お問い合わせ種類</th>
              <td class="confirm-table__text">
                <input type="text" name="category_id" value="{{ $contact['category_id']}}" readonly />
              </td>
            </tr>
            <tr>
              <th>お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail']}}"  > 
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit" name="action" value="send">送信</button>
          <button class="form__button-submit--correct" type="submit" name="action" value="back">修正</button>

        </div>
      </form>
    </div>
@endsection
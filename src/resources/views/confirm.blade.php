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
      <form class="form" action="/store" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr>
              <th>お名前</th>
              <td class="confirm-table__text">
                <span class="confirm-table__text-span">{{ $contact['last_name'] }}</span>
                <span class="confirm-table__text-span">{{ $contact['first_name'] }}</span>
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">

              </td>
            </tr>
            <tr>
              <th>性別</th>
              <td class="confirm-table__text">
                <!-- 表示用 -->
                <input type="text" value="{{ $genderName }}" readonly />

                <!-- 送信用 -->
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
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
                <span class="confirm-table__text-span">{{ $contact['tel1'] }}{{ $contact['tel2'] }}{{ $contact['tel3'] }}</span>
                <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
                <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">

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
                <!-- 表示用-->
                <input type="text" value="{{ $categoryName }}" readonly />

                <!-- 送信用-->
                <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />
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
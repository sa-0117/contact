@extends('layouts.app')

@section('css')
<link rel="stylesheet" href=" {{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact__content">
      <div class="contact__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--name">
              <input type="text" name="first_name" placeholder="例: 山田" value="{{ old('first_name') }}"/>
              <input type="text" name="last_name" placeholder="例: 太郎" value="{{ old('last_name') }}"/>
            </div>
            <div class="form__error">


            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--radio">
              <div class="custom-radio">
                <input type="radio" id="gender-male" name="gender" value="male" checked>
                <span class="radio-circle"></span>
                <label for="gender-male">男性</label>
              </div>

              <div class="custom-radio">
                <input type="radio" id="gender-female" name="gender" value="female">
                <span class="radio-circle"></span>
                <label for="gender-female">女性</label>
              </div>

              <div class="custom-radio">
                <input type="radio" id="gender-other" name="gender" value="other">
                <span class="radio-circle"></span>
                <label for="gender-other">その他</label>
              </div>
            </div>
            <div class="form__error">
             
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" value=""/>
            </div>
            <div class="form__error">
             
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--tell">
              <input type="tel" name="tel1" placeholder="090" />-
              <input type="tel" name="tel2" placeholder="1234" />-
              <input type="tel" name="tel3" placeholder="5678" />

            </div>
            <div class="form__error">

            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" value=""/>
            </div>
            <div class="form__error">
             
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" value="" />
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__select--text">
              <select name="inquiry-type" >
                <option value="選択してください">選択してください　　　　　　▼</option>
                <option value=""></option>
                  </select>
            </div>
            <div class="form__error">
             
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
@endsection

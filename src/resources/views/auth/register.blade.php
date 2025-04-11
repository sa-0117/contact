@extends('layouts.app')

@section('css')
<link rel="stylesheet" href=" {{ asset('css/register.css') }}">
@endsection

@section('content')
    <div class="register__content">
      <div class="register__heading">
        <h2>Register</h2>
      </div>
      <form class="form" method="post" action="{{ route('register') }}"> 
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
          </div>
          <div class="form__group-content">
            <input type="name" name="name" placeholder="例: 山田　太郎" value="{{ old('name') }}"/>
          </div>
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}"/>
          </div>
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror

        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="form__group-content">
            <input type="password" name="password" placeholder="例: coachtech1106" value="{{ old('password') }}"/>
          </div>
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
  
        <div class="form__button">
          <button class="form__button-submit" type="submit">登録</button>
        </div>
      </form>
      </div>
    </div>
@endsection
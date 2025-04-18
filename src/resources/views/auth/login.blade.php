@extends('layouts.app')

@section('css')
<link rel="stylesheet" href=" {{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="login__content">
      <div class="login__heading">
        <h2>Login</h2>
      </div>
      <form class="form" method="post" action="{{ route('login') }}"> 
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <input type="email" name="email" placeholder="例: test@example.com" value=""/>
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
            <input type="password" name="password" placeholder="例: coachtech1106" value=""/>
          </div>
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
  
        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>
      </form>
      </div>
    </div>
@endsection
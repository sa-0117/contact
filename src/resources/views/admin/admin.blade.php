@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection


@section('content')

    <div class="admin__content">
      <div class="admin__heading">
        <h2>Admin</h2>
      </div>
      <form class="form" action="/admin" method="get">
        @csrf

        <div class="admin__group">
            <div class="admin-sarch__content">
                <div class="admin-sarch__item">
                    <input  type="text" name="name" placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="admin-sarch__item">
                  <div class="admin-sarch__item-select-wrap">
                    <select name="gender" >
                      <option value="">性別</option>
                    </select>
                  </div>
                </div>
                <div class="admin-sarch__item">
                  <div class="admin-sarch__item-select-wrap">
                    <select name="inquiry-type" >
                      <option value="お問い合わせの種類">お問い合わせの種類</option>
                    </select>
                  </div>
                </div>
                <div class="admin-sarch__item">
                  <div class="admin-sarch__item-select-wrap">
                    <select name="dete" >
                      <option value="date">年/月/日</option>
                    </select>
                  </div>
                </div>
                <div class="admin-sarch__item">
                  <input  type="submit" value="検索">
                </div>
                <div class="admin-sarch__item">
                  <input  type="reset" value="リセット">
                </div>
           </div>
           <div class="admin-btn__content">
            <div class="admin-btn__item">
                <button class="button-submit--success" type="submit">エクスポート</button>
            </div>
           </div>
        </div>
    </form>





        <div class="admin-table">
          <table class="admin-table__inner">
            <tr class="admin-table__row">
              <th class="admin-table__header">お名前</th>
              <th class="admin-table__header">性別</th>
              <th class="admin-table__header">メールアドレス</th>
              <th class="admin-table__header">お問い合わせ種類</th>
              <th class="admin-table__header"></th>
            
            </tr>
            <tr>
                <td class="admin-table__text" >sample</td>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">
                <div class="form__button">
                    <button class="form__button-submit" type="submit" name="action" value="submit">詳細</button>
                </td>
            </tr>

            <tr>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">sample</td>
                <td class="admin-table__text">
                <div class="form__button">
                    <button class="form__button-submit" type="submit" name="action" value="submit">詳細</button>
                </td>
            </tr>
          </table>
        </div>
    </div>
@endsection
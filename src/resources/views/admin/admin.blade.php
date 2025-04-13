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
    <div class="admin__group">
      <div class="admin-sarch__content">
        <div class="admin-sarch__item">
          <input  type="text" name="name" placeholder="名前やメールアドレスを入力してください">
        </div>
        <div class="admin-sarch__item">
          <div class="admin-sarch__item-select-wrap">
            <select name="gender" >
              <option value="">性別</option>
              <option value="1" {{ request('gender') == '1' ? 'selected' : '' }}>男性</option>
              <option value="2" {{ request('gender') == '2' ? 'selected' : '' }}>女性</option>
              <option value="3" {{ request('gender') == '3' ? 'selected' : '' }}>その他</option>
            </select>
          </div>
        </div>
        <div class="admin-sarch__item">
          <div class="admin-sarch__item-select-wrap">
            <select name="category_id" >
              <option value="">お問い合わせの種類</option>
                @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->content }}
              </option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="admin-sarch__item">
          <input  type="date" name="date" />
        </div>
        <div class="admin-sarch__item">
          <input  type="submit" value="検索">
        </div>
        <div class="admin-sarch__item">
          <input  type="reset" value="リセット">
        </div>
      </div>
    </div>
    <div class="admin-btn__content">
      <div class="admin-btn__item">
        <button class="button-submit--success" type="submit">エクスポート</button>
      <div class="pagination">
        {{ $contacts->appends(request()->query())->links('pagination::bootstrap-4') }}

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
        @foreach ($contacts as $contact)
        <tr>
          <td class="admin-table__text">{{ $contact->last_name }} {{ $contact->first_name }}</td>
          <td class="admin-table__text">
            @if ($contact->gender === 1) 男性
            @elseif ($contact->gender === 2) 女性
            @else その他
            @endif
          </td>
          <td class="admin-table__text">{{ $contact->email }}</td>
          <td class="admin-table__text">{{ $contact->category->content ?? '未設定' }}</td>
          <td class="admin-table__text">
            <div class="modal__button">
              <a href="#modal-{{ $contact->id }}" class="modal__button-submit">詳細</a>
            </div>
            <div class="modal" id="modal-{{ $contact->id }}">
              <div class="modal-wrapper">
                <a href="#" class="close">&times;</a>
                <div class="modal__content">
                  <div class="confirm-table">
                    <table class="modal-table__inner">
                      <tr>
                        <th>お名前</th>
                        <td class="modal-table__text">{{ $contact->last_name }} {{ $contact->first_name }}</td>
                        </tr>
                        <tr>
                          <th>性別</th>
                            <td class="admin-table__text">
                              @if ($contact->gender === 1) 男性
                              @elseif ($contact->gender === 2) 女性
                              @else その他
                              @endif
                            </td>
                        </tr>
                        <tr>
                          <th>メールアドレス</th>
                            <td class="modal-table__text">{{ $contact->email }}</td>
                        </tr>
                        <tr>
                          <th>電話番号</th>
                            <td class="modal-table__text"> {{ $contact->tell }}</td>
                        </tr>
                        <tr>
                          <th>住所</th>
                            <td class="modal-table__text">{{ $contact->address }}</td>
                        </tr>
                        <tr>
                          <th>建物</th>
                            <td class="modal-table__text"> {{ $contact->building }}</td>
                        </tr>
                        <tr>
                          <th>お問い合わせ種類</th>
                            <td class="modal-table__text"> {{ $contact->category->content ?? '未設定' }}</td>
                        </tr>
                        <tr>
                          <th>お問い合わせ内容</th>
                            <td class="modal-table__text">{{ $contact->detail }}</td>
                        </tr>
                      </table>
                    </div>
                    <div class="modal-delete-button">
                      <form action="{{ route('admin.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="modal-delete">削除</button>
                      </form>
                    </div>
                  </div>
                </div>
              </td>
          </tr>
        @endforeach
        <tr>
      </table>
    </div>
  </div>
@endsection
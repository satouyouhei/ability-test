@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
<form class="search-form">
  <form class="search-form" action="/admin/search" method="get">
  @csrf
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" name="keyword" value="{{ old('keyword') }}">
        <select class="search-form__item-select" name="category_id">
          <option value="">性別</option>
          <option name="{{$contacts['gender']}}" value="1">
          男</option>
          <option name="{{$contacts['gender']}}" value="2">女</option>
          <option name="{{$contacts['gender']}}" value="3">その他</option>
        </select>
      </div>
    <div class="search-form__button">
  <button class="search-form__button-submit" type="submit">検索</button>
</div>
</form>
<div class="paginate">{{$contacts->links()}}</div>
<div class="attendance__content">
  <div class="attendance-table">
    <table class="attendance-table__inner">
      <tr class="attendance-table__row">
        <th class="attendance-table__header">お名前</th>
        <th class="attendance-table__header">性別</th>
        <th class="attendance-table__header">メールアドレス</th>
        <th class="attendance-table__header">お問い合わせの種類</th>
        <th></th>

      </tr>
      @foreach($contacts as $contact)
      <tr class="attendance-table__row">
        <td class="attendance-table__item">{{$contact['last_name']}}{{$contact['first_name']}}</td>
        @if($contact['gender'] == 1)
        <td class="attendance-table__item">男</td>
        @elseif($contact['gender'] == 2)
        <td class="attendance-table__item">女</td>
        @else
        <td class="attendance-table__item">その他</td>
        @endif
        <td class="attendance-table__item">{{$contact['email']}}</td>
        @foreach($categories as $category)
        @if($contact['category_id'] == $category['id'])
        <td class="attendance-table__item">{{$category['content']}}</td>
        @endif
        @endforeach
        <td class="attendance-table__item"> 
          <form class="detail-form">
            <div class="detail-form__button">
              <button class="detail-form__button-submit" type="submit">詳細</button>
            </div>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
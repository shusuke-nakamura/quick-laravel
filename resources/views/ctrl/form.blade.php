@extends('layouts.base')
@section('title', 'フォームの基本')
@section('main')
    <form method="POST" action="/ctrl/result">
        @csrf
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" value="" />
        <input type="submit" value="送信" />
        <p>{{ $result }}</p>
    </form>
@endsection

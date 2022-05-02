@extends('layouts.base')
@section('title', 'フォームの基本')
@section('main')
    @if (session('alert'))
        <div class="alert">{{ session('alert') }}</div>
    @endif
    <form method="POST" action="/ctrl/result">
        @csrf
        <label for="name">名前：</label>
        <input type="text" name="name" id="name" value="{{ old('name', '') }}" />
        <input type="submit" value="送信" />
        <p>{{ $result }}</p>
    </form>
@endsection

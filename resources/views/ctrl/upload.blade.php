@extends('layouts.base')
@section('title', 'アップロードの基本')
@section('main')
    <form action="/ctrl/uploadfile" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="upfile" id="upfile" />
        <input type="submit" value="送信" />
        {{ $result }}
    </form>
@endsection

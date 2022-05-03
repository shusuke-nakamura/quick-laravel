@extends('layouts.base')
@section('title', '書籍情報フォーム')
@section('main')
    <form action="/save" method="post">
        @csrf
        <div class="pl-2">
            <label for="isbn">ISBNコード:</label><br />
            <input type="text" name="isbn" id="isbn" size="15" value="{{ old('isbn') }}" />
        </div>
        <div class="pl-2">
            <label for="title">書名:</label><br />
            <input type="text" name="title" id="title" size="30" value="{{ old('title') }}" />
        </div>
        <div class="pl-2">
            <label for="price">価格:</label><br />
            <input type="text" name="price" id="price" size="5" value="{{ old('price') }}" />
        </div>
        <div class="pl-2">
            <label for="publisher">出版社:</label><br />
            <input type="text" name="publisher" id="publisher" size="10" value="{{ old('publisher') }}" />
        </div>
        <div class="pl-2">
            <label for="published">刊行日:</label><br />
            <input type="text" name="published" id="published" size="10" value="{{ old('published') }}" />
        </div>
        <div class="pl-2">
            <input type="submit" value="送信" />
        </div>
    </form>
@endsection

@extends('layouts.base')
@section('title', '書籍情報 フォーム(編集)')
@section('main')
    <form action="/save/{{ $b->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="pl-2">
            <label for="isbn">isbnコード:</label><br />
            <input type="text" name="isbn" id="isbn" size="15" value="{{ old('isbn', $b->isbn) }}">
        </div>
        <div class="pl-2">
            <label for="title">書名:</label><br />
            <input type="text" name="title" id="title" size="30" value="{{ old('title', $b->title) }}" />
        </div>
        <div class="pl-2">
            <label for="price">価格:</label><br />
            <input type="text" name="price" id="price" size="5" value="{{ old('price', $b->price) }}" />
        </div>
        <div class="pl-2">
            <label for="publisher">出版社:</label><br />
            <input type="text" name="publisher" id="publisher" size="10" value="{{ old('publisher', $b->publisher) }}" />
        </div>
        <div class="pl-2">
            <label for="published">刊行日:</label><br />
            <input type="text" name="published" id="published" size="10" value="{{ old('published', $b->published) }}" />
        </div>
        <div class="pl-2">
            <input type="submit" value="更新" />
        </div>
    </form>
@endsection

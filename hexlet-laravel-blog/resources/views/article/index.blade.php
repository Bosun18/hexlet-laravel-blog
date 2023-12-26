@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <a href="{{route('articles.create')}}">Создать статью</a>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <small><a href="{{route('articles.edit', $article)}}">Редактировать статью</a></small><br>
        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Вы уверены?');"><br>
            @csrf
            @method('DELETE')
            <button type="submit">Удалить</button><br>
        </form>
    @endforeach
@endsection

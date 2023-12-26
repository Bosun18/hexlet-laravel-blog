@extends('layouts.app')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($article, ['route' => 'articles.store']) }}
        @include('article.form')
        {{ Form::submit('Сохранить') }}<br>
        {{ Form::label('name', 'Название') }}<br>
        {{ Form::text('name') }}<br>
        {{ Form::label('body', 'Содержание') }}<br>
        {{ Form::textarea('body') }}<br>
        {{ Form::submit('Создать') }}<br>
    {{ Form::close() }}
@endsection

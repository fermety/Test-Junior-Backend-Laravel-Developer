@extends('layouts.main')

@section('content')

@if (!$posts->isEmpty())
    @foreach ($posts as $post)
        <h1>{{ $post->id }}</h1>
    @endforeach
@else
    <h1>Пусто</h1>
@endif

@auth()
    <a class="nav-link" name="admin" href="{{ route('admin.main.index') }}" >Выйти</a>
@endauth
@guest()
    <a class="nav-link" name="admin" href="{{ route('admin.main.index') }}" >Войти</a>
@endguest

@endsection

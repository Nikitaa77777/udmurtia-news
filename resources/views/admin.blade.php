@extends('layouts.app')

@section('title', 'Админ-панель - Новости Удмуртии')

@section('content')
    <h1 class="mb-4" style="font-weight: 800;">Админ-панель</h1>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4">
                <h5 style="font-weight: 700;">Всего новостей</h5>
                <p class="display-6 mb-0" style="font-weight: 800;">{{ $totalNews }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4">
                <h5 style="font-weight: 700;">Опубликовано</h5>
                <p class="display-6 mb-0 text-success" style="font-weight: 800;">{{ $publishedNews }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4">
                <h5 style="font-weight: 700;">Черновиков</h5>
                <p class="display-6 mb-0 text-secondary" style="font-weight: 800;">{{ $draftNews }}</p>
            </div>
        </div>
    </div>

    <div>
        <a href="{{ url('/admin/news') }}" class="btn btn-primary me-2">Все новости</a>
        <a href="{{ url('/admin/news/create') }}" class="btn btn-outline-dark">+ Добавить новость</a>
    </div>
@endsection

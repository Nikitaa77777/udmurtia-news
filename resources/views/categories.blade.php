@extends('layouts.app')

@section('title', 'Категории - Новости Удмуртии')

@section('content')
    <h1 class="mb-4" style="font-weight: 800;">Категории новостей</h1>
    <p class="text-muted mb-4">Выберите раздел, чтобы посмотреть публикации по теме.</p>

    <div class="row g-4">
        @forelse($categories as $category)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 700;">{{ $category->name }}</h5>
                        <p class="card-text text-muted">
                            {{ $category->news_count }} {{ $category->news_count == 1 ? 'новость' : 'новостей' }}
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info">Категории пока не добавлены.</div>
            </div>
        @endforelse
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Главная - Новости Удмуртии')

@section('content')
    <h1 class="mb-4">Последние новости Удмуртии</h1>

    <div class="row">
        @forelse($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($item->image)
                        <img src="{{ asset('public/img/' . $item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->text, 100) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p class="text-muted">Пока нет новостей.</p>
            </div>
        @endforelse
    </div>
@endsection

@extends('layouts.app')

@section('title', 'Контакты - Новости Удмуртии')

@section('content')
    <h1 class="mb-4" style="font-weight: 800;">Контакты</h1>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="card-title" style="font-weight: 700;">Связаться с нами</h5>
                    <p class="card-text">
                        Если у вас есть вопросы, предложения или вы хотите сообщить новость — напишите нам.
                    </p>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><strong>Адрес:</strong> г. Ижевск, ул. Пушкинская 268</li>
                        <li class="mb-2"><strong>Телефон:</strong> +79501665533</li>
                        <li class="mb-2"><strong>Email:</strong> info@yandex.ru</li>
                        <li><strong>Режим работы:</strong> Пн-Пт, 9:00 - 18:00</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="card-title" style="font-weight: 700;">Напишите нам</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Ваше имя</label>
                            <input type="text" class="form-control" placeholder="Иван Иванов">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="example@mail.ru">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Сообщение</label>
                            <textarea class="form-control" rows="4" placeholder="Ваше сообщение..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

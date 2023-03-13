@extends('admin.layout')

@section('content')
    <div class="container-fluid">

            <div class="col-12">
                <table class="table table-hovered">
                    <thead>
                    <tr>
                        <th><b>Пользователь</b> <span class="badge badge-info">Ожидают верификацию</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forVerifications as $user)
                        <tr>
                            <td data-label="Ожидают верификацию">
                                <a href="{{ route('admin.users.edit', $user) }}">{{ $user->name }}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>


        <div class="col-12 mb-4">
            <table class="table table-hovered">
                <thead>
                <tr>
                    <th>Пакет</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                @foreach($deposits as $dep)
                    <tr>
{{--                        {{$dep}}--}}
                        <td data-label="Код">{{ $dep->name }}</td>
                        <td data-label="Пользователь">
                            <a href="{{ route('admin.users.edit', $dep->user) }}">{{ $dep->user->name }}</a>
                        </td>
                        <td data-label="Сумма">
                            {{ $dep->amount / 100000 }}
                            {{ $dep->currency }}
                        </td>
                        <td data-label="Статус">
                            @if($dep->status == \App\Deposit::STATUS_NOT_PAYED)
                                В ожидании оплаты
                            @elseif($dep->status == \App\Deposit::STATUS_PAYED)
                                Оплачено
                            @elseif($dep->status == \App\Deposit::STATUS_CANCELED)
                                Отменено
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
            <div class="col-12">
                <table class="table table-hovered">
                    <thead>
                        <tr>
                            <th>Код</th>
                            <th>Пользователь</th>
                            <th>Сумма</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($incomes as $income)
                        <tr>
                            <td data-label="Код">{{ $income->id }}</td>
                            <td data-label="Пользователь">
                                <a href="{{ route('admin.users.edit', $income->user) }}">{{ $income->user->name }}</a>
                            </td>
                            <td data-label="Сумма">
                                {{ $income->amount / 100000 }}
                                {{ $income->currency }}
                            </td>
                            <td data-label="Статус">
                                @if($income->status == \App\Income::STATUS_WAITING)
                                    В ожидании
                                @elseif($income->status == \App\Income::STATUS_SUCCESS)
                                    Обработано
                                @elseif($income->status == \App\Income::STATUS_ERROR)
                                    Ошибка
                                @elseif($income->status == \App\Income::STATUS_PAID_BY_USER)
                                    Оплачено
                                @elseif($income->status == \App\Income::STATUS_CANCELED)
                                    Отменено
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-12">
                <hr>
            </div>

        <table class="table">
            <thead>
            <tr>
                <th>Дата</th>
                <th>Значение</th>
                <th>Пользователь</th>
            </tr>
            </thead>
            <tbody>
            @forelse($tracking as $item)
                <tr>
                    <td>{{ $item->datetime }}</td>
                    <td>{{ $item->value }}</td>
                    <td>@if($item->user_id) <a href="{{ route('admin.users.edit', $item->user_id) }}">#{{ $item->user_id }}</a> @else - @endif</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Записей нет</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection

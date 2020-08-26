@extends('layout')

@section('content')
    <table border="1" width="100%" cellpadding="0" class="text-center">
        <tr>
            <td>Фамилия</td><td>{{ $person->lastname }}</td>
        </tr>
        <tr>
            <td>Имя</td><td>{{ $person->firstname }}</td>
        </tr>
        <tr>
            <td>СНИЛС</td><td>{{ $person->snils }}</td>
        </tr>
        <tr>
            <td>Пол</td><td>{{ $person->sex }}</td>
        </tr>
        <tr>
            <td>Дата рождения</td><td>{{ $person->birthdate }}</td>
        </tr>
        <tr>
            <td>Страна гражданства</td><td>{{ $person->country->name }}</td>
        </tr>
        <tr>
            <td>Состояние здоровья</td><td>{{ $person->healthStatus->name }}</td>
        </tr>
        <tr>
            <td>С отцом</td><td>{{ $person->with_father ? 'Да' : 'Нет' }}</td>
        </tr>
        <tr>
            <td>С матерью</td><td>{{ $person->with_mother ? 'Да' : 'Нет' }}</td>
        </tr>
        <tr>
            <td>Профессия</td><td>{{ $person->speсiality }}</td>
        </tr>
        <tr>
            <td>Комментарий</td><td>{{ $person->description }}</td>
        </tr>
        <tr>
            <td>Телефоны</td>
            <td>
                <table border="1" width="100%" cellpadding="0" class="text-center">
                    <th>Номер</th>
                    <th>Тип</th>
                    @foreach($phones as $phone)
                        <tr>
                            <td>{{ $phone->number }}</td>
                            <td>{{ $phone->phoneType->type }}</td>
                        </tr>
                    @endforeach

                </table>
            </td>
        </tr>
    </table>
    <div class="row justify-content-end m-2">
        <div class="col-1">
            <a href="{{ route('people.edit', [ 'person' => $person->id]) }}" class="btn btn-primary">Изменить</a>
        </div>
        <div class="col-1">
            <form class="d-inline" method="POST" action="{{ route('people.destroy', ['person' => $person->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary">Удалить!</button>
            </form>
        </div>
    </div>
@endsection

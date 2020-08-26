@extends('layout')

@section('content')
    <table border="1" width="100%" cellpadding="0" class="text-center">
        <tr>
            <th>Имя и фамилия</th>
            <th>Дата рождения</th>
            <th colspan="2">Действия</th>
        </tr>
        @forelse($people as $person)
            <tr style="height: 35px">
                <td>
                    <a href="{{ route('people.show', [ 'person' => $person->id]) }}">{{ $person->firstname }} {{ $person->lastname }}</a>
                </td>
                <td>{{ $person->birthdate }}</td>
                <td><a href="{{ route('people.edit', [ 'person' => $person->id]) }}" class="btn btn-primary p-0">Изменить</a>
                </td>
                <td>
                    <form class="d-inline" method="POST" action="{{ route('people.destroy', ['person' => $person->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary p-0">Удалить!</button>
                    </form>
                </td>
            </tr>
        @empty
            <div>Нет пациентов</div>
        @endforelse
    </table>
@endsection

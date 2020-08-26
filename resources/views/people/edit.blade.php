@extends('layout')

@section('content')
    <form method="POST" action="{{ route('people.update', ['person' => $person->id]) }}">
        @csrf
        @method('PUT')

        @include('people._form')

        <button type="submit" class="btn btn-primary btn-block">Изменить!</button>
    </form>
@endsection

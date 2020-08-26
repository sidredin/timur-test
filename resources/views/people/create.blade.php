@extends('layout')

@section('content')
    <form method="POST" action="{{ route('people.store') }}">
        @csrf

        @include('people._form')

        <button type="submit" class="btn btn-primary btn-block">Добавить!</button>
    </form>
@endsection

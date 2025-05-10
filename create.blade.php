@extends('layout')

@section('content')
    <h2>Add New Employee</h2>

    <form method="POST" action="{{ route('employees.store') }}">
        @csrf
        @include('employees.form')
        <!-- <button type="submit">Save</button> -->
    </form>
@endsection

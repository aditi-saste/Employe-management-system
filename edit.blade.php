@extends('layout')

@section('content')
    <h2>Edit Employee</h2>

    <form method="POST" action="{{ route('employees.update', $employee->id) }}">
        @csrf
        @method('PUT')
        @include('employees.form', ['employee' => $employee])
        <button type="submit">Update</button>
    </form>
@endsection

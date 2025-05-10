@extends('layout')

@section('content')
    <h2>Employee List</h2>
   
    <button onclick="window.location.href='{{ route('employees.create') }}'">Add Employee</button>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th><th>Email</th><th>Phone</th>
            <th>Department</th><th>Position</th><th>Salary</th><th>Actions</th>
        </tr>
        @foreach ($employees as $emp)
            <tr>
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->phone }}</td>
                <td>{{ $emp->department }}</td>
                <td>{{ $emp->position }}</td>
                <td>Rs.{{ $emp->salary }}</td>
                <td>
                <button onclick="window.location.href='{{ route('employees.edit', $emp->id) }}'">Edit</button>
       
                    <form action="{{ route('employees.destroy', $emp->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

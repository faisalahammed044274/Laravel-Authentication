@extends('layouts.master');

@section('content')
    <table>
        <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Registration</th>
            <th>Department Name</th>
            <th>Info</th>
            <th>Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->registration_id }}</td>
                <td>{{ $student->department_name }}</td>
                <td>{{ $student->info }}</td>
                <td>
                    <a href="{{ route('edit', $student->id) }}" class="btn btn-success">Edit</a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection

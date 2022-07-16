@extends('layouts.master');

@section('content')
    {{-- <table>
        <tr>
            <th>SI</th>
            <th>Name</th>
            <th>Registration</th>
            <th>Department Name</th>
            <th>Info</th>
            <th>Action</th>
        </tr>
        @php $i = 0; @endphp
        @foreach ($students as $student)
            @php $i++ @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->registration_id }}</td>
                <td>{{ $student->department_name }}</td>
                <td>{{ $student->info }}</td>
                <td>
                    <a href="{{ route('edit', $student->id) }}" class="btn btn-success">Edit</a>
                    <hr>
                    <form class="form-inline" action="{{ route('delete', $student->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach

    </table> --}}

    @if (Auth::check())
        <div class="alert alert-success">
            ||---
            Form : {{ Auth::user()->address->street }} ---||---
            User : {{ Auth::user()->name }} ---||---
            User Email : {{ Auth::user()->email }}
            ---||
        </div>
    @endif

    @foreach ($posts as $post)
        <hr class="divideHr">
        <div class="panel panel-default">
            <div class="panel-body" style="margin: 30px">
                <h3>{{ $post->title }}</h3>
                <p>
                    on {{ $post->category->name }} Category,
                    <br>
                    Posted by {{ $post->user->name }}
                </p>
                <hr>
                <div class="">
                    {!! $post->description !!}
                </div>
            </div>
        </div>
    @endforeach
@endsection

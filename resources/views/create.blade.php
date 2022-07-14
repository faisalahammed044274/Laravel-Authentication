@extends('layouts.master');
@section('title')
    Create Student | Student Management
@endsection
@section('content')
    <h2>Create New Student</h2>

    <form action="{{ route('store') }}" method="post">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <small>
                            <li>{{ $error }}</li>
                        </small>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ csrf_field() }}
        <div class="form-group">
            <label for="control-label col-sm-2" for="name">Name :</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="control-label col-sm-2" for="registration_id">Registration No :</label>
                <div class="col-sm-10">
                    <input type="number" name="registration_id" id="registration_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="control-label col-sm-2" for="department_name">Department :</label>
                    <div class="col-sm-10">
                        <input type="text" name="department_name" id="department_name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="control-label col-sm-2" for="department_name">Info :</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="info" name="info" rows="3"></textarea>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Register Student</button>
                    </div>
                </div>

    </form>
@endsection

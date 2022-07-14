@extends('layouts.master');
@section('title')
    Update Student | Student Management
@endsection
@section('content')
    <h2>Update Student Data</h2>

    <form action="{{ route('update', $student ?? ('' ?? '')) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="control-label col-sm-2" for="name">Name :</label>
            <div class="col-sm-10">
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}">
            </div>
            <div class="form-group">
                <label for="control-label col-sm-2" for="registration_id">Registration No :</label>
                <div class="col-sm-10">
                    <input type="number" name="registration_id" id="registration_id" class="form-control"
                        value="{{ $student->registration_id }}">
                </div>
                <div class="form-group">
                    <label for="control-label col-sm-2" for="department_name">Department :</label>
                    <div class="col-sm-10">
                        <input type="text" name="department_name" id="department_name" class="form-control"
                            value="{{ $student->department_name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="control-label col-sm-2" for="department_name">Info :</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="info" name="info" rows="3">{!! $student->info !!}</textarea>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Update Student</button>
                    </div>
                </div>

    </form>
@endsection

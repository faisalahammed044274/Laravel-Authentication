@extends('layouts.app')

@section('content')
    <div class="container" style="background: green; color:whitesmoke; padding:3rem; border-radius:12px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach (Auth::user()->posts as $post)
                    <hr style="background:red; border:2px solid red;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                on {{ $post->category->name }} Category,
                                Posted by {{ $post->user->name }}
                            </p>
                            <hr>
                            <div class="">
                                {!! $post->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

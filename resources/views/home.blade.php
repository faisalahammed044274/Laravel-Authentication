@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- @if (Auth::check())
                    <div class="alert alert-success">
                        Form - {{ Auth::user()->address->street }}
                    </div>
                @endif

                @foreach ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                in {{ $post->category->name }}
                                by {{ $post->user->name }}
                            </p>
                            <div class="">
                                {!! $post->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>
@endsection

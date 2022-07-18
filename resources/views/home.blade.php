@extends('layouts.app')

@section('content')
    <div class="container" style="background: green; color:whitesmoke; padding:3rem; border-radius:12px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 card-body">
                @foreach (Auth::user()->posts as $post)
                    <div class="card panel-default" style="margin: 10px;">
                        <div class="card-body" style="background: #81ff81; color:#5c5c5c;">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                on {{ $post->category->name }} Category,
                                Posted by {{ $post->user->name }}
                            </p>
                            <hr>
                            <div class="">
                                @foreach ($post->images as $image)
                                    <img style="width: 80px; height:80px;" src="/images/{{ $image->image }}"
                                        alt="PostImage">
                                @endforeach
                                <br>
                                {!! $post->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

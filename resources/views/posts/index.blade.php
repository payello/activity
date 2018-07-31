@extends('layouts.master')
@section('content')



    <div class="col-sm-8 blog-main">
        <div class="row">
            @if(session('status'))
                <div class="alert alert-success">
                    <p>{{ session('status') }}</p>
                </div>
            @endif
            @foreach($posts as $post)
                @include('posts.post')
            @endforeach

        </div>
    </div>
@endsection

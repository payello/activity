@extends('layouts.master')
@section('content')

<div class="col-sm-8 blog-main">
<div class="row">
@foreach($posts as $post)
    @include('posts.post')
@endforeach

      </div>

        </div>
@endsection

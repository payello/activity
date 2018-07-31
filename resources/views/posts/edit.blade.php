@extends('layouts.master')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
    <div class="col-md-8 blog-main">
        @if(Auth::check())
            <h1>Edit the Activity Holiday</h1>

            <hr>

            {!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT', 'files'=>true]) !!}
            {{Form::label('title', 'Title:') }}
            {{Form::text('title', null, ["class"=> 'form-control']) }}

            {{ Form::label('body', "Body: ", ['class'=>'form-spacing-top']) }}
            {{ Form:: textarea('body', null, ['class'=>'form-control']) }}

            {{ Form::label('countries', 'Country: ')}}
            {{ Form::select('countries[]', $countries, null ,['class'=>'form-control select2-single']) }}

            {{--<label for="countries">Country:</label>--}}
            {{--<select name="countries[]" id="" class=""></select>--}}
            {{ Form::label('activities', 'Activities: ', ['class'=>'form-spacing-top']) }}
            {{ Form::select('activities[]', $activities, null, ['class'=>'form-control select2-multi', 'multiple'=>'multiple']) }}


            {{ Form::label('image', 'Change Image', ['class'=>'form-spacing-top']) }}
            {{ Form::file('image') }}

            {{ Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger'))}}

            {{ Form:: submit('Save Changes', ['class'=>'btn btn-success']) }}


            {!! Form::close() !!}
    </div>

    {{--<form method="POST" action="/posts/{{ $post->id }}" enctype="multipart/form-data">--}}

        {{--{{ csrf_field() }}--}}
        {{--{{ method_field('PATCH') }}--}}
        {{--<div class="form-group">--}}
            {{--<label for="title">Title</label>--}}
            {{--<input name="title" type="text" class="form-control" value="{{ $post->title }}" required>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="description">Description</label>--}}
            {{--<input name="description" type="text" class="form-control"--}}
                   {{--value="{{ $post->title }}" required>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
            {{--<label for="activities">Activities:</label>--}}
            {{--<select name="activities[]" class="form-control select2-single"--}}
                    {{--value="{{ old($post->activity->activity_name) }}" id="">--}}
                {{--@foreach($activities as $activity)--}}
                    {{--<option value="{{ $activity->id }}">{{ $activity->activity_name }}</option>--}}
            {{--</select>--}}
            {{--@endforeach--}}
        {{--</div>--}}

        {{--<div class="form-group">--}}

            {{--<button type="submit" class="btn btn-primary">Update</button>--}}

        {{--</div>--}}

    {{--</form>--}}
    @endif

    @include('layouts.errors')



    @if(Auth::guest())
        <a href="/login" class="btn btn-info">You must login to make amendments</a>
    @endif

@endsection

@section('scripts')
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2-multi').select2();
        });

        $(document).ready(function () {
            $('.select2-single').select2();
        });
    </script>
@endsection

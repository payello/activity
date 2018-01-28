@extends('layouts.master')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}
@endsection


@section('content')




    <div class="col-md-8 blog-main">
        @if(Auth::check())
            <h1>Create new Trip</h1>

            <hr>
            <div class="form-group">


                {!!Form::open(['action' => 'PostController@store','method' => 'POST', 'class'=>'form-group', 'files'=>true])!!}
                {{Form::bsText('title','',['placeholder' => 'Trip Name','class'=>'form-control'])}}
                <br>
                {{Form::bsTextarea('body','',['placeholder' => 'Trip Description', 'class'=>'form-control'])}}

            </div>
            {{Form::label('country_id', 'Country: ')}}
            <select class="form-control" name="country_id">
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->countryname}}</option>
                @endforeach
            </select>

            {{ Form::label('activities', 'Activity:')}}
            <select class="form-control select2-multi" name="activities[]" multiple="multiple">
                @foreach($activities as $activity)
                    <option value="{{ $activity->id }}">{{ $activity->activity_name}}</option>
                @endforeach

            </select>
            {{ Form::label('image', 'Upload image: ')}}
            {{ Form::file('image') }}



            {{Form::bsSubmit('Create Post', ['class'=>'btn btn-primary ']) }}


            {!! Form::close() !!}

            <script type="text/javascript">
                $('.select2-multi').select2();
            </script>


        @endif
        @include('layouts.errors')
    </div>

    @if(Auth::guest())
        <a href="/login" class="btn btn-info">You must login to make amendments</a>
    @endif



@endsection

@section('scripts')
    {{--check that this is the correct syntax for adding a script in Laravel--}}
    <script src="{{ URL::to('js/select2.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection
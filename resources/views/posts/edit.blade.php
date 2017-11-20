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

  {{ Form::label('activities', 'Activities: ', ['class'=>'form-spacing-top']) }}
  {{ Form::select('activities[]', $activities, null, ['class'=>'form-control select2-multi', 'multiple'=>'multiple']) }}

  {{Form::label('countries', 'Country: ')}}
  {{ Form::select('countries[]', $countries, null,['class'=>'form-control']) }}

  {{ Form::label('image', 'Change Image', ['class'=>'form-spacing-top']) }}
  {{Form::file('image')}}

  {{ Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger'))}}

{{Form:: submit('Save Changes', ['class'=>'btn btn-success'] )}}


{!! Form::close() !!}
</div>

@endif
@include('layouts.errors')
</form>


@if(Auth::guest())
<a href="/login" class="btn btn-info">You must login to make amendments</a>
@endif

@endsection

@section('scripts')
{!! Html::script('js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($post->activities()->allRelatedIds()) !!}).trigger('change');
@endsection

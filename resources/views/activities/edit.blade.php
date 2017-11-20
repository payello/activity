@extends('layouts.master')

@section('content')
<div class="col-md-8">
<div class="form-group">

{!! Form::model($activity, ['route'=>['activities.update', $activity->id], 'method'=>'PUT']) !!}
  {{Form::label('activity_name', 'Title:') }}
  {{Form::text('activity_name', null, ["class"=> 'form-control']) }}

{{Form:: submit('Save Changes', ['class'=>'btn btn-success'] )}}


{!! Form::close() !!}
</div>
</div>
@endsection

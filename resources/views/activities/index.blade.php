@extends('layouts.master')

@section('content')
<div class="col-md-8">


<h2>Activities</h2>

<div class="well">
  {!! Form::open(['route' => 'activities.store', 'method'=>'POST'])
!!}
  <h3>New Activity</h3>
  {{ Form::label('activity_name', 'Name:') }}
  {{ Form::text('activity_name', null, ['class'=>'form-control']) }}

  {{Form:: submit('Create new Activity', ['class'=>'btn btn-primary'])}}

  {!! Form::close() !!}

</div>
<div class="well">


<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th></th>

    </tr>
  </thead>
<tbody>
  @foreach($activities as $activity)
  <tr>
    <th>{{$activity->id}}</th>
    <td><a href=" {{ route('activities.show', $activity->id) }}">{{$activity->activity_name}}</a></td>
    <td><a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-primary btn-xs">EDIT</a></td>


  </tr>
  @endforeach
</tbody>
</table>
</div>
</div>
@endsection

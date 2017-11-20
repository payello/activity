@extends('layouts.master')

@section('content')

<div class="col-md-8">
<div class="form-group">



  <h1>{{ $activity->activity_name}} - <small>{{$activity->posts()->count()}} POSTS</small></h1>
  <div class="row">

  <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-primary">EDIT</a>


    {{ Form::open(['route'=> ['activities.destroy', $activity->id], 'method'=>'DELETE']) }}
      {{Form::submit('Delete', ['class'=>'btn btn-danger']) }}
    {{Form::close() }}

  </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Activity</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($activity->posts as $post)
      <tr>
        <th>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>@foreach($post->activities as $activity)
              <span class="label label-default">{{$activity->activity_name}}</span>
            @endforeach
        </td>
        <td><a href="{{route('posts.show', $post->id) }}" class="btn btn-primary btn-xs">VIEW</a></td>
      </tr>
      @endforeach
    </tbody>

  </table>
</div>


@endsection

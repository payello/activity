@extends('layouts.master')


@section('content')
<div class="col-sm-8 blog-main">
  <div class="row">
    <div class="col-sm-5">
      <h1>{{$post->title}}</h1>
    </div>


    <div class="well col-sm-2 col-sm-offset-2">

      <img height="60" src="{{$post->countries->countrycode}}" alt="">
        <caption>{{ $post->countries->countryname }}</caption>
    </div>


  </div>


        {{$post->body}}

        <hr>
          @if (count($post->activities))
              @foreach ($post-> activities as $activity)
                <span class="label label-default">{{$activity->activity_name}}</span>
              @endforeach

          @endif


        <hr>


@if(Auth::check())
<div class="row">


          <a href="{{ "/posts/".$post->id."/edit"}}" >

            <button type="submit" name="button" class="btn-spacing btn btn-primary">
              Edit this trip
            </button>
          </a>

        <div class="blockquote">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'data-id'=>'$post->id']) !!}

        </div>
</div>
            {!! Form::close() !!}
@else()
@endif

<div>
  <img class="img img-thumbnail" src="{{asset('images/'.$post->image)}}" height="400" width="800 "alt="{{$post->title}}">
</div>
<hr>

    <div class="comments">
        <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{$comment->created_at->diffForHumans()}}:&nbsp;
                </strong>
                {{$comment->body}}
            </li>
        @endforeach
        </ul>
    </div>

@if(Auth::check())
           <div class="card-block">
              <form method="POST" action="/posts/{{ $post-> id}}/comments">
                  {{csrf_field()}}
                  <div class="form-group">

                      <textarea name="body" class="form-control" required placeholder="Enter your comment" cols="30" rows="10"></textarea>

                      <button type="submit" class="btn btn-primary">Add your comment</button>
                  </div>
              </form>
          @include('layouts.errors')
           </div>
           @else
           <div class="alert alert-info">
             <p>To create comments, please log in or create an account.</p>

           </div>
           @endif
</div>
@endsection
@section('scripts')
<script type="text/javascript">

$(document).on('click', '.button', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    swal({
            title: "Are you sure!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                type: "POST",
                url: "{{url('/destroy')}}",
                data: {id:id},
                success: function (data) {
                              //
                    }
            });
    });
});
</script>
@endsection

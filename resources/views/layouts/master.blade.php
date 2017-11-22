
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peter's Travel Site</title>

    <!-- Bootstrap core CSS -->
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css')}}" rel="stylesheet" />
    <link href="{{('https://fonts.googleapis.com/css?family=Roboto')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/app.css')}}">
    {!! Html::style('/css/select2.min.css') !!}
    <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.8.0/sweetalert2.min.css')}}" rel="stylesheet" />


      @yield('stylesheets')
  </head>
<body>

@include('layouts.nav')

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Peter's Travel Site</h1>
        <p class="lead blog-description">A blog guide to activity travel sites in Europe.</p>
      </div>
    </div>
<hr>


    <div class="container">
        <div class="row">
            @yield('content')

            @include('layouts.sidebar')
        </div>

    </div>
    @include('layouts.footer')
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.8.0/sweetalert2.common.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

@yield('scripts')





</body>


</html>

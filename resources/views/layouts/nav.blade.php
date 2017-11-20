<div class="blog-masthead">
   <div class="container">
     <nav class="nav blog-nav">
       <ul>

       </ul>
       <a class="nav-link active" href="/">Home</a>
       <a class="nav-link" href="/about">About</a>

 <!-- Authentication Links -->
    @if (Auth::guest())

       <a class="nav-link" href="{{ route('login') }}">Login</a>
       <a class="nav-link" href="{{ route('register') }}">Register</a>
     @else

      <a class="nav-link" href="/posts/create">Add new Trip</a>
      <a class="nav-link" href="/activities/">Add  Activity</a>
      <a class="nav-link" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      Logout
      </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
<div class="ml-auto nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
          <a href="/" id="dropdown01" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
       <a class="dropdown-item" href="{{route('posts.index')}}">Posts</a>
       <a class="dropdown-item" href="{{route('activities.index') }}">Activities</a>
       <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">Logout</a>
       </div>
    </li>
</div>
  @endif


     </nav>
   </div>
 </div>

<div class="col-md-3 offset-md-1 blog-sidebar">

<div class="sidebar-module">
  <h4>Activities</h4>
  <ul>
    @foreach($activities as $activity)
    <li>
      <a href="/activities/{{$activity->id}}/activity">
        {{$activity->activity_name}}
      </a>
    </li>
    @endforeach
  </ul>
</div>



          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Hello, My name is <a href="www.peterayellowright.co.uk">Peter Ayello-Wright</a>, I am a Wordpress, php and Python developer. This is my php Laravel Project. I love going on adventures so I have made a dynamic blog to show different activity holidays. It is has a MySQL database, using the Laravel framework. You can add new adventures once you have registered your email and logged in.</p>
          </div>
        <div class="sidebar-module">
          <p>See the links below for more information about me!</p>
        </div>


          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://github.com/payello" target="_blank">GitHub</a></li>
              <li><a href="https://www.linkedin.com/in/peterayellowright" target="_blank">LinkedIn</a></li>
            </ol>
          </div>
</div><!-- /.blog-sidebar -->

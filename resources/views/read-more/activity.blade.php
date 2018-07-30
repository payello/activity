@include('frontend.header')

@section('title')
    Peter's Activity Holiday Site
@endsection
    <body class="home page-template-default page">
        <header>
            <!-- Header -->
            <section id="header">
                <header class="container">
                    <div class="fixed-top row topbar">
                        <div id="logo" class="col-md-2 col-sm-2">
                            <a href="/">
                                <h3><span class="initial">PAW</span></h3>
                            </a>
                        </div>
                        <!-- Nav Bar -->
                        <div class="container-fluid">
                            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                                <a class="navbar-brand" href="#"><span class="PAW-logo">PAW</span></a>
                                <button class="navbar-toggler"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#navbarCollapse"
                                        aria-controls="navbarCollapse"
                                        aria-expanded="false"
                                        aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarCollapse">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#About">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#Projects">Projects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#Experience">Experience</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#contact">Contact</a>
                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                </header>
            </section>
        </header>
        <div class="landing-activity container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1>Activity Holiday Site</h1>
                    <div>
                        <h4>What I made...</h4>
                        <a href="/travel" target="_blank">
                            <button class="btn btn-default">Go to the project!</button>
                        </a>
                        <p>This site was made using PHP's framework, Laravel.</p>
                        <p>The idea of this site was to create an informative website showing activity holidays.</p>
                        <p>I created a user authentication section where users can register their email address with a password,
                            and log in as a user, this allows them to:</p>
                        <ul>
                            <li>Add and edit activities.</li>
                            <li>Create new trips, add photos and select the country of the trip, as well as the ability to edit
                                and delete the trip.
                            </li>
                            <li>Add Comments to each page, showing the users name and date when the comment was added.</li>
                        </ul>
                        <p>With the user authentication, a user can still view posts, comments, and activities but cannot add,
                            edit or delete</p>
                        <p>Both user and member can view all the trips by activity but only the member can edit or delete at
                            this area.</p>
                        <p>The site features validation to ensure that the site runs well for all.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="travel/posts/6"><img width="600px" height="auto"
                                                  src="{{ asset('images/portfolio/ActivityHoliday.png') }}" alt="Laravel Site"></a>
                    <caption class="text-center">A screenshot showing the view of a cycling holiday.</caption>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4>Techie stuff</h4>
                    <p>This site is deployed on the LEMP stack - Linux, Nginx, MySQL and PHP.</p>
                    <p>The site is hosted on VPS by Vultr that runs on the Ubuntu OS.</p>
                    <p>Laravel is an open-source MVC web framework that uses the PHP language. It assists the user to write
                        object orientated code so that the code is readable and concise.</p>
                    <p>One of my favourite features of the Laravel framework is the blade templating agent that ensures you can
                        write DRY code (Don't Repeat Yourself), meaning that you can make templates of front-end code so that
                        alleviates repetition in areas that are consistent throughout your site, e.g. navbars, head, and
                        scripts.</p>
                    <p>The site is connected to a MySQL database and uses one-to-many relationships and many to many
                        relationships.</p>
                    <p>I deployed the site to a VPS server using Git and enjoyed the benefits of working with Git in
                        problem-solving scenarios.</p>
                    <p>I also learned about permissions from within a Linux server perspective when adding the images to the
                        site's directory.</p>
                    <p>The site is simplistic in its front-end and uses the bootstrap framework to give a simple look and
                        usability.</p>
                    <p>I used small amounts of JQuery and JavaScript in order to implement the Select2 replacement for select
                        boxes.</p>
                    <h4>Skills Learnt</h4>
                    <i title="Laravel" class="mfizz icon-laravel"></i>
                    <i title="Ubuntu" class="mfizz icon-ubuntu"></i>
                    <i title="NGinx" class="mfizz icon-nginx"></i>
                    <i title="MySQL" class="mfizz icon-mysql"></i>
                    <i title="PHP" class="mfizz icon-php"></i>
                    <i title="Bootstrap" class="mfizz icon-bootstrap"></i>
                    <i title="Git" class="mfizz icon-git"></i>
                    <i title="JQuery" class="mfizz icon-jquery"></i>
                </div>
                <div class="col-md-6">
                    <a href="travel/register" target="_blank">
                        <img width="600px" height="auto"
                             src="{{ asset('images/portfolio/ActivityHolidayRegister.png') }}"
                             alt="Register User"></a>
                    <caption>The shows the user register page for the site.</caption>
                    <a href="travel/posts/create" _target="_blank">
                        <img width="600px" height="auto"
                             src="{{ asset('images/portfolio/Activity-Create.png') }}"
                             alt="Create Trip"></a>
                    <caption>This shows the form to add an activity</caption>
                </div>
            </div>
            <div>

            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <div class="card card-outline-primary mb-3 text-center">

                    <div class="card-block">
                        <div class="footer-code-logos">
                            <div>
                                <a href="https://www.linkedin.com/in/peterayellowright/" target="_blank">
                                    <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                            </div>
                            <div>
                                <a href="https://github.com/payello/" target="_blank">
                                    <i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
                            </div>
                            <div>
                                <a href="mailto:peter.ayellowright@gmail.com">
                                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <p class="text-center">Peter Ayello Wright &copy;2017.</p>
                    </div>
                </div>
            </div>
        </footer>


    <script src="https://use.fontawesome.com/98a3d38fec.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="transitions.js" type="text/javascript"></script>
    </body>
</html>
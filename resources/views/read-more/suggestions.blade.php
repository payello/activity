@include('frontend.header')

@section('title')
    Band website
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
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="http://www.peterayellowright.co.uk/#About">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://www.peterayellowright.co.uk/#Projects">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                       href="http://www.peterayellowright.co.uk/#Experience">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="http://www.peterayellowright.co.uk/#contact">Contact</a>
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
            <h1>My Band's Website</h1>
            <br>
            <div>
                <h4>What I made</h4>
                <p>This is the site to advertise the soul and funk band that I play bass guitar with.</p>
                <p>This site is designed to be a simple marketing site that can help us get gigs.</p>
                <p>It uses the Instagram API so that the pictures are updated dynamically within the media page.</p>
                <p>So, for this reason, I used JQuery to run the API and embed the photos and text within that page.</p>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <a href="thesuggestions.co.uk"><img width="600px" src="{{ asset('images/portfolio/SuggestAbout.png') }}" alt="Suggestions About"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h4>Skills Learnt</h4>
            <div class="text-center">

                <i title="JavaScript" class="mfizz icon-javascript-alt"></i>
                <i title="Bootstrap" class="mfizz icon-bootstrap"></i>
                <i title="HTML5" class="mfizz icon-html5-alt"></i>
                <i title="CSS3" class="mfizz icon-css3-alt"></i>
            </div>
            <div class="text-center">
                <a href="http://thesuggestions.co.uk/">
                    <button class="btn btn-default">Go to this project</button>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <a href="http://thesuggestions.co.uk">
                <img width="600px" src="{{ asset('images/portfolio/SuggestPhoto.png') }}" alt="Suggestions photos">
            </a>
        </div>
    </div>

</div>
</body>
</html>
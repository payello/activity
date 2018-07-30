@include('frontend.header')

@section('title')
    Born to be Beautiful
@endsection

<body class="home page-template-default page">
<header>
    <!-- Header -->
    <section id="header">
        <header class="container">
            <div class="fixed-top row topbar">
                <div id="logo" class="col-md-2 col-sm-2">
                    <a href="">
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
            <h1>Charity Volunteering</h1>
            <br>
            <div>
                <h4>What is it?</h4>
                <p>Born to be Beautiful is a charity based in Cambridge that trains women in India, Sierra Leone and
                    Uganda in beauty therapy.</p>
                <p>The training assists women to become independent and give them a career.</p>
                <p>The Indian training scheme works with Bollywood so that in the future graduates from the classes can
                    be given a career as a makeup artist in film.</p>
                <p>I came across this charity on do-it.org when I wanted to do some voluntary work and they needed help
                    with the development of their WordPress site.</p>
                <p>I go to the office once a week to help out and do some work for them whenever I have time</p>
            </div>
        </div>
        <div class="shot col-md-6 col-sm-12">
            <a href="http://peterayellowright.co.uk/b2bb.html">
                <img src="{{ asset('portfolio/images/b2bb_image1.png') }}" width="600px" alt="Born to be Beautiful Site">
            </a>
            <caption>An image of the charity's embedded magazine .</caption>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h4>Techie Stuff</h4>
            <p>The site is built using WordPress so it was a great experience to learning about a working site.</p>
            <p>I am responsible for updating and upgrading content and adding new pages.</p>
            <p>I have gained experience working with plugins and regularly enjoy improving the site's usability.</p>
            <br>
            <h4>In the future</h4>
            <p>We have had problems with the speed of the site.</p>
            <p>The site is built with PHP5 - updating it to PHP7 would double the speed. Knowing the risk of undertaking
                this, I plan to create a new custom template and modernise the site.</p>
            <h4>Skills Learnt</h4>
            <div class="text-center">
                <i title="WordPress" class="mfizz icon-wordpress"></i>

                <i title="CSS3" class="mfizz icon-css3-alt"></i>
            </div>
            <div class="text-center">
                <a href="http://borntobebeautiful.org">
                    <button class="btn btn-default">Go to this project</button>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">

            <a href="">
                <img src="{{ asset('images/portfoliob/2bb_image2.png') }}" alt="Born to be Beautiful">
            </a>
            <caption class="text-center">The latest India visit where volunteers went to assist train the lad.</caption>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="card card-outline-primary mb-3 text-center">

            <div class="card-block">
                <div class="footer-code-logos">
                    <div>
                        <a href="https://www.linkedin.com/in/peterayellowright/">
                            <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                    <div>
                        <a href="https://github.com/payello/">
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
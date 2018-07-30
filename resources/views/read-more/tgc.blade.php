@include('frontend.header')

@section('title')
    The Good Cards
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
            <h1>Remote Charity Volunteering</h1>
            <br>
            <div>
                <h4>What is it?</h4>
                <p>Better World International is an international charity based in California</p>
                <p>Their aim is to spread good deeds and happiness through their product "The Good Cards", which is an
                    IoT card game that challenges people to do good and encourage others to do so too.</p>
                <p>I worked with the charity building WordPress landing pages using the divi theme with A/B testing to
                    increase web traffic during their Kickstarter campaign.</p>
                <p>I came across this charity through do-it.org</p>
            </div>
        </div>
        <div class="shot col-md-6 col-sm-12">
            <a href="https://thegoodcards.com"><img src="/images/Mobile_Card.png" width="600px"
                                                                    alt="The Good Cards"></a>
            <caption>The Good Card product with the mobile app.</caption>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h4>Techie Stuff</h4>
            <p>I worked remotely building sites from png images that were compiled by their graphic designers.</p>
            <p>I would present the Google Analytics data at the weekly team meeting.</p>
            <p>I gained good experience building sites quickly and using css to ensure the sites are responsive and
                matching the designer's spec</p>
            <p>It was great experience working with project management tools such as trello and working with a start-up
                environment.</p>
            <h4>Skills Learnt</h4>
            <div class="text-center">
                <i title="WordPress" class="mfizz icon-wordpress"></i>

                <i title="CSS3" class="mfizz icon-css3-alt"></i>
            </div>
            <div class="text-center">
                <a href="https://thegoodcards.com">
                    <button class="btn btn-default">Go to this project</button>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="row">
                <a href=""><img src="images/GC_Mobile.png" alt="Born to be Beautiful"></a>
            </div>
            <caption class="text-center">Using the Good Card app.</caption>
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
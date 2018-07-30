@include('frontend.header')

@section('title')
    Peter's Forex Site
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
                        <a class="navbar-brand" href="/"><span class="PAW-logo">PAW</span></a>
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
            <h1>Currency Converter Site</h1>
            <br>
            <div>
                <h4>What I made</h4>
                <p>This site was made to learn how to use JavaScript with APIs, Ajax, and JSON</p>
                <p>I created a currency converter that is dynamically updated daily from an API.</p>
                <p>I used AJAX on the forms so that the search is more intuitive.</p>
                <p>I also created a list of currency rates from the API that I used in order to show what is
                    available.</p>
            </div>
        </div>
        <div class="shot col-md-6 col-sm-12">
            <a href="/currencyConverter" target="_blank">
                <img src="{{ asset('/images/portfolio/CurrencySite.png') }}"
                     width="600px"
                     alt="Currency Site">
            </a>
            <caption>This is the select2 form that I used in order to create and show the forex calculations.</caption>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h4>Techie Stuff</h4>
            <p>This site uses vanilla JavaScript so it doesn't use a framework.</p>
            <p>It was a good exercise for extracting data from an API and converting it into something readable.</p>
            <p>Select2 Forms were used in order to give a more standard look across browsers with better
                functionality.</p>
            <br>
            <h4>Skills Learnt</h4>
            <div class="text-center">
                <i title="JavaScript" class="mfizz icon-javascript-alt"></i>
                <i title="Bootstrap" class="mfizz icon-bootstrap"></i>
                <i title="HTML5" class="mfizz icon-html5-alt"></i>
                <i title="CSS3" class="mfizz icon-css3-alt"></i>
            </div>
            <div class="text-center">
                <a href="/currency">
                    <button class="btn btn-default">Go to this project</button>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">

            <a href="#">
                <img width="600px" height="autod" src="{{ asset('images/portfolio/CurrencyRates.png') }}" alt="">
            </a>
            <caption class="text-center">The screenshot showing available forex rates.</caption>
        </div>
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
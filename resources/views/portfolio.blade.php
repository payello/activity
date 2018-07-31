@include('frontend.header')

@section('title')
    Peter Ayello-Wright
@endsection
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><span class="PAW-logo">PAW</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Projects">Projects</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>

    </div>
</nav>
<div class="landing container-fluid">
    <div class="row">
        <div class="title">
            <h1>Peter Ayello-Wright</h1>
            <h2>
                PHP, Laravel &amp; Wordpress Web Developer
            </h2>
            <div class="code-logos">
                <div>
                    <a href="https://www.linkedin.com/in/peterayellowright/">
                        <i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a>
                </div>
                <div>
                    <a href="https://github.com/payello/">
                        <i class="fa fa-github-square fa-5x" aria-hidden="true"></i></a>
                </div>
                <div>
                    <a href="mailto:peter.ayellowright@gmail.com">
                        <i class="fa fa-envelope fa-5x" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    About Me Section-->
<div id="About" class="container">
    <br><br>
    <h2 class="about-section text-center">About me</h2>

    <div id="about" class="row">
        <div class="blurb col-lg-6 col-md-12 col-sm-12">
            <p>
                I am an accountancy graduate, with experience in many different industries. I have worked extensively
                within the food and hospitality sector. I am now following my passion and studying to become a
                developer.
            </p>
            <p>
                My love for technology started after attending a seminar during my time at Booking.com. From this point
                onwards I have taught myself coding through various online courses such as Lynda.com, Codecademy and
                edX.
            </p>
            <p>
                Having found the JustIT course I have relished the opportunity to code in a more structured environment
                and I am now working hard to ensure that I have all the skills required to work as a PHP developer.
            </p>
            <p>I volunteer for two charities, developing their WordPress sites. This was what led me to focus my time
                learning PHP, especially the Laravel framework that I love working with.</p>

        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <img class="thumbnail" src="{{ asset('images/portfolio/profile.png') }}" alt="Peter Ayello-Wright">
            <div class="button">
                <a href="/download" class="btn btn-default">
                    <button class="btn btn-default" download="PeterCV">Download my CV</button>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Projects Section -->
<div id="Projects" class="container">
    <br><br>
    <h2 class="text-center projects-section">My Projects</h2>
    <div class="card card-outline-primary mb-3 text-center">
        <div class="card-block">
            <blockquote class="card-blockquote">
                <p>Below are some examples of the work that I have done.</p>
                <p>I am always making new projects and trying out new things so this page will be constantly
                    updated.</p>
                <p>You can hover over each box for a view of what languages I used and click the button for further
                    details of what I did on each project.</p>
            </blockquote>
        </div>
    </div>
    <div class="home-projects-section">
        <div class="projects-width-wrapper">
            <div class="cards home-project home-project-activity">
                <div class="faces front ">
                    <img src="{{ asset('images/portfolio/ActivityHoliday.png') }}" alt="">
                </div>
                <div class="faces back laravel">
                    <div class="backInside">
                        <div class="backInside-H4">
                            <h4>Activity Holiday Site</h4>
                        </div>
                        <hr>
                        <ul>
                            <li>Laravel</li>
                            <li>OOP PHP</li>
                            <li>JavaScript</li>
                            <li>Ubuntu</li>
                        </ul>

                        <div>
                            <a class="btn btn-default" href="{{ route('read-more.activity') }}" >
                                <button class="btn btn-default">Read more...</button>
                            </a>
                            <a href="{{ route('home') }}" >
                                <button class="btn btn-default">Try it!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cards home-project home-project-currency">
                <div class="faces front">
                    <img src="{{ asset('images/portfolio/CurrencyRates.png') }}" alt="">
                </div>
                <div class="faces back">
                    <div class="backInside">
                        <div class="backInside-H4">
                            <h4>Currency Converter</h4>
                        </div>
                        <hr>
                        <ul>
                            <li>JavaScript</li>
                            <li>Ajax</li>
                            <li>JSON</li>
                            <li>API</li>
                        </ul>

                        <div>
                            <a href="{{ route('read-more.currency') }}" >
                                <button class="btn btn-default">Read more...</button>
                            </a>
                            <a href="{{ route('currency') }}" >
                                <button class="btn btn-default">Try it!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cards home-project home-project-suggest">
                <div class="faces front">
                    <img src="{{ asset('images/portfolio/SuggestionsPic.jpg') }}" alt="">
                </div>
                <div class="faces back">
                    <div class="backInside">
                        <div class="backInside-H4">
                            <h4>Band Website</h4>
                        </div>
                        <hr>
                        <ul>
                            <li>Bootstrap</li>
                            <li>JQuery</li>
                            <li>InstaJS</li>
                            <li>API</li>
                        </ul>
                        <div>
                            <a href="{{ route('read-more.suggestions') }}" >
                                <button class="btn btn-default">Read more...</button>
                            </a>
                            <a href="http://thesuggestions.co.uk" >
                                <button class="btn btn-default">Try it!</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-projects-section">
    <div class="projects-width-wrapper">
        <div class="cards home-project home-project-activity">
            <div class="faces front ">
                <img src="{{ asset('images/portfolio/b2bb.png') }}" alt="">
            </div>
            <div class="faces back laravel">
                <div class="backInside">
                    <div class="backInside-H4">
                        <h4>Charity Volunteering</h4>
                    </div>
                    <hr>
                    <ul>
                        <li>WordPress</li>
                        <li>Google Analytics</li>
                        <li>SEO</li>
                        <li>PHP</li>
                    </ul>

                    <div>
                        <a href="{{ route('read-more.born-to-be') }}" >
                            <button class="btn btn-default">Read more...</button>
                        </a>
                        <a href="http://borntobebeautiful.org" >
                            <button class="btn btn-default">Try it!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards home-project home-project-currency">
            <div class="faces front">
                <img src="{{ asset('images/portfolio/theGoodCard.png') }}" alt="Good Cards">
            </div>
            <div class="faces back">
                <div class="backInside">
                    <div class="backInside-H4">
                        <h4>Remote Charity Volunteering</h4>
                    </div>
                    <hr>
                    <ul>

                        <li>WordPress</li>
                        <li>Divi Theme</li>
                        <li>CSS</li>
                        <li>Google Analytics</li>
                    </ul>

                    <div>
                        <a href="{{ route('read-more.tgc') }}">
                            <button class="btn btn-default">Read more...</button>
                        </a>
                        <a href="https://www.thegoodcards.com/" >
                            <button class="btn btn-default">Try it!</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cards home-project home-project-suggest">
            <div class="faces front">
                <img class="bubble" src="{{ asset('images/portfolio/profile_bubble.png') }}" alt="">
            </div>
            <div class="faces back">
                <div class="backInside">
                    <div class="backInside-H4">
                        <h4>I am always working on...</h4>
                    </div>

                    <hr>
                    <ul>
                        <li>Laravel</li>
                        <li>WordPress</li>
                        <li>PHP</li>
                        <li>HTML/CSS</li>
                    </ul>
                    <div>
                        <a href="https://uk.linkedin.com/in/peterayellowright">
                            <button class="btn btn-default">linkedin...</button>
                        </a>
                        <a href="https://github.com/payello">
                            <button class="btn btn-default">Code</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="skills">
    <div class="container">
        <h2 class="text-center">Skills</h2>
        <p class="text-center">I am constantly learning new skills and broaden my knowledge, below are among the
            technologies that I feel comfortable with. </p>
    </div>
    <div class="container">
        <div class="col-lg-12 icons text-center"></div>
        <i title="PHP" class="mfizz icon-php"></i>
        <i title="WordPress" class="mfizz icon-wordpress"></i>
        <i title="Laravel" class="mfizz icon-laravel"></i>
        <i title="Git" class="mfizz icon-git"></i>
        <i title="Nginx" class="mfizz icon-nginx"></i>
        <i title="MySQL" class="mfizz icon-mysql"></i>
        <i title="Boostrap" class="mfizz icon-bootstrap"></i>
        <i title="JQuery" class="mfizz icon-jquery"></i>
        <i title="CSS3" class="mfizz icon-css3-alt"></i>
        <i title="HTML5" class="mfizz icon-html5-alt"></i>
        <i title="JavaScript" class="mfizz icon-javascript-alt"></i>
        <i title="Bash Shell" class="mfizz icon-shell"></i>
        <i title="git" class="mfizz icon-git"></i>

    </div>
</div>

<div id="Experience">
    <h2 class="text-center">Experience</h2>
    <blockquote class="text-center">I have included some of my relevant work experience and qualifications below.
        <br>If you would like to download my CV, click on this button.
    </blockquote>
    <div class="PeterCV text-center">
        <a href="/download" class="btn btn-default">
            <button class="btn btn-default" download="PeterCV">Download my CV</button>
        </a>
    </div>

    <section id="cd-timeline" class="cd-container">
        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-movie">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>Freddie's Flowers</h3>
                <h4>Junior PHP Developer</h4>
                <h4>London, UK</h4>
                <ul>
                    <li>
                        Working with PHP Laravel 5.5 using PSR-2 coding standards, Vue.js, jQuery, and HTML/CSS. I was
                        assigned tasks concerned with bug fixes and new features to the main site, the internal software
                        app and the canvasser sales page from JIRA’s Kanban board. Each task was given it’s own pull
                        request in GitHub and then pushed to the testing environment to be tested by its creator to
                        ensure that the specifications were correctly implemented.
                    </li>
                    <li>
                        Assisted with the implementation of changes required by the GDPR law including permissions and
                        marketing options.
                    </li>
                    <li>Regularly made cosmetic changes and content modifications to the front end of the site using
                        HTML/CSS, jQuery and Vue.js.
                    </li>
                    <li>
                        Built a RESTful API with Vue.js components to assist customer service with implementation of a new
                        process where they could dynamically track defaulted customers.
                    </li>
                    <li>
                        Connected the internal software app to the ZenDesk API so customer service staff had realtime
                        information concerning a customer when they contacted customer service thereby improving the
                        customer’s experience.
                    </li>
                    <li>
                        Generated asynchronous commands for jobs and scheduled them to run at specified time.
                    </li>
                    <li>
                        Regularly fixed bugs that were discovered by staff from all areas of the business and outlined on
                        the JIRA Kanban board.
                    </li>
                    <li>
                        I built reports using Datatables that were used by management to provide data for decision making.
                    </li>

                </ul>
                <span class="cd-date">02/17 - Present</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-movie">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>Studio 24</h3>
                <h4>Intern</h4>
                <h4>Cambridge, UK</h4>
                <ul>
                    <li>I gained a contact from attending the PHP coding Meetup in Cambridge. I was given 2 weeks
                        exposure to life in a digital agency.
                    </li>
                    <li>Assisted with the production of their intranet built with PHP Laravel adding new
                        functionalities.
                    </li>
                    <li>Followed best practise coding standards and strictly worked with git version control.</li>
                    <li>Gained experience creating new sites and modifying older sites built in PHP - WordPress, Drupal,
                        Zend and Laravel
                    </li>
                </ul>
                <span class="cd-date">02/17 - Present</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-picture">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>Better World International</h3>
                <h4>Wordpress Developer</h4>
                <h4>California, USA</h4>
                <ul>
                    <li>Volunteering remotely for an ambitious charity based in California whose aim is to spread
                        happiness throughout the world by doing good deeds. Their main focus is <a
                                href="www.thegoodcards.com">The Good Cards</a> which is an IoT card game concept based
                        on doing good deeds.
                    </li>
                    <li>My role is to assist with the development and creation of web pages for the charity using
                        WordPress with CornerStone page builder and to collate, analyse and present the Google Analytics
                        data in the weekly meeting. All sites are connected to web marketing campaigns and I implement
                        activCampaign on all sites through ConvertPlug plugin. I regularly make multiple pages with
                        slight differences in order to be A/B tested for their effectiveness using Google Analytics and
                        ConvertPlug
                    </li>
                </ul>
                <span class="cd-date">03/2017 - Present</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-movie">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>Born to be Beautiful</h3>
                <h4>WordPress Developer</h4>
                <h4>Cambridge, UK</h4>
                <ul>
                    <li>Volunteering with a local charity that offers free health and beauty training in India, Uganda
                        and Sierra Leone with the objective of helping the ladies start a career as a beautician. I
                        assist with everything digital but spend most of my time creating and modifying web content for
                        their WordPress website with the objective of improving User Experience and increasing web
                        traffic.
                    </li>
                    <li>Gaining experience with a working CMS system improving SEO and Google Analytics skills.</li>
                    <li>Assisting with other technology related items such as editing videos on the video blog and
                        updating social media sites - Facebook and Twitter.
                    </li>
                </ul>
                <span class="cd-date">02/17 - Present</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-picture">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>ARM Ltd</h3>
                <h4>Payroll Assistant</h4>
                <h4>Cambridge, UK</h4>
                <ul>
                    <li>Assisting with the accurate and timely production of payroll for the EMEA operations of ARM
                        Ltd.
                    </li>
                    <li>Creating and implementing new automated systems for payroll using MS Excel to remove manual
                        checking and increase efficiency and accuracy
                    </li>
                    <li>Creating reports for EMEA People department to increase accuracy on company records using MS
                        Excel &amp; SAP ECC HANA
                    </li>
                </ul>
                <span class="cd-date">09/2016 - 04/2017</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->

        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-movie">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>Muntons plc.</h3>
                <h4>Management Information Assistant</h4>
                <h4>Suffolk, UK</h4>
                <ul>
                    <li>Working within the FP&amp;A team of a manufacturing business to produce KPI reports for the
                        entire business supply chain by extracting data from SAP and manipulating it using complex
                        formulae in MS Excel; ensuring the reports were ready for the monthly management meeting.
                    </li>
                    <li>Created reports to show the monthly performance of the sales managers and directors, using MS
                        Excel and data warehousing software.
                    </li>
                    <li>Updated and maintained an SQL server databased, used by customer service department to create
                        and modify deliveries. Conducted regular meeting with the Customer Service Managers to discuss
                        and required improvements or modifications.
                    </li>
                    <li>Creating ad-hoc sales reports for sales managers and directors with the objective of assisting
                        business development.
                    </li>
                    <li>Created a program in MS Excel using VBA and Macros for the warehouse to create order
                        information.
                    </li>
                </ul>
                <span class="cd-date">05/2014 - 10/2014</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
        <div class="cd-timeline-block">
            <div class="cd-timeline-i cd-picture">
            </div> <!-- cd-timeline-img -->

            <div class="cd-timeline-content">
                <h3>Booking.com</h3>
                <h4>Customer Service Assistant</h4>
                <h4>Cambridge, UK</h4>
                <ul>
                    <li>Liaising between the customers and clients, modifying reservations, handling special requests
                        and complaints by phone and emails.
                    </li>
                    <li>Working to targets for performance (resolving 10 cases an hour); customer satisfaction (90%
                        customer satisfaction on customer questionnaires) and quality (ensuring that we are working
                        closely towards company procedures).
                    </li>
                    <li>Awarded "Office Hero" for training and mentoring colleagues out of 400 employees in the
                        office.
                    </li>
                </ul>
                <span class="cd-date">11/2012 - 03/2014</span>
            </div> <!-- cd-timeline-content -->
        </div> <!-- cd-timeline-block -->
    </section>
</div>
<section id="education">

    <h2 class="text-center">Education</h2>
    <div class="container">
        <div class="row">

            <div class="card learning margin-btm-30 just-it">
                <h3 class="courses">Just IT</h3>
                <hr>
                <h5>
                    <time>June 2016 - Present</time>
                    ; London
                </h5>
                <p class="CourseDescription">Just IT provide an intensive course that is both online and classroom
                    based. It provides an excellent grounding in ASP.NET, C#, Java, and Python to ensure that students
                    are practically prepared for employment.</p>
            </div>
            <div class="card learning margin-btm-30 cima"><h3 class="courses cima-long">Chartered Institute of
                    Management Accountants</h3>
                <h3 class="cima-short">CIMA
                    <h3>
                        <hr>
                        <h5>August 2012; Cambridge</h5>
                        <p>CIMA is an internationally recognised management accountancy body that is well received for
                            giving students a broad knowledge of all areas of the business. I completed the higher
                            diploma level through self-study.</p>
            </div>

            <div class="card learning margin-btm-30 uop"><h3 class="courses">University Of Portsmouth</h3>
                <hr>
                <h5 class="Dates">October 2007 - June 2010</h5>
                <p>An accredited accountancy and finance degree where I specialised in finance and excelled in financial
                    analysis and investment analysis. We were given projects to analyse the stock market using real-time
                    financial markets data.</p></div>
        </div>
    </div>

</section>

<section id="contact">

    <div class="container">
        <h2>Contact Me</h2>
        <p>Please get in touch if you would like to find out more</p>
        <p><a href="mailto:peter.ayellowright@gmail.com">peter.ayellowright@gmail.com</a>
        </p>
        <ul class="list-inline banner-social-buttons">
            <p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp; Tel: +44 7976 219 529</p>

            <li>
                <a href="https://github.com/payello" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i>
                    Github</a>
            </li>
            <!-- Add Contact number -->
            <li>
                <a href="https://uk.linkedin.com/in/peterayellowright" class="btn btn-default btn-lg">
                    <i class="fa fa-linkedin fa"> LinkedIn</i>
                </a>
        </ul>
    </div>
</section>
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/transitions.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/experience/js/main.js') }}"></script>

</body>
</html>

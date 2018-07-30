@extends('layouts.master')
@section('content')

    <div class="col-md-8">
        <div class="row">
            <div class="blockquote">
                <h3>Peter Ayello-Wright</h3>
                <p>My name is Peter Ayello-Wright. I love to be active and go on lots of adventures</p>
                <p>This passion was the brief that I set myself for this project.</p>
                <p>Having volunteered with a couple of charities assisting with their WordPress production. I knew that
                    learning php would be the natural language choice for me.</p>
                <p>I decided to build this project using the <a href="https://laravel.com">Laravel Frameword.</a> It is
                    enforces you to use OOP php as it is all class based and follows a strict MVC format.</p>
                <p>So I had experimented with small sites in Laravel and decided to build an informative blog site that
                    advertised places that are on my bucketlist.</p>
                <p>This web app that has user authentication. A user that is not logged can view the activity holidays
                    but cannot modify them and view comments</p>
                <p>A user that is logged in can add, edit, delete and read posts; add comments, add, edit and delete
                    projects.</p>
                <p>The site has a MySQL database and I used one-to-many, and many-to-many relationships to create this
                    site. </p>
                <p>The front end relies on Bootstrap, I wanted to focus on Laravel and OOP php code rather than focusing
                    on design.</p>
                <p>One of the great advantages of using a framework like Laravel was that I was able to have DRY code -
                    with Laravel Blades, all front-end views are templated to ensure code is seldom duplicated</p>
                <p>I did however use some JQuery to improve the usability of forms - the multiple select form uses
                    Select 2 with Jquery.</p>
                <br>
                <p>This site was deployed to a Vultr server running ubuntu. I deployed the site using Git. Although
                    being a fast and effective solution, I still learnt important lessons on permissions for uploading
                    files.</p>
                <br>
                <h3>Skills Learnt</h3>
                <ul>
                    <li>OOP PHP</li>
                    <li>Laravel</li>
                    <li>Twitter Bootstrap</li>
                    <li>Git</li>
                    <li>Github</li>
                    <li>JQuery</li>
                    <li>Select2 Forms</li>
                    <li>Laravel Form Collective</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

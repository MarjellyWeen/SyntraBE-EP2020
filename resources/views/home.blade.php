@extends('template.index')

@section('content')
<div class="container home">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/slider.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <div class="row justify-content-center text-center">
            <h1>Welcome!</h1>
            <p>Hi and welcome to FestiFavs. Here's where you can find all of your favorite festivals and add them to your
                list. Wanna know more about the people behind this page? Make sure to click on the button below to get to know us.</p>
            <p>Not sure how our page works? Scroll down and check the "How it works."</p>
            <div class="justify-content-center text-center">
                <button type="button" id="hpbtn">Get to know us!</button>
            <hr>
            <h3>“Here's to the nights that turned into mornings, and the friends that turned into family."</h3>
            <hr>
        </div>
    <hr>
    <div class="container">
        <h2>How it works!</h2>
        <div class="row">
            <div class="col-md-4 block">
                <div class="circle">
                    <p id="steps">1</p>
                </div>
            </div>
            <div class="col-md-4 block">
                <div class="circle">
                    <p id="steps">2</p>
                </div>
            </div>
            <div class="col-md-4 block">
                <div class="circle">
                    <p id="steps">3</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 block">
                <div>
                    <p>Check out all of the festivals that will take place in 2020. You can find all of the details when clicking on the Detail button.
                        Here you can find dates, prices and even genres that will be played at the festival!</p>
                </div>
            </div>
            <div class="col-md-4 block">
                <div>
                    <p>Search for the best festivals in your hometown or even in your country. Login and add your favorite festivals to your account. 
                        That makes it a lot easier to find all the details of your personal favorites.</p>
                </div>
            </div>
            <div class="col-md-4 block">
                <div>
                    <p>Click on the link that is shown on each festival to go to the festival's homepage. 
                        Buy tickets to reserve a spot at all of your favorite festivals before they're sold out. Hurry up, it might be too late already!</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

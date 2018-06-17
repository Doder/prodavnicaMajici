@extends('layouts.master')

@section('content')
    <div id="tatjana">
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
            <div class="intro-lead-in">Dobrodosli u nasu prodavnicu!</div>
            <div class="intro-heading text-uppercase">Pogledajte sta imamo u ponudi</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="majice">Istrazi</a>
            </div>
        </div>
    </header>
    <!-- Services -->
    <section id="services">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">Servisi</h2>
                  <h3 class="section-subheading text-muted">Neke od usluga koje pruzamo su:</h3>
                </div>
              </div>
              <div class="row text-center">
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                  </span>
                  <h4 class="service-heading">E-kupovina</h4>
                  <p class="text-muted">Mogucnost kupovina kvalitetnih markiranih majica svjetski poznatih marki.</p>
                </div>
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-tint fa-stack-1x fa-inverse"></i>
                  </span>
                  <h4 class="service-heading">Stampa na veliko i malo</h4>
                  <p class="text-muted">Mogucnost stampanja majica sa logoima i custom dizajnima.</p>
                </div>
                <div class="col-md-4">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                  </span>
                  <h4 class="service-heading">Sigurnost</h4>
                  <p class="text-muted">Zagarantovana dostava posiljki i bezbjedan naplatni sistem.</p>
                </div>
              </div>
            </div>
          </section>
    <!-- Team -->
    <section class="bg-light" id="team">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nas tim</h2>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                <div class="team-member">
                <img class="mx-auto rounded-circle" src="/img/Kristina.jpg" alt="">
                <h4>Kristina Papic</h4>
                <p class="text-muted">Student 1</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                    <a href="https://www.facebook.com/profile.php?id=100011553041148&fref=hovercard&hc_location=chat">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="https://github.com/krisp95">
                        <i class="fab fa-github"></i>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                <img class="mx-auto rounded-circle" src="/img/Aleksa.jpg" alt="">
                <h4>Aleksa Doderovic</h4>
                <p class="text-muted">Student 2</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                    <a href="https://www.facebook.com/doder3?fref=hovercard&hc_location=chat">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="https://github.com/Doder">
                        <i class="fab fa-github"></i>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member">
                <img class="mx-auto rounded-circle" src="/img/Tatjana.jpg" alt="">
                <h4>Tatjana Vucinic</h4>
                <p class="text-muted">Student 3</p>
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                    <a href="https://www.facebook.com/tatjana.ech.vucinic">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    </li>
                    <li class="list-inline-item">
                    <a href="https://github.com/tatjanavucinic">
                        <i class="fab fa-github"></i>
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">Ekipa kaze: Z.D.R.A.V.O. :)</p>
            </div>
            </div>
        </div>
        </section>
    </div>
@endsection
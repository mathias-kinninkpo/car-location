@extends('base')

@section('content')

<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>La liste des voitures</h2>
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Les voitures</li>
                </ol>
            </div>
        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($cars as $car)
                            <div class="col-lg-6 entries">
                                <article class="entry">
                                    <div class="entry-img">
                                        <img src="{{ asset('images/cars/' . $car->image) }}" alt="{{ $car->brand }}" class="img-fluid w-100"> <!-- Réduction de la largeur -->
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{ route('cars.show', ['car' => $car->id]) }}">{{ $car->brand }} {{ $car->model }}</a>
                                    </h2>
                                    <div class="entry-meta">
                                        <ul>
                                            <li class="d-flex align-items-center"><i class="bi bi-card-list"></i> {{ $car->registration_number }}</li>
                                            <li class="d-flex align-items-center">
                                                @if($car->availability)
                                                    <i class="bi bi-check-circle" style="color: green;"></i> <span style="color: green;">Disponible</span>
                                                @else
                                                    <i class="bi bi-x-circle" style="color: red;"></i> <span style="color: red;">Non Dispo</span>
                                                @endif
                                            </li>
                                            <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> {{ $car->year }}</li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>
                                            {{ Str::limit($car->description, 200) }}
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ route('cars.show', ['car' => $car->id]) }}">@if($car->availability) Réserver @else Voir plus @endif</a>
                                        </div>
                                    </div>
                                </article><!-- End blog entry -->
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Rechercher</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Les marques</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <li><a href="#">BAW <span>(25)</span></a></li>
                                <li><a href="#">BAIC <span>(12)</span></a></li>
                                <li><a href="#">Audi <span>(5)</span></a></li>
                                <li><a href="#">DS <span>(22)</span></a></li>
                                <li><a href="#">Fiat <span>(8)</span></a></li>
                                <li><a href="#">Dodge <span>(14)</span></a></li>
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Les plus louées</h3>
                    <div class="sidebar-item recent-posts">
                        <div class="post-item clearfix">
                        <img src="{{ asset('assets/img/carfive.jpeg') }}" alt="">
                        <h4><a href="#">Jeep Grand Cherokee</a></h4>
                        <time datetime="2020-01-01">30 fois</time>
                        </div>
        
                        <div class="post-item clearfix">
                        <img src="{{ asset('assets/img/cartwo.png') }}" alt="">
                        <h4><a href="#">Mercedes-Benz S-Class</a></h4>
                        <time datetime="2020-01-01">29 fois</time>
                        </div>
        
                        <div class="post-item clearfix">
                        <img src="{{ asset('assets/img/carfour.jpg') }}" alt="">
                        <h4><a href="#">Honda Civic</a></h4>
                        <time datetime="2020-01-01">24 fois</time>
                        </div>
        
                        <div class="post-item clearfix">
                        <img src="{{ asset('assets/img/carfive.jpeg') }}" alt="">
                        <h4><a href="#"> Mazda MX-5 Miata</a></h4>
                        <time datetime="2020-01-01">22 fois</time>
                        </div>
        
                        <div class="post-item clearfix">
                        <img src="{{ asset('assets/img/carsix.jpeg') }}" alt="">
                        <h4><a href="#">Toyota Camry</a></h4>
                        <time datetime="2020-01-01">19 fois</time>
                        </div>
        
                    </div><!-- End sidebar recent posts-->
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->

            </div>
        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection




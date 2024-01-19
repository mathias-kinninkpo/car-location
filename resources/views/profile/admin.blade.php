@extends("base")

@section("content")
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route("profile.index") }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route("profile.locations") }}">
                    <i class="bi bi-car-front"></i>
                    <span>Locations</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route("profile.cars") }}">
                    <i class="bi bi-card-list"></i>
                    <span>Lister Voitures</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route("profile.new") }}">
                    <i class="bi bi-plus-circle-fill"></i>
                    <span>Créer Voiture</span>
                </a>
            </li><!-- End Contact Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route("profile.users") }}">
                    <i class="bi bi-card-list"></i>
                    <span>Lister Utilisateurs</span>
                </a>
            </li><!-- End Register Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main main1">
        <div class="pagetitle">
            <h1>Administrateur</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    @yield("dashboard-content")
                </div><!-- End Left side columns -->
            </div>
        </section>
    </main><!-- End #main -->

@endsection

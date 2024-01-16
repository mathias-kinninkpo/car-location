@extends('base')

@section('content')
<section id="contact" class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Notre Adresse</h3>
                            <p>Résidence Universitaire, Abomey-Calavi, Atlantique Bénin</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Contact Email</h3>
                            <p>info@carlocation.com<br>contact@carlocation.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box">
                            <i class="bx bx-phone-call"></i>
                            <h3>Nous Appeler</h3>
                            <p>+229 62 396 632<br>+229 54 029 676</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('contact.index') }}" method="post" role="form" class="php-email-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Chargement</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Votre message a été envoyé. Merci!</div>
                    </div>
                    <div class="text-center"><button type="submit">Envoyer le message</button></div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

<!-- ======= Map Section ======= -->
<section class="mt-2 map">
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63436.58335575969!2d2.2669128094257625!3d6.421477407441404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9ba125fb277%3A0x7880ff9d4f167b79!2sCampus%20Abomey%20Calavi!5e0!3m2!1sfr!2sbj!4v1705419400141!5m2!1sfr!2sbj" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section><!-- End Map Section -->
@endsection

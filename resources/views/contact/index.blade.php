@extends('base')

@section('content')
<section class="vh-auto mt-10" style="background-color: #eee;">
    <div class="container h-auto m">
        <div class="row d-flex justify-content-center align-items-center h-auto">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <h1 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Contact Form</h1>

                                <form id="contact_form" name="contact_form" method="post">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="email_addr" class="form-label">Email address</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 512 512">
                                                <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                                            </svg>
                                            <div class="form-outline flex-fill mb-0" style="margin-left: 20px">
                                                <input type="email" id="email_addr" class="form-control" name="email" placeholder="name@example.com" required maxlength="50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="name_input" class="form-label">Name</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 448 512">
                                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                            </svg>
                                            <div class="form-outline flex-fill mb-0" style="margin-left: 20px">
                                                <input type="text" id="name_input" class="form-control" name="name" placeholder="Name" required maxlength="50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="phone_input" class="form-label">Phone</label>
                                        <div class="d-flex flex-row align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 448 512">
                                                <path d="M80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                                            </svg>
                                            <div class="form-outline flex-fill mb-0" style="margin-left: 20px">
                                                <input type="tel" id="phone_input" class="form-control" name="Phone" placeholder="Phone" required maxlength="50">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                                    </div>

                                    <div class="my-4">
                                        <div class="g-recaptcha" data-sitekey="6LchOyEUAAAAAPo9l0WmIgFkGu5D6Gyq-MjsIHS1"></div>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-success btn-lg px-4">Send</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

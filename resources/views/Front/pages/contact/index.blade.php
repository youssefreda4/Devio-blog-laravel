@extends('Front.layouts.master')
@section('front.content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('front') }}/assets/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact {{ config('app.name') }}</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon
                        as possible!</p>
                    <x-error></x-error>
                    <x-success></x-success>
                    <div class="my-5">
                        <form action="{{ route('front.contact.store') }}" method="POST" novalidate>
                            @csrf

                            <div class="form-floating">
                                <input class="form-control" id="name" type="text" name="name"
                                    placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Name</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="email" type="email" name="email"
                                    placeholder="Enter your email..." data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                            </div>

                            <div class="form-floating">
                                <input class="form-control" id="phone" type="tel"
                                    placeholder="Enter your phone number..." name="phone"
                                    data-sb-validations="required" />
                                <label for="phone">Phone Number</label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..."
                                    style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                            </div>

                            <br />

                            <!-- Submit Button-->
                            <button class="btn btn-primary text-uppercase " id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('layouts.app')

@section('content')



<div id="request-quote-banner-1" style="background: url({{ asset('img/pexels-bongkarn-thanyakij-3740400.jpg') }}) center / cover no-repeat;">
    <div id="request-quote-container-1" style="background: rgba(36,71,166,0.85);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="text-white py-4 my-0 font-weight-bold">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    @if (session('message'))
        <div class="row">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                        {{ session('message') }}
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h2>
                We are here to help!
            </h2>
            <p style="font-size: 1.2rem">
                At MJ, our clients are our top priority. Please fill out this form, and someone from our team will contact you shortly.
            </p>
            <p style="font-size: 1.2rem">
                Otherwise, you can use one of the following to get in touch with us:
            </p>

            <ul class="list-unstyled text-dark" style="font-size: 1.2rem;">
                <li class="mt-2">
                    <i class="fa fa-phone-alt mr-2" style="color: var(--dark);"></i>
                    <a class="text-dark" href="tel:13056907132">+1 (305) 690-7132</a>
                </li>
                <li class="mt-2">
                    <i class="fa fa-fax mr-2" style="color: var(--dark);"></i>
                    <a class="text-dark" href="fax:13056753971">+1 (305) 675-3971</a>
                </li>
                <li class="mt-2">
                    <i class="fa fa-envelope mr-2" style="color: var(--dark);"></i>
                    <a class="text-dark" href="mailto:info@mjacctax.com">info@mjacctax.com</a>
                </li>
            </ul>
            <hr>
            <p style="font-size: 1.2rem">
                Our office hours are:
            </p>
            <p style="font-size: 1.2rem">
                Monday - Friday, from 9:00am to 6:00pm
            </p>

        </div>
        <div class="col-md-6 align-self-center">

            {{-- Contact Form: DO NOT MODIFY --}}

                {{-- Recaptcha Scripting --}}
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <script>
                    function onSubmit(token) {
                        document.getElementById("form").submit();
                    }
                </script>

                <form action="{{ route('contact-submit') }}" method="POST" id="form">
                    @csrf

                    <div class="form-group">
                      <label for="name">{{ __('Full Name') }}</label>
                      <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="" aria-describedby="helpName">
                      @error('name')
                        <small id="helpName" class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">{{ __('Email') }}</label>
                      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="" aria-describedby="helpEmail">
                      @error('email')
                        <small id="helpEmail" class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="tel">{{ __('Phone') }}</label>
                      <input type="tel" name="phone" id="tel" class="form-control @error('phone') is-invalid @enderror" placeholder="" aria-describedby="helpPhone">
                      @error('phone')
                        <small id="helpPhone" class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">{{ __('Subject') }}</label>
                        <select name="subject" id="subject" class="custom-select @error('subject') is-invalid @enderror" aria-describedby="helpSubject">
                            {{-- Make this dynamic on the database --}}
                            @forelse (App\Models\Subject::all() as $subject)
                                <option value="{{ $subject->value }}">{{ $subject->name }}</option>
                            @empty
                                <option value="" disabled>Error: No subjects available. Please contact the site owner.</option>
                            @endforelse
                        </select>
                        @error('name')
                            <small id="helpSubject" class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="msg">{{ __('Message') }}</label>
                        <textarea name="message" id="msg" class="form-control @error('message') is-invalid @enderror" cols="30" rows="6" aria-describedby="helpMessage"></textarea>
                        @error('message')
                            <small id="helpMessage" class="text-danger">{{ $message }}</small>
                        @else
                            <small id="helpMessage" class="text-muted">Allows for a maximum of 500 characters.</small>
                        @enderror
                    </div>

                    <div class="form-group text-right">
                        <button class="g-recaptcha btn btn-danger btn-lg"
                        data-sitekey="{{ config('services.recaptcha.key') }}"
                        data-callback="onSubmit">
                        <i class="fas fa-paper-plane mr-2"></i>
                            Contact me
                        </button>
                    </div>

                    {{-- <div class="form-group">
                        <button
                            class="g-recaptcha btn btn-success"
                            data-sitekey="{{ config('services.recaptcha.key') }}"
                            data-callback="onSubmit">
                            Submit
                        </button>

                    </div> --}}

                </form>
        </div>
    </div>
</div>

@endsection

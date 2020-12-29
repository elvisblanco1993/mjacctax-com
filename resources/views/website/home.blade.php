@extends('layouts.app')

@section('content')

{{-- Carousel --}}
@include('layouts.carousel')
{{-- End: Carousel --}}

{{-- About Section --}}
<div class="my-5">
    <div class="container">
        <div class="row" data-aos="fade">
            <div class="col-md-6">
                <img class="rounded-lg" src="{{asset('img/pexels-fauxels-3182754.jpg')}}" width="100%">
            </div>
            <div class="col-md-6 align-self-center">
                <h2 class="font-weight-bolder">We are your best option.</h2>
                <p class="text-justify" style="font-size: 1.2rem;font-family: Quicksand, sans-serif;">At MJ, we offer a wide variety of services for your as individual, and your business. Our client’s benefit is by getting personalized, quality service that is beyond comparison. When it comes the case, we seek that our clients get to compliance, in the best way possible, with all legal entities regarding taxes.</p>
            </div>
        </div>
    </div>
</div>
{{-- End: About Section --}}

{{-- Services Section --}}
<div class="features-boxed" style="background: rgb(255,255,255);">
    <div class="container" data-aos="fade">
        <div class="intro">
            <h2 class="text-center">Why choose us?</h2>
            <p class="text-center" style="font-size: 1.2rem;">At MJ Accounting and Taxes Services, we offer a wide variety of services to service all your accounting needs.</p>
        </div>
        <div class="row justify-content-center features" data-aos="fade">
            <div class="col-sm-6 col-md-5 col-lg-6 item">
                <div class="box" style="background: rgb(239,239,239);">
                    <i class="far fa-money-bill-alt icon" style="color: rgb(36,91,182);"></i>
                    <h3 class="name">Accounting and Bookkeeping</h3>
                    <p class="description" style="font-size: 1rem;">Providing financial information to our clients in a timely and accurate manner is a commitment that we feel cannot be compromised...</p>
                    <a class="learn-more" href="{{ route('services') . '#accountingsrv' }}">Learn more »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-6 item">
                <div class="box" style="background: rgb(239,239,239);">
                    <i class="far fa-chart-bar icon" style="color: rgb(36,91,182);"></i>
                    <h3 class="name">Taxes Services</h3>
                    <p class="description" style="font-size: 1rem;">By keeping current on new tax laws and legislation, we can identify key tax planning opportunities that minimize both your current...</p>
                    <a class="learn-more" href="{{ route('services') . '#taxessrv' }}">Learn more »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-6 item">
                <div class="box" style="background: rgb(239,239,239);">
                    <i class="fas fa-seedling icon" style="color: rgb(36,91,182);"></i>
                    <h3 class="name">Payroll Services</h3>
                    <p class="description" style="font-size: 1rem;">Your business depends on the work your employees do. Keeping them satisfied with their compensation while maintaining your records enables...</p>
                    <a class="learn-more" href="{{ route('services') . '#payrollsrv' }}">Learn more »</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-6 item">
                <div class="box" style="background: rgb(239,239,239);">
                    <i class="fas fa-user-clock icon" style="color: rgb(36,91,182);"></i>
                    <h3 class="name">Consulting Services</h3>
                    <p class="description" style="font-size: 1rem;">We can help in many other ways, including filing the appropriate documents, establishing a business plan, setting up accounting systems...</p>
                    <a class="learn-more" href="{{ route('services') . '#consultingsrv' }}">Learn more »</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End: Services Section --}}

{{-- Call to action --}}
@include('website.cta')
{{-- End: Call to action --}}

@endsection

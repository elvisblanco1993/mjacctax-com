@extends('layouts.app')

@section('content')
{{-- Title --}}
<div id="request-quote-banner-1" style="background: url({{ asset('img/pexels-bongkarn-thanyakij-3740400.jpg') }}) center / cover no-repeat;">
    <div id="request-quote-container-1" style="background: rgba(36,71,166,0.85);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="text-white py-4 my-0 font-weight-bold">About Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End: Title --}}

{{-- About Us --}}

<div class="container">
    <div class="row py-5">
        <div class="col-md-6 align-self-center">
            <p class="text-justify" style="font-size: 1.2rem" >
                At MJ, we offer a wide variety of services for your as individual, and your business. Our client’s benefit is by getting personalized, quality service that is beyond comparison. When it comes the case, we seek that our clients get to compliance, in the best way possible, with all legal entities regarding taxes.
            </p>
        </div>
        <div class="col-md-6 align-self-center">
            <img class="rounded-lg" src="{{asset('img/pexels-fauxels-3182754.jpg')}}" width="80%">
        </div>
    </div>
</div>

{{-- End: About Us --}}

{{-- Call to action --}}
@include('website.cta')
{{-- End: Call to action --}}

@endsection

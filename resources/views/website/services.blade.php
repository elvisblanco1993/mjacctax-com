@extends('layouts.app')

@section('content')

{{-- Title --}}
<div id="request-quote-banner-1" style="background: url({{ asset('img/pexels-bongkarn-thanyakij-3740400.jpg') }}) center / cover no-repeat;">
    <div id="request-quote-container-1" style="background: rgba(36,71,166,0.85);">
        <div class="container">
            <div class="row align-items-center" id="accountingsrv">
                <div class="col-md-6">
                    <h1 class="text-white py-4 my-0 font-weight-bold">Our services</h1>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End: Title --}}

{{-- Services --}}

<div class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-none d-md-block">
                <img class="w-100" src="{{ asset('img/bookkeeping-615384_1920.jpg') }}" loading="eager">
            </div>
            <div class="col-md-6 align-self-center">
                <h2 style="font-weight: 700;">Accounting and Bookkeeping</h2>
                <p class="text-justify" style="font-size: 1.2rem;">Providing financial information to our clients in a timely and accurate manner is a commitment that we feel cannot be compromised. Meaningful, well-organized financial records ensure that your business operation will run more efficiently daily and are the foundation of a successful business. Our firm provides a full range of cost-effective accounting services including the following:</p>
                <ul class="list-unstyled" style="font-size: 1.2rem;">
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Bookkeeping (Monthly/Quarterly/Annual).</li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Full Bookkeeping Outsourcing.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>QuickBooks Consulting &amp; Management.</li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Accounting system setup for new business.<br></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="my-5" style="background: rgba(38,68,149,0.14);">
    <div class="container">
        <div class="row" id="taxessrv">
            <div class="col-md-6 align-self-center">
                <h2 style="font-weight: 700;">Taxes Services</h2>
                <p class="text-justify" style="font-size: 1.2rem;">By keeping current on new tax laws and legislation, we can identify key tax planning opportunities that minimize both your current and future tax liabilities.&nbsp;We provide our individual and business clients with the taxation expertise and knowledge that they deserve throughout the year. Tax services offered include but are not limited to:<br></p>
                <ul class="list-unstyled" style="font-size: 1.2rem;">
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Resident &amp; Non – Resident Personal Income Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Domestic &amp; Foreign Corporation Income Tax Return.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Partnership Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Exercise Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Sale, Use and Reemployment Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Tangible Personal Property Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Not for profit Entity Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Foreign Partner Withholding Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>State Tax Returns.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>ITIN Procurement including Certified Acceptance Agent Services.<br></li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-md-block"><img class="w-100 py-5" src="{{ asset('img/pexels-oleg-magni-2058134.jpg') }}"></div>
        </div>
    </div>
</div>

<div class="my-5">
    <div class="container">
        <div class="row" id="consultingsrv">
            <div class="col-md-6 d-none d-md-block"><img class="w-100" src="{{ asset('img/pexels-marcus-aurelius-4063792.jpg') }}"></div>
            <div class="col-md-6 align-self-center">
                <h2 style="font-weight: 700;">Consulting Services</h2>
                <p class="text-justify" style="font-size: 1.2rem;">We can help in many other ways, including filing the appropriate documents, establishing a business plan, setting up accounting systems, minimizing tax liability, and much more.<br></p>
                <ul class="list-unstyled" style="font-size: 1.2rem;">
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Incorporation and New Business Advisor services.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Type of entity selection.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Accounting software selection &amp; implementation.<br></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="mt-5" style="background: rgba(38,68,149,0.14);">
    <div class="container">
        <div class="row" id="payrollsrv">
            <div class="col-md-6 align-self-center">
                <h2 style="font-weight: 700;">Payroll Services</h2>
                <p class="text-justify" style="font-size: 1.2rem;">Your business depends on the work your employees do. Keeping them satisfied with their compensation while maintaining your records enables your long-term success. Payroll processing requires knowledgeable and skilled professionals. Our payroll services include but are not limited to the following:<br></p>
                <ul class="list-unstyled" style="font-size: 1.2rem;">
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Assisted and Outsourced Payroll Management.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Direct Deposit<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Electronic Funds Transfer to IRS and State Department of Revenue.<br></li>
                    <li><i class="far fa-check-circle mr-2" style="color: var(--danger);"></i>Everything else you may need!<br></li>
                </ul>
            </div>
            <div class="col-md-6 d-none d-md-block"><img class="w-100 py-5" src="{{ asset('img/pexels-oleg-magni-2058134.jpg') }}"></div>
        </div>
    </div>
</div>

{{-- End: Services --}}

{{-- Call to action --}}
@include('website.cta')
{{-- End: Call to action --}}
@endsection

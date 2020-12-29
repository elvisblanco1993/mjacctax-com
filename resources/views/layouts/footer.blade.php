<footer id="footer">
    <div class="container">
        <div class="row py-5 text-light">
            <div class="col-md-4">
                <img src="{{ asset('img/logo.png') }}" width="50%">
                <section class="mt-3">
                    <a class="social-icon" href="https://www.facebook.com/MJAccountingandTaxesServicesLLC/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="social-icon" href="https://www.instagram.com/mjacctax/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </section>
            </div>
            <div class="col-md-4">
                <p class="lead font-weight-bold">Important Links</p>
                <p class="footer-text mb-0">
                    <a class="footer-text" href="{{ route('home') }}">
                        <i class="fas fa-long-arrow-alt-right mr-3" style="color: rgb(169,171,174);"></i>
                        Home
                    </a>
                </p>
                <p class="footer-text mb-0">
                    <a class="footer-text" href="{{ route('about') }}">
                        <i class="fas fa-long-arrow-alt-right mr-3" style="color: rgb(169,171,174);"></i>
                        About
                    </a>
                </p>
                <p class="footer-text mb-0">
                    <a class="footer-text" href="{{ route('services') }}">
                        <i class="fas fa-long-arrow-alt-right mr-3" style="color: rgb(169,171,174);"></i>
                        Services
                    </a>
                </p>
                <p class="footer-text mb-0">
                    <a class="footer-text" href="{{ route('contact') }}">
                        <i class="fas fa-long-arrow-alt-right mr-3" style="color: rgb(169,171,174);"></i>
                        Contact
                    </a>
                </p>
                <p class="footer-text mb-0">
                    <a class="footer-text" href="{{ route('privacy') }}">
                        <i class="fas fa-long-arrow-alt-right mr-3" style="color: rgb(169,171,174);"></i>
                        Privacy Policy
                    </a>
                </p>
                <p class="footer-text mb-0">
                    <a class="footer-text" href="{{ route('terms') }}">
                        <i class="fas fa-long-arrow-alt-right mr-3" style="color: rgb(169,171,174);"></i>
                        Terms of Use
                    </a>
                </p>
            </div>
            <div class="col-md-4">
                <p class="lead font-weight-bold">Contact Us</p>
                <section class="mt-4">
                    <p class="footer-text">
                        <i class="fas fa-map-marker-alt mr-4" style="color: rgb(169,171,174);"></i>
                        <a class="footer-text" href="https://goo.gl/maps/2akFQSMrUK7zSN7z6" target="_blank">14335 SW 120th St Unit 211, Miami, FL 33186</a>
                    </p>
                    <p class="footer-text">
                        <i class="fas fa-phone-alt mr-4" style="color: rgb(169,171,174);"></i>+1 (305) 690-3172</p>
                    <p class="footer-text">
                        <i class="fas fa-fax mr-4" style="color: rgb(169,171,174);"></i>+1 (305) 675-3971</p>
                    <p class="footer-text">
                        <i class="fas fa-envelope mr-4" style="color: rgb(169,171,174);"></i>
                        <a href="mailto:info@mjacctax.com?subject=FromWebsite" class="footer-text">info@mjacctax.com</a>
                    </p>
                </section>
            </div>
        </div>
        <div class="text-center pb-2">
            <p class="mb-0 text-light">Copyright © <span>{{ \Carbon\Carbon::now()->format('Y') }}</span>. MJ Accounting and Taxes Services, LLC.</p>
        </div>
    </div>
</footer>

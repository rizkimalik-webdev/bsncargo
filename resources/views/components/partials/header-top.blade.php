<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="top-left text-center text-md-left">
                    <h6>Operasional : Senin - Minggu - 24 Jam</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="top-right text-center text-md-right">
                    <ul class="social-links">
                        <li>
                            <a href="https://wa.me/{{ $company->whatsapp }}" target="_blank" aria-label="whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ $company->email }}" target="_blank" aria-label="mail">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://facebook.com/{{ $company->facebook }}" target="_blank" aria-label="facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/{{ $company->twitter }}" target="_blank" aria-label="twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/{{ $company->instagram }}" target="_blank" aria-label="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}" target="_blank" aria-label="whatsapp">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
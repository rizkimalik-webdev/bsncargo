<footer class="footer-main">
    <div class="footer-top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="about-widget">
                        <div class="footer-logo">
                            <figure>
                                <a href="{{ url('/home') }}">
                                    <img loading="lazy"  height="80"src="{{ asset('public/theme/images/'.$company->image) }}" alt="medic">
                                </a>
                            </figure>
                        </div>
                        <p>{{ $company->company }}</p>
                        <ul class="location-link">
                            <li class="item">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>{{ $company->address }}</p>
                            </li>
                            <li class="item">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                                <a href="mailto:{{ $company->email }}">
                                    <p>{{ $company->email }}</p>
                                </a>
                            </li>
                            <li class="item">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                                <p>{{ $company->telp }}</p>
                            </li>
                        </ul>
                        <ul class="list-inline social-icons">
                            <li class="list-inline-item"><a href="https://facebook.com/{{ $company->facebook }}"
                                    aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/{{ $company->twitter }}"
                                    aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://instagram.com/{{ $company->instagram }}"
                                    aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://wa.me/{{ $company->whatsapp }}"
                                    aria-label="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                    <h2>Layanan</h2>
                    <ul class="menu-link">
                        @foreach ($services as $item)
                        <li>
                            <a href="service">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>{{ $item->service }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="social-links">
                        <h2>Perusahaan</h2>
                        <ul>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left mr-3">
                                        <a href="blog-details.html">
                                            <img loading="lazy" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="blog-details.html">A lesson adip isicing</a></h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <div class="media">
                                    <div class="media-left mr-3">
                                        <a href="blog-details.html">
                                            <img loading="lazy" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h5><a href="blog-details.html">How to make an event</a></h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container clearfix">
            <div class="copyright-text">
                <p>&copy; Copyright 2021. {{ $company->company }}</a>
                </p>
            </div>
            <ul class="footer-bottom-link">
                <li>
                    <a href="{{ url('/home') }}">Beranda</a>
                </li>
                <li>
                    <a href="{{ url('/about') }}">Tentang Kami</a>
                </li>
                <li>
                    <a href="{{ url('/contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
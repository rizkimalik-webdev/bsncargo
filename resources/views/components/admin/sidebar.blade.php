<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="{{ url('/profile') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-building"></i></div>
                    Profile Perusahaan
                </a>
                <a class="nav-link" href="{{ url('/service') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-box"></i></div>
                    Kategori Layanan
                </a>
                <a class="nav-link" href="{{ url('/slider') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Slider Utama
                </a>
                <a class="nav-link" href="{{ url('/gallery') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-photo-video"></i></div>
                    Gallery
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    FAQ
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/faq/syarat') }}">Syarat Ketentuan</a>
                        <a class="nav-link" href="{{ url('/faq/bisnis') }}">Bisnis & Jasa</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ url('/about') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-align-right"></i></div>
                    Visi & Misi
                </a>


                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="{{ url('/partner') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div>
                    Partner Perusahaan
                </a>
                <a class="nav-link" href="{{ url('/client') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Client Testimonial
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Administrator
        </div>
    </nav>
</div>
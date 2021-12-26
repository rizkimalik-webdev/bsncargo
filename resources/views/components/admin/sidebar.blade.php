<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light border" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <div class="sb-sidenav-menu-heading">LOGISTIK</div>
                <a class="nav-link" href="{{ url('/admin_tracking') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-route"></i></div>
                    Tracking
                </a>
                <a class="nav-link" href="{{ url('/admin_shipment') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-shipping-fast"></i></div>
                    Pengiriman
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMasterData"
                    aria-expanded="false" aria-controls="collapseMasterData">
                    <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                    Master Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMasterData" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin_') }}">Pengirim</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Penerima</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Jenis Pengiriman</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Jenis dLayanan</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Status Pengiriman</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Barang</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Driver</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Truck</a>
                        <a class="nav-link" href="{{ url('/admin_') }}">Satuan</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Company Profile</div>
                <a class="nav-link" href="{{ url('/admin_profile') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-building"></i></div>
                    Profile Perusahaan
                </a>
                <a class="nav-link" href="{{ url('/admin_service') }}">
                    <div class="sb-nav-link-icon"><i class="fa fa-box"></i></div>
                    Kategori Layanan
                </a>
                <a class="nav-link" href="{{ url('/admin_slider') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Slider Utama
                </a>
                <a class="nav-link" href="{{ url('/admin_gallery') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-photo-video"></i></div>
                    Gallery
                </a>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    FAQ
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin_faq/syarat') }}">Syarat Ketentuan</a>
                        <a class="nav-link" href="{{ url('/admin_faq/bisnis') }}">Bisnis & Jasa</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{ url('/admin_about') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-align-right"></i></div>
                    Visi & Misi
                </a>

                <a class="nav-link" href="{{ url('/admin_partner') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-handshake"></i></div>
                    Partner Perusahaan
                </a>
                <a class="nav-link" href="{{ url('/admin_client') }}">
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
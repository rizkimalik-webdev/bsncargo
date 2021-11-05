<section class="cta">
    <div class="container">
        <div class="cta-block row no-gutters">
            <div class="col-lg-4 col-md-6 emmergency item text-center">
                <i class="fa fa-phone m-4"></i>
                <h2>Telephone</h2>
                <a href="tel:{{ $company->telp }}">{{ $company->telp }}</a>
                <p>Layanan 24 jam</p>
            </div>
            <div class="col-lg-4 col-md-6 bg-primary item text-center">
                <i class="fa fa-envelope m-4"></i>
                <h2>Email</h2>
                <p>{{ $company->email }}</p>
            </div>
            <div class="col-lg-4 col-md-12 working-time item text-center">
                <i class="fa fa-map-marker-alt m-4"></i>
                <h2>Kantor</h2>
                <p>{{ $company->address }}</p>
            </div>
        </div>
    </div>
</section>
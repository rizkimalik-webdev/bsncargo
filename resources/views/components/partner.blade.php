<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3><span>Partner</span> BSN Cargo </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...
                    </p>
                </div>
            </div>
            @foreach ($partners as $item)
            <div class="col-lg-2 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ asset('theme/images/partner/'.$item->image) }}" class="img-fluid" alt="{{ $item->partner }}">
                    <a data-fancybox="images" href="{{ asset('theme/images/partner/'.$item->image) }}"></a>
                    <span>{{ $item->partner }}</span>
                </div>
            </div>
            @endforeach
            
            {{-- <div class="col-lg-2 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ asset('theme/images/partner/partner.png') }}" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="{{ asset('theme/images/partner/partner.png') }}"></a>
                    <p>Facility 02</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ asset('theme/images/partner/partner.png') }}" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="{{ asset('theme/images/partner/partner.png') }}"></a>
                    <p>Facility 03</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ asset('theme/images/partner/partner.png') }}" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="{{ asset('theme/images/partner/partner.png') }}"></a>
                    <p>Facility 04</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ asset('theme/images/partner/partner.png') }}" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="{{ asset('theme/images/partner/partner.png') }}"></a>
                    <p>Facility 05</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ asset('theme/images/partner/partner.png') }}" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="{{ asset('theme/images/partner/partner.png') }}"></a>
                    <p>Facility 06</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
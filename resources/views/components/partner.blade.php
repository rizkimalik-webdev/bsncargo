<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3><span>Partner</span> BSN Cargo </h3>
                    <p>Berikut merupakan perusahan partner kami.</p>
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
            
        </div>
    </div>
</section>
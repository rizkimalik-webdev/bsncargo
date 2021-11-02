<section class="testimonial-section" style="background: url({{ asset('public/theme/images/background/testimonial-1.jpg') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Testimonial
                        <span>Client</span>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonial-carousel">
                    @foreach ($clients as $item)
                    <div class="slide-item">
                        <div class="inner-box text-center">
                            <div class="image-box">
                                <figure>
                                    <img loading="lazy" src="{{ asset('public/theme/images/client/'.$item->image) }}" alt="{{ $item->client }}">
                                </figure>
                            </div>
                            <h6>{{ $item->client }}</h6>
                            <p class="mb-0">{{ $item->description }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
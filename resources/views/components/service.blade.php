<section class="feature-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="image-content">
                    <div class="section-title text-center">
                        <h3>Kategori Layanan</span></h3>
                        {{-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam magni in at
                            debitis <br> nam error officia vero tempora alias? Sunt?</p> --}}
                    </div>

                    <div class="row">
                        @foreach ($services as $item)
                        <div class="col-sm-6">
                            <div class="item">
                                <div class="icon-box">
                                    <figure>
                                        <img loading="lazy" height="60"
                                            src="{{ asset('theme/images/services/'.$item->image) }}"
                                            alt="{{ $item->service }}">
                                    </figure>
                                </div>
                                <h3 class="mb-2">{{ $item->service }}</h3>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Gallery
                <span>Pengiriman</span>
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet. qui suscipit atque
                <br>
                fugiat officia corporis rerum eaque neque totam animi, sapiente culpa. Architecto!
            </p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="items-container">
                    @foreach ($gallerySliders as $item)
                    <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <img loading="lazy" src="{{ asset('theme/images/galleries/'.$item->image) }}"
                                    alt="{{ $item->title }}" class="img-fluid">
                                <a data-fancybox="images"
                                    href="{{ url('theme/images/galleries/'.$item->image) }}"></a>
                            </div>
                            <div class="image-content text-center">
                                {{-- <span>{{ $item->title }}</span> --}}
                                <h6>{{ $item->title }}</h6>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
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

                    {{-- <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <img loading="lazy" src="{{ asset('theme/images/gallery/1.png') }}" alt="images"
                                    class="img-fluid">
                            </div>
                            <div class="image-content text-center">
                                <span>Better Service At Low Cost</span>
                                <h6>Germs Protection</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <img loading="lazy" src="{{ asset('theme/images/gallery/1.png') }}" alt="images"
                                    class="img-fluid">
                            </div>
                            <div class="image-content text-center">
                                <span>Better Service At Low Cost</span>
                                <h6>Psycology</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <a href="service.html">
                                    <img loading="lazy" src="{{ asset('theme/images/gallery/1.png') }}"
                                        alt="images" class="img-fluid">
                                </a>
                            </div>
                            <div class="image-content text-center">
                                <span>Better Service At Low Cost</span>
                                <h6>Dormitory</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <img loading="lazy" src="{{ asset('theme/images/gallery/1.png') }}" alt="images"
                                    class="img-fluid">
                            </div>
                            <div class="image-content text-center">
                                <span>Better Service At Low Cost</span>
                                <h6>Germs Protection</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="inner-box">
                            <div class="img_holder">
                                <img loading="lazy" src="{{ asset('theme/images/gallery/1.png') }}" alt="images"
                                    class="img-fluid">
                            </div>
                            <div class="image-content text-center">
                                <span>Better Service At Low Cost</span>
                                <h6>Psycology</h6>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
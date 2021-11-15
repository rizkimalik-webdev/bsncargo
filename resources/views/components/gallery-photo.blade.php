<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3>Photo
                        <span>BSN Cargo</span>
                    </h3>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...
                    </p>
                </div>
            </div>
            @foreach ($galleries as $item)
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="{{ url('theme/images/galleries/'.$item->image) }}" class="img-fluid" alt="{{ $item->title }}">
                    <a data-fancybox="images" href="{{ url('theme/images/galleries/'.$item->image) }}"></a>
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->description }}</p>
                </div>
            </div>
            @endforeach
            
            {{-- <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="images/gallery/gallery-02.jpg" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-02.jpg"></a>
                    <h3>Facility 02</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="images/gallery/gallery-03.jpg" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-03.jpg"></a>
                    <h3>Facility 03</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="images/gallery/gallery-04.jpg" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-04.jpg"></a>
                    <h3>Facility 04</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="images/gallery/gallery-05.jpg" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-05.jpg"></a>
                    <h3>Facility 05</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img loading="lazy" src="images/gallery/gallery-06.jpg" class="img-fluid" alt="gallery-image">
                    <a data-fancybox="images" href="images/gallery/gallery-06.jpg"></a>
                    <h3>Facility 06</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
                </div>
            </div> --}}
        </div>
    </div>
</section>
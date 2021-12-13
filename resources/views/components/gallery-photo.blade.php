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
            
        </div>
    </div>
</section>
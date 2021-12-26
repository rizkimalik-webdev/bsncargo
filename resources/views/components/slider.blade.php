<div class="hero-slider">
    @foreach ($sliders as $item)
    <div class="slider-item" style="background-image:url({{ asset('theme/images/slider/'.$item->image) }})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2" data-animation-in="slideInRight">{{ $item->title }}</h2>
                        <p class="tag-text mb-4" data-animation-in="slideInLeft">{{ $item->description }}</p>
                        {{-- <a href="/service" class="btn btn-main btn-white" data-animation-in="slideInRight"
                            data-duration-in="1.2">shop now</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
<x-app-layout>
    <x-partials.page-title :company="$company" />


    <section class="story">
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-12 story-content">
                    <h2>Tujuan Visi & Misi</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus totam ducimus est vero,
                        officiis,
                        placeat optio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias aliquam
                        nesciunt fugit optio
                        illum aut. consectetur adipisicing elit. Neque assumenda, est quam perferendis
                        expedita autem?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img loading="lazy" src="{{ asset('public/theme/images/about/about-1.jpg') }}" class="responsive"
                        alt="story">
                </div>
                <div class="col-lg-6">
                    <div class="story-content">
                        <h6>Visi</h6>
                        <p>{{ $about->visi }}</p>
                        <h6>Misi</h6>
                        <p>{{ $about->misi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-partner :partners="$partners" />


</x-app-layout>
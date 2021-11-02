<x-app-layout>
    {{-- <x-partials.page-title>
        Faq
    </x-partials.page-title> --}}

    <section class="appoinment-section section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-section">
                        <div class="section-title">
                            <h3>Syarat & Ketentuan</h3>
                        </div>
                        <div class="accordion-holder">
                            <div class="accordion" id="accordionSyarat" role="tablist" aria-multiselectable="true">
                                @foreach ($syarat as $item)
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading-{{ $item->id }}">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-{{ $item->id }}" aria-expanded="false"
                                                aria-controls="collapse-{{ $item->id }}">
                                                {{ $item->title }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-{{ $item->id }}" class="collapse" role="tabpanel"
                                        aria-labelledby="heading-{{ $item->id }}" data-parent="#accordionSyarat">
                                        <div class="card-body">
                                            {{ $item->description }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <br>
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-section">
                        <div class="section-title">
                            <h3>Bisnis & Jasa</h3>
                        </div>
                        <div class="accordion-holder">
                            <div class="accordion" id="accordionBisnis" role="tablist" aria-multiselectable="true">
                                @foreach ($bisnis as $item)
                                <div class="card">
                                    <div class="card-header" role="tab" id="heading-{{ $item->id }}">
                                        <h4 class="card-title">
                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                href="#collapse-{{ $item->id }}" aria-expanded="false"
                                                aria-controls="collapse-{{ $item->id }}">
                                                {{ $item->title }}
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-{{ $item->id }}" class="collapse" role="tabpanel"
                                        aria-labelledby="heading-{{ $item->id }}" data-parent="#accordionBisnis">
                                        <div class="card-body">
                                            {{ $item->description }}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</x-app-layout>
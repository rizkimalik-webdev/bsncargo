<x-admin-layout>
    <div class="container-fluid">
        <h1 class=" mt-4">Bisnis & Jasa</h1>

        <div class="row mb-5">
            <div class="col-lg-12 d-flex justify-content-end">
                <a href="{{ url('/faq/bisnis/create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
            </div>
        </div>
    </div>

    @if (session('status'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            Faq Bisnis /Jasa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionBisnis">
                    @foreach($faqs as $item)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="{{ 'head-'.$item->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-expanded="false"
                                    data-bs-target="#{{ 'collapse-'.$item->id }}" aria-controls="{{ 'collapse-'.$item->id }}">
                                    {{ $item->title }}
                                </button>
                            </h2>
                            <div id="{{ 'collapse-'.$item->id }}" class="accordion-collapse collapse" aria-labelledby="{{ 'head-'.$item->id }}"
                                data-bs-parent="#accordionBisnis">
                                <div class="accordion-body">
                                    {{ $item->description }}

                                    <div class="d-flex justify-content-center mt-2">
                                        <a href="{{ url('/faq/bisnis/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary m-1">Edit</a>
                                        <a href="{{ url('/faq/bisnis/destroy/'.$item->id) }}" class="btn btn-sm btn-danger m-1">Hapus</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                    </div>
                </div>


            </div>
        </div>
    </div>

</x-admin-layout>
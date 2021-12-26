<x-admin-layout>
    <div class="container-fluid">
        <h1 class=" mt-4">Partner Perusahaan</h1>
        <div class="row mb-5">
            <div class="col-lg-12 d-flex justify-content-end">
                <a href="{{ url('/admin_partner/create') }}" class="btn btn-sm btn-primary">Tambah Partner</a>
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
        <div class="card-body">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($partners as $item)
                <div class="col">
                    <div class="card-body">
                        <div class="card">
                            <div class="feature-icon">
                                <img src="{{ asset('theme/images/partner/'.$item->image) }}" class="img-thumbnail"  width="100%" height="225"
                                    alt="{{ $item->partner }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->partner }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
        
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">{{ $item->created_at }}</small>
                                    <div>
                                        <a href="{{ url('/admin_partner/destroy/'.$item->id) }}" class="btn btn-sm btn-danger m-1">Hapus</a>
                                        <a href="{{ url('/admin_partner/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary m-1">Edit</a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        
            </div>
        </div>
    </div>
    
</x-admin-layout>
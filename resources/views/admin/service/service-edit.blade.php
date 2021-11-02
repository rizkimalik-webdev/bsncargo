<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/admin/service') }}">Layanan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    

    <div class="card">
        <div class="card-header">
            Edit Layanan
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/service/update', $services->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="image" class="form-label">Input Gambar</label>
                    <input class="form-control" type="file" id="image" name="image" value="{{ $services->image }}" aria-describedby="imageHelp">
                    <div id="imageHelp" class="form-text">Ukuran gambar max 2Mb.</div>
                </div>
                <div class="mb-3">
                    <label for="service" class="form-label">Nama Layanan</label>
                    <input type="text" class="form-control" id="service" name="service" value="{{ $services->service }}" placeholder="Nama Layanan">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Detail Layanan</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Detail Layanan">{{ $services->description }}</textarea>
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ url('/admin/service') }}" class="btn btn-outline-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>
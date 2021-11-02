<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/admin/client') }}">Client</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Client</li>
        </ol>
    </nav>

    

    <div class="card">
        <div class="card-header">
            Tambah Client
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/client/store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Foto / Logo Client</label>
                    <input class="form-control" type="file" id="image" name="image" aria-describedby="imageHelp">
                    <div id="imageHelp" class="form-text">Ukuran gambar max 2Mb.</div>
                </div>
                <div class="mb-3">
                    <label for="client" class="form-label">Nama Client</label>
                    <input type="text" class="form-control" id="client" name="client" placeholder="Nama Client">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Keterangan / Testimonial</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Keterangan"></textarea>
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="{{ url('/admin/client') }}" class="btn btn-outline-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>
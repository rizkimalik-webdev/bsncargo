<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/admin_gallery') }}">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    

    <div class="card">
        <div class="card-header">
            Edit Gallery
        </div>
        <div class="card-body">
            <form action="{{ url('/admin_gallery/update', $galleries->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="image" class="form-label">Input Gambar</label>
                    <input class="form-control" type="file" id="image" name="image" value="{{ $galleries->image }}" aria-describedby="imageHelp">
                    <div id="imageHelp" class="form-text">Ukuran gambar max 2Mb.</div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $galleries->title }}" placeholder="Judul">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Keterangan">{{ $galleries->description }}</textarea>
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ url('/admin_gallery') }}" class="btn btn-outline-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>
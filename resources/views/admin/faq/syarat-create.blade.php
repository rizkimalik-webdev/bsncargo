<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/admin_faq/syarat') }}">Faq</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    
    <div class="card">
        <div class="card-header">
            Tambah Syarat / Ketentuan
        </div>
        <div class="card-body">
            <form action="{{ url('/admin_faq/syarat/store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Point syarat / ketentuan</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Poin">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Detail Keterangan</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Detail Keterangan"></textarea>
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="{{ url('/admin_faq/syarat') }}" class="btn btn-outline-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>
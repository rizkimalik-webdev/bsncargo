<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/admin/faq/syarat') }}">Faq</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    

    <div class="card">
        <div class="card-header">
            Edit syarat / ketentuan
        </div>
        <div class="card-body">
            <form action="{{ url('/admin/faq/syarat/update', $faqs->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Point syarat / ketentuan</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $faqs->title }}" placeholder="Enter Point">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Detail Keterangan</label>
                    <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Detail Keterangan">{{ $faqs->description }}</textarea>
                </div>

                <div class="pull-right">
                    <button class="btn btn-primary" type="submit">Update</button>
                    <a href="{{ url('/admin/faq/syarat') }}" class="btn btn-outline-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>
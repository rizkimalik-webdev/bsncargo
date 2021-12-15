<x-admin-layout>
    @slot('style')
        <link rel="stylesheet" href="{{ asset('theme/admin/css/dataTables.bootstrap5.min.css') }}">
    @endslot
    <div class="container-fluid">
        <h1 class=" mt-4">Pengiriman</h1>
        {{-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Kategori Layanan Cargo Logistik </li>
            </ol>
        </nav> --}}

        <div class="row mb-5">
            <div class="col-lg-12 d-flex justify-content-end">
                <a href="{{ url('/shipment/create') }}" class="btn btn-sm btn-primary">Tambah Pengiriman</a>
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
            <div class="row">
                {{-- {{ dd($invoices) }} --}}
                {{-- @foreach ($partners as $item)
                <div class="col-lg-2">
                    <div class="card-body">
                        <div class="card">
                            <div class="feature-icon">
                                <img src="{{ asset('theme/images/partner/'.$item->image) }}" class="img-thumbnail"  height="180"
                                    alt="{{ $item->partner }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->partner }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
        
                                <div class="d-flex justify-content-center mt-2">
                                    <a href="{{ url('/partner/'.$item->id.'/edit') }}" class="btn btn-sm btn-primary m-1">Edit</a>
                                    <a href="{{ url('/partner/destroy/'.$item->id) }}" class="btn btn-sm btn-danger m-1">Hapus</a>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach --}}

                <table class="table table-striped DataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>No RESI / Invoice</th>
                            <th>Layanan</th>
                            <th>Jenis Layanan</th>
                            <th>Tanggal Pickup</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shipments as $item)
                            <tr>
                                <td>{{ $item->no_invoice }}</td>
                                <td>{{ $item->service }}</td>
                                <td>{{ $item->service_type }}</td>
                                <td>{{ $item->datetime }}</td>
                                <td>{{ $item->origin }}</td>
                                <td>{{ $item->destination }}</td>
                                <td>{{ $item->status }}</td>
                                <td><button type="button" class="btn btn-sm btn-primary">Primary</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No RESI / Invoice</th>
                            <th>Layanan</th>
                            <th>Jenis Layanan</th>
                            <th>Tanggal Pickup</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>


                @slot('script')
                <script src="{{ asset('theme/admin/js/jquery-3.5.1.min.js') }}"></script>
                <script src="{{ asset('theme/admin/js/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('theme/admin/js/dataTables.bootstrap5.min.js') }}"></script>
                    <script>
                        $(document).ready(function() {
                            $('.DataTable').DataTable();
                        });
                    </script>
                @endslot
            </div>
        </div>
    </div>



</x-admin-layout>

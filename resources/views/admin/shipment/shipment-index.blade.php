<x-admin-layout>
    @slot('style')
        <link rel="stylesheet" href="{{ asset('theme/admin/css/dataTables.bootstrap5.min.css') }}">
    @endslot
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h1>Pengiriman</h1>
                <div>
                    <a href="{{ url('/admin_shipment/create') }}" class="btn btn-sm btn-primary">Tambah Pengiriman</a>
                </div>
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
                <table class="table table-striped DataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>No RESI</th>
                            <th>Layanan</th>
                            <th>Jenis Layanan</th>
                            <th>Tanggal Pickup</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Actions</th>
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
                                <td class="dropdown">
                                    <button type="button" id="btnAction" class="btn btn-sm btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                    <ul class="dropdown-menu" aria-labelledby="btnAction">
                                        <li><a class="dropdown-item"
                                                href="{{ url('/admin_tracking/' . $item->no_invoice) }}"><i
                                                    class="fa fa-route"></i> Tracking</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/admin_shipment/' . $item->no_invoice) }}"><i class="fa fa-info-circle"></i> View
                                                Detail</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="{{ url('/admin_shipment/destroy/' . $item->no_invoice) }}"><i
                                                    class="fa fa-trash-alt"></i> Hapus</a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No RESI</th>
                            <th>Layanan</th>
                            <th>Jenis Layanan</th>
                            <th>Tanggal Pickup</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

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
</x-admin-layout>

<x-admin-layout>
    @slot('style')
        <link rel="stylesheet" href="{{ asset('theme/admin/css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('theme/plugins/datetimepicker/jquery.datetimepicker.min.css') }}">
    @endslot

    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h3>Tracking No RESI <b>{{ $shipment->no_invoice }}</b>.</h3>
            </div>
        </div>
    </div>

    @if (session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card my-2">
        <div class="card-header">
            Form Tracking No RESI.
        </div>
        <div class="card-body">
            <form action="{{ url('/admin_tracking/store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="border rounded mx-1 my-2 p-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="no_invoice" class="form-label">No Resi / AWB / Invoice</label>
                                <input type="number" class="form-control" id="no_invoice" name="no_invoice"
                                    min="6" placeholder="No RESI" value="{{ $shipment->no_invoice }}" readonly>
                            </div>
                            <div class="card mb-2 border-0">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{ asset('theme/images/' . $logistic->image) }}"
                                            class="img-thumbnail" alt="{{ $logistic->company }}">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body p-0">
                                            <h4>Logistik</h4>
                                            <h5 class="card-title">{{ $logistic->company }}</h5>
                                            <h6>{{ $logistic->city }}</h6>
                                            <p class="card-text"><small
                                                    class="text-muted">{{ $logistic->address }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            
                            <div class="mb-2">
                                <label for="status" class="form-label">Status Pengiriman</label>
                                <select class="form-select" id="status" name="status" value="{{ $tracking[0]->status }}">
                                    <option value="{{ $tracking[0]->status }}" selected>{{ $tracking[0]->status }}</option>
                                    @foreach ($status as $item)
                                        <option value="{{ $item->status_name }}">{{ $item->status_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="datetime" class="form-label">Waktu</label>
                                <input type="text" class="form-control datetimepicker" id="datetime" name="datetime" required>
                            </div>
                            <div class="mb-2">
                                <label for="description" class="form-label">Keterangan (optional)</label>
                                <textarea class="form-control" id="description" name="description" rows="2"
                                    placeholder="Keterangan"></textarea>
                            </div>
                            <div class="d-flex flex-row-reverse p-1 mt-4">
                                @if ($tracking[0]->status == 'RECEIVED')
                                    <button class="btn btn-success" type="button" disabled>RECEIVED</button>
                                @else
                                    <button class="btn btn-primary" type="submit">Update</button>
                                @endif
                                <a href="{{ url('/admin_shipment') }}" class="btn btn-outline-primary mx-2">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card my-2">
        <div class="card-body">
            <div class="row">
                <table class="table table-striped DataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th>No RESI</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tracking as $item)
                            <tr>
                                <td>{{ $item->no_invoice }}</td>
                                <td>
                                    @if ($item->status == 'PICK-UP')
                                        <span class="badge bg-secondary">{{ $item->status }}</span>
                                    @elseif ($item->status == 'ON-DELIVERY')
                                        <span class="badge bg-primary">{{ $item->status }}</span>
                                    @elseif ($item->status == 'RECEIVED')
                                        <span class="badge bg-success">{{ $item->status }}</span>
                                    @elseif ($item->status == 'CANCEL')
                                        <span class="badge bg-danger">{{ $item->status }}</span>
                                    @elseif ($item->status == 'RE-DELIVERY')
                                        <span class="badge bg-warning">{{ $item->status }}</span>
                                    @endif
                                </td>
                                <td>{{ $item->datetime }}</td>
                                <td>{{ $item->description }}</td>
                                <td class="dropdown">
                                    <button type="button" id="btnAction" class="btn btn-sm btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">Action</button>
                                    <ul class="dropdown-menu" aria-labelledby="btnAction">
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
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
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
        <script src="{{ asset('theme/plugins/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('.DataTable').DataTable();

                $.datetimepicker.setLocale('en');
                $('.datetimepicker').datetimepicker({
                    mask: '9999/19/39 29:59',
                    format: 'Y/m/d H:i',
                    step: 1
                });
            });
        </script>
    @endslot
</x-admin-layout>

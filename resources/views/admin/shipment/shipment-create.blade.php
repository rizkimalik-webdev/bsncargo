<x-admin-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="{{ url('/admin_shipment') }}">Pengiriman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Pengiriman</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            Form Pengiriman
        </div>
        <div class="card-body">
            <form action="{{ url('/admin_shipment/store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="border rounded mx-1 my-2 p-2">
                    <div class="row">
                        <div class="col-lg-6">
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
                                            <input type="hidden" class="form-control" id="logistic_id" name="logistic_id"
                                                value="{{ $logistic->id }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="no_invoice" class="form-label">No Resi / AWB / Invoice</label>
                                <input type="number" class="form-control" id="no_invoice" name="no_invoice"
                                    min="6" placeholder="No RESI" required>
                            </div>
                            <div class="mb-2">
                                <label for="datetime" class="form-label">Tanggal Pickup</label>
                                <input type="date" class="form-control" id="datetime" name="datetime" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded mx-1 my-2 p-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Detail Pengirim</h5>
                            <input type="hidden" id="shipper_id" name="shipper_id">
                            <div class="mb-2">
                                <label for="shipper_name" class="form-label">Nama Pengirim</label>
                                <input type="text" class="form-control" id="shipper_name" name="shipper_name"
                                    placeholder="Nama Pengirim" required>
                            </div>
                            <div class="mb-2">
                                <label for="shipper_telp" class="form-label">No. Telp</label>
                                <input type="number" class="form-control" id="shipper_telp" name="shipper_telp"
                                    placeholder="No Telp Pengirim" required>
                            </div>
                            <div class="mb-2">
                                <label for="shipper_city" class="form-label">Kota Asal</label>
                                <input type="text" class="form-control" id="shipper_city" name="shipper_city"
                                    placeholder="Kota Asal" required>
                            </div>
                            <div class="mb-2">
                                <label for="shipper_address" class="form-label">Alamat</label>
                                <textarea class="form-control" id="shipper_address" name="shipper_address" rows="3"
                                    placeholder="Alamat"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5>Detail Penerima</h5>
                            <input type="hidden" id="receiver_id" name="receiver_id">
                            <div class="mb-2">
                                <label for="receiver_name" class="form-label">Nama Penerima</label>
                                <input type="text" class="form-control" id="receiver_name" name="receiver_name"
                                    placeholder="Nama Penerima" required>
                            </div>
                            <div class="mb-2">
                                <label for="receiver_telp" class="form-label">No. Telp</label>
                                <input type="number" class="form-control" id="receiver_telp" name="receiver_telp"
                                    placeholder="No. Telp Penerima" required>
                            </div>
                            <div class="mb-2">
                                <label for="receiver_city" class="form-label">Kota Tujuan</label>
                                <input type="text" class="form-control" id="receiver_city" name="receiver_city"
                                    placeholder="Kota Tujuan" required>
                            </div>
                            <div class="mb-2">
                                <label for="receiver_address" class="form-label">Alamat</label>
                                <textarea class="form-control" id="receiver_address" name="receiver_address" rows="3"
                                    placeholder="Alamat"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border rounded mx-1 my-2 p-2">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="product" class="form-label">Jenis Barang</label>
                                <input type="text" class="form-control" id="product" name="product"
                                    placeholder="Jenis Barang">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="amount" class="form-label">Jumlah</label>
                            <div class="input-group mb-2">
                                <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah">
                                <select class="form-select" id="unit" name="unit">
                                    <option value="" selected>Satuan</option>
                                    @foreach ($satuan as $item)
                                        <option value="{{ $item->unit }}">{{ $item->detail }} ( {{ $item->unit }} )</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="driver" class="form-label">Driver</label>
                                <input type="text" class="form-control" id="driver" name="driver"
                                    placeholder="Nama Driver">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="no_truck" class="form-label">No Truck</label>
                                <input type="text" class="form-control" id="no_truck" name="no_truck"
                                    placeholder="No Truck">
                            </div>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-6">
                            <label for="service" class="form-label">Layanan Pengiriman</label>
                            <div class="mb-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="service"
                                        value="cargo-darat" required>
                                    <label class="form-check-label">Cargo Darat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="service"
                                        value="cargo-laut" required>
                                    <label class="form-check-label">Cargo Laut</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="service"
                                        value="cargo-udara" required>
                                    <label class="form-check-label">Cargo Udara</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="service_type" class="form-label">Jenis Pengiriman</label>
                            <div class="mb-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="service_type" value="express" required>
                                    <label class="form-check-label">Express</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="service_type" value="reguler" required>
                                    <label class="form-check-label">Reguler</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="service_type" value="charter" required>
                                    <label class="form-check-label">Charter</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="description" class="form-label">Keterangan (optional)</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                    placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-2">
                                <label for="file_invoice" class="form-label">Attachment Invoice (optional)</label>
                                <input class="form-control" type="file" id="file_invoice" name="file_invoice"
                                    aria-describedby="imageHelp">
                                <div id="imageHelp" class="form-text">File max 2Mb.</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex flex-row-reverse p-1 my-4">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <a href="{{ url('/admin_shipment') }}" class="btn btn-outline-primary mx-2">Kembali</a>
                </div>
            </form>
        </div>
    </div>


</x-admin-layout>

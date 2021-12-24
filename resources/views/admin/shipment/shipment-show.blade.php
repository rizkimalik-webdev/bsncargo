<x-admin-layout>
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <h3>Detail No RESI <b>{{ $shipment->no_invoice }}</b>.</h3>
            </div>
        </div>
    </div>

    <div class="card my-2">
        <div class="card-header">
            Form No RESI.
        </div>
        <div class="card-body">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-2">
                            <label for="no_invoice" class="form-label">No Resi / AWB / Invoice :</label>
                            <div>
                                <h2>{{ $shipment->no_invoice }}</h2>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Pengiriman: </label>
                            <div>
                                @if ($tracking->status == 'PICK-UP')
                                    <span class="badge bg-secondary">{{ $tracking->status }}</span>
                                @elseif ($tracking->status == 'ON-DELIVERY')
                                    <span class="badge bg-primary">{{ $tracking->status }}</span>
                                @elseif ($tracking->status == 'RECEIVED')
                                    <span class="badge bg-success">{{ $tracking->status }}</span>
                                @elseif ($tracking->status == 'CANCEL')
                                    <span class="badge bg-danger">{{ $tracking->status }}</span>
                                @elseif ($tracking->status == 'RE-DELIVERY')
                                    <span class="badge bg-warning">{{ $tracking->status }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="datetime" class="form-label">Waktu :</label>
                            <div>
                                <h6 class="fst-italic">{{ $shipment->datetime }}</h6>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="description" class="form-label">Keterangan :</label>
                            <div>
                                <p class="fst-italic">{{ $shipment->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border rounded mx-1 my-2 p-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h5 class="font-size-15 mb-3">Detail Pengirim (Asal):</h5>
                            <h5 class="font-size-14 mb-2">{{ $shipper->shipper_name }}</h5>
                            <p class="mb-1">{{ $shipper->shipper_telp }}</p>
                            <p class="mb-1">{{ $shipper->shipper_city }}</p>
                            <p class="mb-1">{{ $shipper->shipper_address }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h5 class="font-size-15 mb-3">Detail Penerima (Tujuan):</h5>
                            <h5 class="font-size-14 mb-2">{{ $receiver->receiver_name }}</h5>
                            <p class="mb-1">{{ $receiver->receiver_telp }}</p>
                            <p class="mb-1">{{ $receiver->receiver_city }}</p>
                            <p class="mb-1">{{ $receiver->receiver_address }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border rounded mx-1 my-2 p-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <h5 class="font-size-15 mb-3">Detail Pengirim (Asal):</h5>
                            <h5 class="font-size-14 mb-2">{{ $shipper->shipper_name }}</h5>
                            <p class="mb-1">{{ $shipper->shipper_telp }}</p>
                            <p class="mb-1">{{ $shipper->shipper_city }}</p>
                            <p class="mb-1">{{ $shipper->shipper_address }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <h5 class="font-size-15 mb-3">Detail Penerima (Tujuan):</h5>
                            <h5 class="font-size-14 mb-2">{{ $receiver->receiver_name }}</h5>
                            <p class="mb-1">{{ $receiver->receiver_telp }}</p>
                            <p class="mb-1">{{ $receiver->receiver_city }}</p>
                            <p class="mb-1">{{ $receiver->receiver_address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-admin-layout>

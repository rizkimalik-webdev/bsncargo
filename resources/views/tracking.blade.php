<x-app-layout>
    @slot('style')
        <link href="{{ asset('theme/css/timeline.css') }}" rel="stylesheet">
    @endslot
    <section class="story">
        <div class="container">
            <h1 class="text-primary">Cek Resi</h1>
            <div class="card mx-10">
                <div class="card-body">
                    <form action="{{ url('/tracking/search') }}" method="POST">
                        @csrf
                        <div class="input-group p-5">
                            <input type="text" id="no_invoice" name="no_invoice" class="form-control"
                                placeholder="Masukan No Resi" aria-label="No Resi" aria-describedby="btn_cek_resi">
                            <button type="submit" class="btn btn-primary" id="btn_cek_resi"><i class="fa fa-route"></i>
                                Lacak</button>
                        </div>
                    </form>
                    @if (session('status'))
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>

            @if ($shipment)
            <div class="card mx-10">
                <div class="card-header">
                    <h6>Detail Pengiriman</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">No Resi / AWB / Invoice :</label>
                                <div>
                                    <h6>{{ $shipment->no_invoice }}</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Layanan :</label>
                                <div>
                                    <h6>{{ $shipment->service }}</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Jenis :</label>
                                <div>
                                    <h6>{{ $shipment->service_type }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">Tgl. Pickup :</label>
                                <div>
                                    <h6>{{ $shipment->datetime }}</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Asal :</label>
                                <div>
                                    <h6>{{ $shipment->origin }}</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Tujuan :</label>
                                <div>
                                    <h6>{{ $shipment->destination }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-2">
                                <label class="form-label">No Truck :</label>
                                <div>
                                    <h6>{{ $shipment->no_truck }}</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Driver :</label>
                                <div>
                                    <h6>{{ $shipment->driver }}</h6>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Barang :</label>
                                <div>
                                    <h6>{{ $shipment->product }} - {{ $shipment->amount }} {{ $shipment->unit }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- <label>{{ $shipment->no_invoice }}</label> --}}
                </div>
            </div>
            @endif
            
            @if (count($tracking) > 0)
            <div class="card mx-10">
                <div class="card-header">
                    <h6>History Pengiriman</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-11">
                            <ul class="cbp_tmtimeline">
                                    @foreach ($tracking as $item)
                                    <li>
                                        <time class="cbp_tmtime" datetime="{{ $item->datetime }}">
                                            <span>{{ $item->time }}</span>
                                            <span>{{ $item->date }}</span>
                                        </time>
                                        <div class="cbp_tmicon bg-blue"> <i class="fa fa-truck-moving fa-sm"></i></div>
                                        <div class="cbp_tmlabel">
                                            <h2>{{ $item->status }}</h2>
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                {{-- <li>
                                    <time class="cbp_tmtime" datetime="2017-11-04T18:30"><span
                                            class="hidden">25/12/2017</span> <span>Now</span></time>
                                    <div class="cbp_tmicon bg-blue"><i class="fa fa-truck-moving fa-sm"></i></div>
                                    <div class="cbp_tmlabel empty"> <span>No Activity</span> </div>
                                </li>
                                <li>
                                    <time class="cbp_tmtime" datetime="2017-11-03T13:22"><span>01:22 PM</span>
                                        <span>Yesterday</span></time>
                                    <div class="cbp_tmicon bg-blue"> <i class="fa fa-truck-moving fa-sm"></i></div>
                                    <div class="cbp_tmlabel">
                                        <h2><a href="javascript:void(0);">Job Meeting</a></h2>
                                        <p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
                                    </div>
                                </li>
                                <li>
                                    <time class="cbp_tmtime" datetime="2017-10-22T12:13"><span>12:13 PM</span>
                                        <span>Month ago</span></time>
                                    <div class="cbp_tmicon bg-blue"><i class="fa fa-truck-moving fa-sm"></i></div>
                                    <div class="cbp_tmlabel">
                                        <h2><a href="javascript:void(0);">Arlind Nushi</a> <span>checked in at</span> <a
                                                href="javascript:void(0);">Laborator</a></h2>
                                        <blockquote>Great place, feeling like in home.</blockquote>
                                    </div>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </section>

</x-app-layout>
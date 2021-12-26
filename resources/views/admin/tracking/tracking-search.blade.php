<x-admin-layout title="Tracking">
    <div class="row">
        <h1 class="my-4">Lacak Pengiriman</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/admin_tracking/search') }}" method="POST">
                @csrf
                <div class="input-group p-5">
                    <input type="text" id="no_invoice" name="no_invoice" class="form-control" placeholder="Masukan No Resi" aria-label="No Resi" aria-describedby="btn_cek_resi">
                    <button type="submit" class="btn btn-primary" id="btn_cek_resi"><i class="fa fa-route"></i> Tracking</button>
                </div>
            </form>
            @if (session('status'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

</x-admin-layout>

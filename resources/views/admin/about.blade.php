<x-admin-layout>
    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="{{ asset('theme/images/'.$company->image) }}" alt=""
                width="80" height="80">
            <h2>{{ $company->company }}</h2>
            <p>{{ $company->detail }}</p>
        </div>

        @if (session('status'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ url('/about/update', $about->company_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Visi
                        </div>
                        <div class="card-body">

                            <div class="form-floating">
                                <textarea class="form-control" name="visi" placeholder="Visi" id="visi"
                                    style="height: 400px">{{ $about->visi }}</textarea>
                                <label for="visi">Visi</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Misi
                        </div>
                        <div class="card-body">

                            <div class="form-floating">
                                <textarea class="form-control" name="misi" placeholder="Misi" id="misi"
                                    style="height: 400px">{{ $about->misi }}</textarea>
                                <label for="misi">Misi</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <button class="w-100 btn btn-primary btn-sm" type="submit">Update</button>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </form>

    </div>
</x-admin-layout>
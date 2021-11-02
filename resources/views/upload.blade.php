<x-app-layout>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                        @endforeach
                    </div>
                    @endif

                    <div class="contact-form">
                        <form action="{{ url('/upload/proses') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="col-lg-12">
                                <b>File Gambar</b><br />
                                <input type="file" name="file" class="form-control main" placeholder="file" required>
                            </div>

                            <div class="col-lg-12">
                                <textarea name="keterangan" rows="10" class="form-control main"
                                    placeholder="Your message"></textarea>
                            </div>
                            <div class="col-md-12 text-right">
                                <button class="btn btn-style-one" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="1%">File</th>
                                <th>Keterangan</th>
                                <th width="1%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($files as $item)
                            <tr>
                                <td><img width="150px" src="{{ url('/uploads/'.$item->file) }}"></td>
                                <td>{{$item->keterangan}}</td>
                                <td><a class="btn btn-danger" href="/upload/hapus/{{ $item->id }}">HAPUS</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
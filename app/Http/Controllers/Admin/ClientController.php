<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::get();
        return view('admin.client.client-index', compact('clients'));
    }


    public function create()
    {
        return view('admin.client.client-create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'client' => 'required',
            'description' => 'required',
        ]);

        //? nama data file
        $image = $request->file('image');
        $nama_image = time().'_'.$image->getClientOriginalName();
        // $nama_image = $image->hashName();

        //? folder file diupload
        $tujuan_upload = 'public/theme/images/client';
        $image->move($tujuan_upload, $nama_image);

        Client::create([
            'client' => $request->client,
            'description' => $request->description,
            'image' => $nama_image,
        ]);

        return redirect('/admin_client')->with('status', 'Berhasil tambah Data.');
    }


    public function edit(Client $clients)
    {
        return view('admin.client.client-edit', compact('clients'));
    }


    public function update(Request $request, Client $clients)
    {
        $request->validate([
            'image' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'client' => 'required',
            'description' => 'required'
        ]);

        //? get data by ID
        $client = Client::findOrFail($clients->id);

        if ($request->file('image') == "") {

            $client->update([
                'client' => $request->client,
                'description' => $request->description
            ]);
        } 
        else {
            //hapus old image
            File::delete('public/theme/images/client/' . $client->image);

            //upload new image
            $image = $request->file('image');
            $nama_image = time().'_'.$image->getClientOriginalName();
            // $nama_image = $image->hashName();
            
            //? folder file diupload
            $tujuan_upload = 'public/theme/images/client';
            $image->move($tujuan_upload, $nama_image);
            // $image->storeAs($tujuan_upload, $nama_image);


            $client->update([
                'image' => $nama_image,
                'client' => $request->client,
                'description' => $request->description
            ]);
        }

        if($client){
            //? redirect dengan pesan sukses
            return redirect('/admin_client')->with('status','Data Berhasil Diupdate!');
        }else{
            //! redirect dengan pesan error
            return redirect('/admin_client')->with('status','Data Gagal Diupdate!');
        }
    }

    public function destroy(Client $clients)
    {
        // hapus file
        $client = Client::where('id', $clients->id)->first();
        File::delete('public/theme/images/client/' . $client->image);

        // hapus data
        Client::where('id', $client->id)->delete();

        return redirect()->back();
    }
}

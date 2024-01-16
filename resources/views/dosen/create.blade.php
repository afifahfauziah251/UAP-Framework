@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dosen</h6>
    </div>
    
    <div class="container">
        
        <div class="row">
        <div class="col-10">
        <div class="card">
            <div class="card-body">
                <form action="/insertdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                      arta-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nip</label>
                        <input type="number" name="nip" class="form-control" id="exampleInputEmail1"
                        arta-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukkan Foto</label>
                        <input type="file" name="foto" class="form-control" >
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
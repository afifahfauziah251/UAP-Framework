@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
    </div>
    
    <div class="card-body">
        <a href="/tambahdosen" class="btn btn-primary">Tambah +</a>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
                
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Foto</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;    
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <img src="{{ asset('fotodosen/'. $row->foto) }}" alt="" style="width: 40px;">
                        </td>
                        <td>{{ $row->nip }}</td>
                        {{-- <td>{{ $row->email }}</td>
                        <td>{{ $row->umur }}</td> --}}
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
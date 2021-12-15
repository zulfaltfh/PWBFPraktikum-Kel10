@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-2">Detail Barang</h1>
            <a href="{{ url('/input-DetailBarang') }}"><button class="btn btn-primary btn-sm" style="float: left">Tambah Data</button></a><br><br>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detail Barang
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Ukuran</th>
                            <th>Warna</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detbar as $data)
                            <tr>
                                <td class="text-wrap text-center">{{ $data+ 1 }}</td>
                                <td>{{ $data->modelbarang->nama_bar }}</td>
                                <td>{{ $data->Ukuran->id }}</td>
                                <td>{{ $data->Warna->warna }}</td>
                                <td class="text-wrap"><a href="#" class="btn btn-primary">Edit</a></td>
                                <td>
                                    <a href="{{ url('/destroy-Barang',$v->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
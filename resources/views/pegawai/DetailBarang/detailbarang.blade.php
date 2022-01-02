@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-2">Detail Barang</h1>
            <form action="{{ url('/input-DetailBarang') }}" method="get">
                <input type="hidden" name="id" value="{{ $request->id }}">
                <button type="submit" class="btn btn-primary btn-sm")>Add</button>
            </form>
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
                                <td>{{ $data->modelbarang->nama_bar }}</td>
                                <td>{{ $data->Ukuran->ukuran }}</td>
                                <td>{{ $data->Warna->warna }}</td>
                                <td class="text-wrap">
                                <form action="{{ url('/edit-DetailBarang') }}" method="get">
                                    <input hidden value="{{ $data->id }}" name="id">
                                    <input hidden value="{{ $data->kode_bar }}" name="kode_bar">
                                    <input hidden value="{{ $data->Ukuran->ukuran }}" name="ukuran">
                                    <input hidden value="{{ $data->Warna->warna }}" name="warna">
                                <button type="submit" class="btn btn-primary btn-sm")>edit</button>
                                </form>
                                </td>
                                <td>
                                    <a href="{{ url('/destroy-DetailBarang',$data->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
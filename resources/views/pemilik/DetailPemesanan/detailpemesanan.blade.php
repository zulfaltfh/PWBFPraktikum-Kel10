@extends('layout/layoutpemilik')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-2">Table Detail Pemesanan</h1>
            <form action="{{ url('/input-DetailPemesanan') }}" method="get">
                <input hidden value="{{ $request->id_pesan }}" name="id_pesan">
                <button type="submit" class="btn btn-primary btn-sm")>Tambah Data</button>
            </form>
            <br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Barang
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>ID Pemesanan</th>
                            <th>Jumlah Pesan</th>
                            <th>Harga</th>
                            <th>Tanggal Pesan</th>
                            <th>Barang</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id_pesan  }}</td>
                            <td>{{ $item->jumlah_up }}</td>
                            <td>{{ $item->harga_up }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->modelbarang->nama_bar  }}</td>
                            <td>
                            <form action="{{ url('/edit-DetailPemesanan') }}" method="get">
                                <input hidden value="{{ $item->id }}" name="id">
                                <input hidden value="{{ $item->id_pesan }}" name="id_pesan">
                                <input hidden value="{{ $item->jumlah_up }}" name="jumlah_up">
                                <input hidden value="{{ $item->harga_up }}" name="harga_up">
                                <input hidden value="{{ $item->kode_bar }}" name="kode_bar">
                                <button type="submit" class="btn btn-info btn-sm")>edit</button>
                            </form>
                            </td>
                            @csrf
                            @method('Delete')
                            <td>
                                <a href="{{ url('/destroy-DetailPemesanan',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-2">Table Barang</h1>
            <a href="{{ url('/input-Barang') }}"><button class="btn btn-primary btn-sm" style="float: left">Tambah Data</button></a><br><br>
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
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Jenis</th>
                            <th>Lapor</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($table_barang as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_bar }}</td>
                            <td>{{ $item->stock_barang }}</td>
                            <td>{{ $item->harga_beli_bar }}</td>
                            <td>{{ $item->harga_jual_bar }}</td>
                            <td>{{ $item->jenisBarang->jenis_barang }}</td>
                            <td>
                              <button class="btn btn-primary btn-sm">Pesan</button>
                            </td>
                            <td>
                            <form action="{{ url('/edit-Barang') }}" method="get">
                                <input hidden value="{{ $item->id }}" name="id">
                                <input hidden value="{{ $item->nama_bar }}" name="nama_bar">
                                <input hidden value="{{ $item->stock_barang }}" name="stock_barang">
                                <input hidden value="{{ $item->harga_beli_bar }}" name="harga_beli_bar">
                                <input hidden value="{{ $item->harga_jual_bar }}" name="harga_jual_bar">
                                <button type="submit" class="btn btn-info btn-sm")>edit</button>

                            </form>
                            </td>
                            @csrf
                            @method('Delete')
                            <td>
                                <a href="{{ url('/destroy-Barang',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
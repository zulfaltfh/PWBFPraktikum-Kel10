@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 mb-2">Table Detail Penerimaan</h1>
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
                            <th>ID Penerimaan</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                            <th>Tanggal Terima</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($data as $item)
                        <tr>
                            <td>{{ $item->id_terima }}</td>
                            <td>{{ $item->modelbarang->nama_bar }}</td>
                            <td>{{ $item->harga_his }}</td>
                            <td>{{ $item->jumlah_his }}</td>
                            <td>{{ $item->sub_total }}</td>
                            <td>{{ $item->created_at }}</td>
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
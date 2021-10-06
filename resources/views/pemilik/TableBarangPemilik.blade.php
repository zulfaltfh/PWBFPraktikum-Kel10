@extends('layout/layoutpemilik')
//folder.file
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Barang</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    @foreach($table_barang as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_bar }}</td>
                            <td>{{ $item->stock_barang }}</td>
                            <td>{{ $item->harga_beli_bar }}</td>
                            <td>{{ $item->harga_jual_bar }}</td>
                            <td><button>Pesan</button></td>
                        </tr>                                       
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
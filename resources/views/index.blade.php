@extends('layout.layout')
//folder.file
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Stok Barang</h1>
    </div>

    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok</th>
            </tr>
        </thead>
        @foreach($table_barang as $item)
        <tbody>
            <th>{{ $item->kode_bar }}</th>
            <th>{{ $item->nama_bar }}</th>
            <th>{{ $item->stock_barang }}</th>
        </tbody>
    @endforeach
    </table>

</main>

@endsection
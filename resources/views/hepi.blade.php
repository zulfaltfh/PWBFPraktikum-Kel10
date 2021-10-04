@extends('layout.layout')
//folder.file
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
    </div>

    <table>
    @foreach($table_barang as $item)
        <thead>
            <th>{{ $item->kode_bar }}</th>
            <th>{{ $item->nama_bar }}</th>
            <th>{{ $item->stock_barang }}</th>
        </thead>
    @endforeach
    </table>

</main>

@endsection
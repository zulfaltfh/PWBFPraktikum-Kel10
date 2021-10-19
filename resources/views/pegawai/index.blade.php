@extends('layout/layoutpegawai')
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
                            {{-- <th>Jenis</th> --}}
                            <th>Lapor</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    {{-- @foreach($table_barang1 as $items) --}}
                    @foreach($table_barang as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_bar }}</td>
                            <td>{{ $item->stock_barang }}</td>
                            <td>{{ $item->harga_beli_bar }}</td>
                            <td>{{ $item->harga_jual_bar }}</td>
                            {{-- <td>{{ $items->jenis_barang }}</td> --}}
                            <td><button class="btn btn-primary btn-sm">Pesan</button></td>
                            <form action="{{ url('/edit_barang_pegawai',$item->id) }}" method="POST">
                            <td><button type="submit" class="btn btn-info btn-sm")>edit</button></td>
                            </form>
                            <form action="{{ url('/destroy_barang_pegawai',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></td>
                            </form>
                        </tr>                                       
                    </tbody>
                    @endforeach
                    {{-- @endforeach --}}
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
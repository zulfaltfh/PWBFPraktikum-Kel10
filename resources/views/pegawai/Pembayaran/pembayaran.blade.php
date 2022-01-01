@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-2">Tabel Pembayaran</h1>
        <!-- <a href="{{ url('/input-Pembayaran') }}"><button class="btn btn-primary btn-sm" style="float: left">Tambah Data</button></a> --><br><br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Pembayaran
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                        <th>Kode</th>
                        <th>Kode Penerimaan</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Total Pembayaran</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->id_terima }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->total_bayar }}</td>
                        <td>
                            <form action="{{ url('/edit-Pembayaran') }}" method="get">
                                <input hidden value="{{ $item->id }}" name="id">
                                <input hidden value="{{ $item->id_terima }}" name="id_terima">
                                <input hidden value="{{ $item->tgl_bayar }}" name="tgl_bayar">
                                <input hidden value="{{ $item->total_bayar}}" name="total_bayar">
                                <button type="submit" class="btn btn-info btn-sm")>edit</button>
                            </form>
                        </td>
                        @csrf
                        @method('Delete')
                        <td>
                            <a href="{{ url('/destroy-Pembayaran',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-2">Tabel Penerimaan</h1>
        <a href="{{ url('/input-Penerimaan') }}"><button class="btn btn-primary btn-sm" style="float: left">Tambah Data</button></a><br><br>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Supplier
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                        <th>Id</th>
                        <th>Penerima</th>
                        <th>Pengirim</th>
                        <th>Total Harga</th>
                        <th>Status Terima</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->User->nama_user }}</td>
                        <td>{{ $item->Supplier->nama_sup }}</td>
                        <td>{{ $item->total_harga }}</td>
                        <td>{{ $item->status_terima }}</td>
                        {{--  <td>
                            <form action="{{ url('/DetailPenerimaan') }}" method="GET">
                                <input hidden value="{{ $item->id }}" name="id">
                                <button class="btn btn-warning btn-sm">Lihat</button></a>
                            </form>
                        </td>  --}}
                        <td>
                        <form action="{{ url('/edit-Penerimaan') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id">
                            <input hidden value="{{ $item->User->nama_user }}" name="nama_user">
                            <input hidden value="{{ $item->Supplier->nama_sup }}" name="nama_sup">
                            <input hidden value="{{ $item->total_harga }}" name="total_harga">
                            <input hidden value="{{ $item->status_terima }}" name="status_terima">
                            <button type="submit" class="btn btn-info btn-sm")>edit</button>
                        </form>
                        </td>
                        @csrf
                        @method('Delete')
                        <td>
                            <a href="{{ url('/destroy-Penerimaan',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
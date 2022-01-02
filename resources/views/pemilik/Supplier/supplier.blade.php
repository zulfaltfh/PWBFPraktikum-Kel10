@extends('layout/layoutpemilik')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-2">Tabel Supplier</h1>
        <a href="{{ url('/input-Supplier') }}"><button class="btn btn-primary btn-sm" style="float: left">Tambah Data</button></a><br><br>
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
                        <th>Perusahaan</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Telepon</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($supplier as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_sup }}</td>
                        <td>{{ $item->alamat_sup }}</td>
                        <td>{{ $item->Kota->nama_kota }}</td>
                        <td>{{ $item->telp_sup }}</td>
                        <td>
                        <form action="{{ url('/edit-Supplier') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id">
                            <input hidden value="{{ $item->nama_sup }}" name="nama_sup">
                            <input hidden value="{{ $item->alamat_sup }}" name="alamat_sup">
                            <input hidden value="{{ $item->id_kota }}" name="id_kota">
                            <input hidden value="{{ $item->telp_sup }}" name="telp_sup">
                            <button type="submit" class="btn btn-info btn-sm")>edit</button>

                        </form>
                        </td>
                        @csrf
                        @method('Delete')
                        <td>
                            <a href="{{ url('/destroy-Supplier',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
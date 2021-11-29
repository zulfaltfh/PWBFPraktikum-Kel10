@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">User</h1>
            <a href="{{ url('/input-User') }}"><button class="btn btn-primary btn-sm" style="float: left">Input User</button></a><br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    User
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>ID User</th>
                            <th>Nama User</th>
                            <th>Alamat User</th>
                            <th>Telpon User</th>
                            <th>Role User</th>
                            <th>Kota User</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($table_user as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_user }}</td>
                            <td>{{ $item->alamat_user }}</td>
                            <td>{{ $item->telp_user }}</td>
                            <td>{{ $item->Role->role }}</td>
                            <td>{{ $item->Kota->nama_kota }}</td>
                            <td>
                                <form action="{{ url('/edit-User') }}" method="get">
                                <input hidden value="{{ $item->id }}" name="id">
                                <input hidden value="{{ $item->username }}" name="username">
                                <input hidden value="{{ $item->nama_user }}" name="nama_user">
                                <input hidden value="{{ $item->alamat_user }}" name="alamat_user">
                                <input hidden value="{{ $item->telp_user }}" name="telp_user">
                                <input hidden value="{{ $item->id_kota }}" name="telp_user">
                                <input hidden value="{{ $item->id_role }}" name="telp_user">
                                <button type="submit" class="btn btn-info btn-sm")>edit</button>
                            </form>
                            </td>
                            <td>
                                <a href="{{ url('/destroy-User',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </a>
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
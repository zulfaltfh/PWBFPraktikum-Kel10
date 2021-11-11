@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kota</h1>
            <a href="{{ url('/input_Kota_pegawai') }}"><button class="btn btn-primary btn-sm" style="float: left">Input Kota</button></a><br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kota
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>ID Kota</th>
                            <th>Nama Kota</th>
                            <th>Delete Kota</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($a as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_kota }}</td>
                            <td>
                                <a href="{{ url('/destroy_Kota_pegawai',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
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
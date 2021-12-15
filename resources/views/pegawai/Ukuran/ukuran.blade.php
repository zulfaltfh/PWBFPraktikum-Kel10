@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-2">Tabel Ukuran</h1>
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
                        <th>Ukuran</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ukuran }}</td>
                        @csrf
                        @method('Delete')
                        <td>
                            <a href="{{ url('/destroy-Ukuran',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
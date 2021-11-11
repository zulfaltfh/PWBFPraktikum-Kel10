@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Supplier</h1>
        <a href="{{ url('/input_barang_pegawai') }}"><button class="btn btn-primary btn-sm" style="float: left">Input Barang</button></a><br><br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Supplier
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                        <th>Kode</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($table_barang as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        
                        <td>
                          <button class="btn btn-primary btn-sm">Pesan</button>
                        </td>
                        <td>
                        <form action="{{ url('/edit_barang_pegawai') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id">
                            
                            <button type="submit" class="btn btn-info btn-sm")>edit</button>

                        </form>
                        </td>
                        @csrf
                        @method('Delete')
                        <td>
                            <a href="{{ url('/destroy_barang_pegawai',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
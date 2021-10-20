@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Role</h1>
        <a href="{{ url('/input_Role_pegawai') }}"><button class="btn btn-primary btn-sm" style="float: left">Input Role</button></a><br><br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    
                    <thead>
                        <tr>
                            <th>ID Role</th>
                            <th>Nama Role</th>
                            <th>Delete Role</th>
                        </tr>
                    </thead>
                    @foreach($a as $item)
                    <tbody>
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->jenis_role }}</td>
                            <form action="{{ url('/destroy_Role_pegawai',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <td><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></td>
                            </form>
                        </tr>                                       
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
@extends('layout/layoutpegawai')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-2">Tabel Pemesanan</h1>
        <a href="{{ url('/input-Pemesanan') }}"><button class="btn btn-primary btn-sm" style="float: left">Tambah Data</button></a><br>
        
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
                        <th>ID</th>
                        <th>Pemesan</th>
                        <th>Supplier</th>
                        <th>Tanggal dan Waktu Pesan</th>
                        <th>Status Pesan</th>
                        <th>Detail</th>
                        <th>Isi Penerimaan</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->User->username }}</td>
                        <td>{{ $item->Supplier->nama_sup }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                            <?php if ($item->status_pesan==1) 
                            {
                                echo "Sudah Dikonfirmasi";
                            } 
                            else 
                            {
                                echo "Belum Dikonfirmasi";
                            }
                        ?>
                        </td>
                        <td>
                        <!-- <form action="{{ url('/input-DetailPemesanan') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id_pesan">
                            <button type="submit" class="btn btn-warning btn-sm")>Isi</button>
                        </form> -->
                        <form action="{{ url('/DetailPemesanan') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id_pesan">
                            <button type="submit" class="btn btn-warning btn-sm")>Lihat</button>
                        </form>
                        </td>
                        <td>
                        <form action="{{ url('/input-Penerimaan') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id_pem">
                            <input type="hidden" value="{{ $item->id_sup }}" name="id_sup">
                            <button type="submit" class="btn btn-primary btn-sm")>Isi Penerimaan</button>
                        </form>
                        </td>
                        <td>
                        <form action="{{ url('/edit-Pemesanan') }}" method="get">
                            <input hidden value="{{ $item->id }}" name="id">
                            <button type="submit" class="btn btn-info btn-sm")>edit</button>
                        </form>
                        </td>
                        @csrf
                        @method('Delete')
                        <td>
                            <a href="{{ url('/destroy-Pemesanan',$item->id) }}"><button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button></a>
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
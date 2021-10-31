@extends('layout/layoutpegawai')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <a href="{{ url('/input_barang_pegawai') }}"><button class="btn btn-primary btn-sm" style="float: left">Input Barang</button></a><br><br>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Barang
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                            <th>Kode</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Jenis</th>
                            <th>Lapor</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                         @foreach($table_barang as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_bar }}</td>
                            <td>{{ $item->stock_barang }}</td>
                            <td>{{ $item->harga_beli_bar }}</td>
                            <td>{{ $item->harga_jual_bar }}</td>
                            <td>
                                <?php 
                                // $z = App\Models\jenisBarang::all()->where('id'->$item->id_jb);
                                // echo $z->jenis_barang;
                                if ($item->id_jb==1){echo "Baju";} 
                                if ($item->id_jb==2){echo "Celana";} 
                                if ($item->id_jb==3){echo "Topi";} 
                                ?>
                            </td>
                            <td>
                              <button class="btn btn-primary btn-sm">Pesan</button>
                            </td>
                            <!-- <td>
                              <a href="{{ url('/edit_barang_pegawai',$item->id) }}"><button type="submit" class="btn btn-info btn-sm")>edit</button>
                              </a>
                            </td> -->
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
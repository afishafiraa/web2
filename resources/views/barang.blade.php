@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
			  <h1>Table Barang</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Expire Date</th>
                    <th>Tanggal Produksi</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $id = 1; @endphp
                @foreach($data as $d)
                    <tr>
                        <td>{{ $id++ }}</td>
                        <td>{{ $d->nama_barang }}</td>		<!--ngambil suatu data di database-->
                        <td>{{ $d->stok }}</td>
                        <td>{{ $d->harga }}</td>
                        <td>{{ $d->expired_date }}</td>
                        <td>{{ $d->tanggal_produksi }}</td>
                        <td>
                            <form action="{{ route('barang.destroy', $d->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('barang.update',$d->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
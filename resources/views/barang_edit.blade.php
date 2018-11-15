@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Barang</h1>
            <hr>
            <form action="{{ route('barang.update') }}" method="post">
                {{ csrf_field() }}
				<div class="form-group">
                    <label for="nama_barang">Nama Barang:</label>
                    <input type="text" class="form-control" id="usr" name="nama_barang">
                </div>
				<div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="text" class="form-control" id="usr" name="stok">
                </div>
				<div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" class="form-control" id="usr" name="harga">
                </div>
                <div class="form-group">
                    <label for="expired_date">Expired Date:</label>
                    <input type="date" class="form-control" id="usr" name="expired_date">
                </div>
                <div class="form-group">
                    <label for="tanggal_produksi">Tanggal Produksi:</label>
                    <input type="date" class="form-control" id="usr" name="tanggal_produksi">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection
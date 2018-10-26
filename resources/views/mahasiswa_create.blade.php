@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Mahasiswa</h1>
            <hr>
            <form action="{{ route('mahasiswa.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
				<div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="usr" name="email">
                </div>
				<div class="form-group">
                    <label for="nohp">No Hp:</label>
                    <input type="text" class="form-control" id="usr" name="nohp">
                </div>
				<div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="usr" name="alamat">
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
@extends('layouts.template')
@section('judulh1','Admin - peminjam')

@section('konten')
<div class="col-md-6">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data peminjam</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('peminjam.store') }}" method="POST">
            @csrf

            <div class=" card-body">
                <div class="form-group">
                    <label for="jumlah">jumlah</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tanggal_pinjam">tanggal pinjam</label>
                    <input type="datetime" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
                </div>

                <div class="form-group">
                    <label for="tanggal_kembalian">tanggal kembalian</label>
                    <input type="date" class="form-control" id="tanggal_kembalian" name="tanggal_kembalian" placeholder="">
                </div>
                <div class="form-group">
                    <label for="kondisi">kondisi peminjam</label>
                    <textarea id="kondisi" name="kondisi" class=" form-control" rows="4"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">ubah</button>
            </div>
        </form>
    </div>
</div>
@endsection

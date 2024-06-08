@extends('layouts.template')
@section('judulh1','Admin - barang')

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
            <h3 class="card-title">Tambah Data barang</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf

            <div class=" card-body">
                <div class="form-group">
                    <label for="nama_barang">nama barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="">
                </div>
                <div class="form-group">
                    <label for="stok_barangs">Stok barang</label>
                    <input type="number" class="form-control" id="stok_barangs" name="stok_barangs">
                </div>

                <div class="form-group">
                    <label for="jenis_barang">jenis barang</label>
                    <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tanggalpembelian">tanggal pembelian</label>
                    <input type="date" class="form-control" id="tanggalpembelian" name="tanggalpembelian">
                </div>
                <div class="form-group">
                        <label>lokasi</label>
                        <select class="form-control" name="lokasi_barang">
                       <option value="active">Pilih lokasi</option>
                          <option value="gudang A">gudang A</option>
                          <option value="gudang B">gudang B</option>
                          <option value="gudang C">gudang C</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="kondisi">kondisi barang</label>
                    <textarea id="kondisi" name="kondisi" class=" form-control" rows="4"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

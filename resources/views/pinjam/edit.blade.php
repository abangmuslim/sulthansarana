@extends('layouts.template')
@section('judulh1','Admin - pinjam')

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
            <h3 class="card-title">Tambah Data pinjam</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('pinjam.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>nama peminjam</label>
                    <select class="form-control" name="peminjam_id">
                        @foreach($peminjam as $dt )
                        <option value="{{ $dt->id }}">{{ $dt->nama_peminjam }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label>nama barang</label>
                    <select class="form-control" name="barang_id">
                        @foreach($barang as $dt )
                        <option value="{{ $dt->id }}">{{ $dt->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label>nama petugas</label>
                    <select class="form-control" name="user_id">
                        @foreach($user as $dt )
                        <option value="{{ $dt->id }}">{{ $dt->nama_user }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">jumlah pinjam</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="">
                </div>
                <div class="form-group">
                    <label for="tanggal_peminjam">tanggal pinjam</label>
                    <input type="date" class="form-control" id="tanggal_peminjam" name="tanggal_peminjam">
                </div>

                <div class="form-group">
                    <label for="tanggal_kembalian">tanggal kembalian</label>
                    <input type="date" class="form-control" id="tanggal_kembalian" name="tanggal_kembalian" placeholder="">
                </div>
                <div class="form-group">
                <label>kondisi</label>
                    <select class="form-control" name="kondisi">
                        @foreach($barang as $dt )
                        <option value="{{ $dt->id }}">{{ $dt->kondisi }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label>keterangan</label>
                        <select class="form-control" name="keterangan">
                       <option value="active"></option>
                          <option value="sudah dikembalikan">sudah dikembalikan</option>
                          <option value="belum dikembalikan">belum dikembalikan</option>
                        </select>
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



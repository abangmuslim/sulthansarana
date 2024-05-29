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

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Ubah Data peminjam</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route('peminjam.update',$peminjam->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="nama_peminjam">Nama peminjam</label>
                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="adress">adress</label>
                    <textarea id="adress" name="adress" class=" form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <textarea id="jabatan" name="jabatan" class=" form-control"
                        rows="4"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning float-right">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

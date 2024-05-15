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
 
    <div class="card card-primary"> 
        <div class="card-header"> 
            <h3 class="card-title">Data barang</h3> 
        </div> 
        <!-- /.card-header --> 
 
 
        <div class=" card-body"> 
            <table> 
                <tr> 
                    <th>Nama barang</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->nama_barang }}</td> 
                </tr> 
                <tr> 
                    <th>jenis barang</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->jenis_barang }}</td> 
                </tr> 
                <tr> 
                    <th>stok barang </th> 
                    <td>:</td> 
                    <td>{{ $data[0]->stok_barang }}</td> 
                </tr> 
                <tr> 
                    <th>tanggalpembelian</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->tanggalpembelian }}</td> 
                </tr> 
                <tr> 
                    <th>lokasi barang</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->lokasi_barang }}</td> 
                </tr> 
                <tr> 
                    <th>kondisi</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->kondisi }}</td> 
                </tr> 
            </table> 
        </div> 
        <!-- /.card-body --> 
 
    </div> 
</div> 
@endsection
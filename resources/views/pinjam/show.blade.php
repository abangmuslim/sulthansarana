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
 
    <div class="card card-primary"> 
        <div class="card-header"> 
            <h3 class="card-title">Data pinjam</h3> 
        </div> 
        <!-- /.card-header --> 
 
 
        <div class=" card-body"> 
            <table> 
                <tr> 
                    <th>nama_peminjam</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->nama_peminjam }}</td> 
                </tr> 
                <tr> 
                    <th>nama_barang</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->nama_barang }}</td> 
                </tr> 
                <tr> 
                    <th>jumlah</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->jumlah }}</td> 
                </tr> 
                <tr> 
                    <th>tanggal_peminjam</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->tanggal_peminjam }}</td> 
                </tr> 
                <tr> 
                    <th>tanggal_kembalian </th> 
                    <td>:</td> 
                    <td>{{ $data[0]->tanggal_kembalian }}</td> 
                </tr> 
                <tr> 
                    <th>kondisi</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->kondisi }}</td> 
                </tr> 
                <tr> 
                    <th>keterangan</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->keterangan }}</td> 
                </tr> 
            </table> 
        </div> 
        <!-- /.card-body --> 
 
    </div> 
</div> 
@endsection


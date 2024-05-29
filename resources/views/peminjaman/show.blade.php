@extends('layouts.template') 
@section('judulh1','Admin - peminjaman') 
 
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
            <h3 class="card-title">Data peminjaman</h3> 
        </div> 
        <!-- /.card-header --> 
 
 
        <div class=" card-body"> 
            <table> 
                <tr> 
                    <th>jumlah</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->jumlah }}</td> 
                </tr> 
                <tr> 
                    <th>tanggal_pinjam</th> 
                    <td>:</td> 
                    <td>{{ $data[0]->tanggal_pinjam }}</td> 
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
            </table> 
        </div> 
        <!-- /.card-body --> 
 
    </div> 
</div> 
@endsection
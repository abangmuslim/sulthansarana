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

    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Data peminjam</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method=" POST">
            @csrf
            @method('PUT')
            <div class=" card-body">
                <div class="form-group">
                    <label for="nama_peminjam">Nama peminjam</label>
                    <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder=""
                        value="{{ $peminjam->nama }}" disabled>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $peminjam->email }}"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="phone">phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $peminjam->phone }}"
                        disabled>
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <textarea id="address" name="address" class=" form-control" rows="4"
                        disabled>{{ $peminjam->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <textarea id="jabatan" name="jabatan" class=" form-control"
                        rows="4">{{ $peminjam->jabatan }}</textarea>
                </div>
            </div>
            
            <!-- /.card-body -->

            <div class="card-footer">

            </div>
        </form>
    </div>
</div>

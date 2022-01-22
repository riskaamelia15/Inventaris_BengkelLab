@extends('adminlte::page')

@section('title','Peminjaman')

@section('content_header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Barang</h1>
            </div>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                   <form action="{{route('pinjam.update',$pinjam->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select name="id_barang" class="form-control @error('id_barang') is-invalid @enderror" disabled>
                                @foreach($barang as $data)
                                    <option value="{{$data->id}}">{{$data->nama_barang}}</option>
                                @endforeach
                            </select>
                            @error('id_barang')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" value="{{$pinjam->nama}}" class="form-control @error('nama') is-invalid @enderror">
                             @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">No Telp</label>
                            <input type="number" name="telp" value="{{$pinjam->telp}}" class="form-control @error('telp') is-invalid @enderror">
                             @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="qty" value="{{$pinjam->qty}}" class="form-control @error('qty') is-invalid @enderror">
                             @error('qty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal pinjam</label>
                            <input type="date" name="tgl_pinjam" value="{{$pinjam->tgl_pinjam}}" class="form-control @error('tgl_pinjam') is-invalid @enderror">
                             @error('tgl_pinjam')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





@section('css')

@endsection

@section('js')

@endsection



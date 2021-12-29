@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Barang
                    <a href="{{route('barang.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Barang</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Tanggal Masuk</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($barang as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->peminjam}}</td>
                                <td>{{ $data->barang->nama }}</td>
                                <td>{{$data->telp}}</td>
                                <td>{{$data->qty}}</td>
                                <td>{{$data->tgl_pinjam}}</td>
                                <td>
                                    <form action="{{route('barang.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('barang.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('barang.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
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


@extends('Layout.Main')

@section('title', 'Jenis Produk')

@section('Content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Member</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Jenis Produk</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a href="{{route('jenis_produk.create')}}" class="btn btn-success float-sm-right"><i
                        class="far fa-plus-square"></i> Tambah Jenis Produk</a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        @if (session('Success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-check"></i> Success</h5>
            {{ session('Success') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Jenis Produk</h3>
                <div class="card-tools">
                    {{$JenisProduks->links()}}
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Jenis Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($JenisProduks->count() == 0)
                        <tr>
                            <td colspan="5" align="center">No Data</td>
                        </tr>
                        @else
                        @foreach ($JenisProduks as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->NamaJenisProduk}}</td>
                            <td>
                                <div class="row">
                                    <input type="submit" form="Hapus" class="btn btn-danger col-md-12 m-1" onclick="return confirm('Yakin untuk menghapus Jenis Produk ini?')" value="Hapus">
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>
<form action="{{route('jenis_produk.destroy', $data->id)}}" method="post" id="Hapus">
    @csrf
    @method('DELETE')
</form>
@endsection

@push('JS')

@endpush
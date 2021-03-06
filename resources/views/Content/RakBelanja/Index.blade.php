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
                    <li class="breadcrumb-item active">Rak Belanja</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a href="{{route('rak-belanja.create')}}" class="btn btn-success float-sm-right"><i
                        class="far fa-plus-square"></i> Tambah Rak Belanja</a>
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
                <h3 class="card-title">Daftar Rak Belanja</h3>
                <div class="card-tools">
                    {{$Rakbelanja->links()}}
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Produk</th>
                            <th>Merek Produk</th>
                            <th>Jenis Produk</th>
                            <th>Persedian Produk</th>
                            <th>Harga Produk</th>
                            <th>Deskripsi Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($Rakbelanja->count() == 0)
                        <tr>
                            <td colspan="8" align="center">No Data</td>
                        </tr>
                        @else
                        @foreach ($Rakbelanja as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->NamaProduk}}</td>
                            <td>{{$data->MerkProduk}}</td>
                            <td>{{$data->JenisProdukRela->NamaJenisProduk}}</td>
                            <td>{{$data->PersediaanProduk}}</td>
                            <td>{{$data->HargaProduk}}</td>
                            <td>{{$data->DeskripsiProduk}}</td>
                            <td>
                                <div class="row">
                                    <form name="Hapus" action="{{route('rak-belanja.destroy', $data->id)}}" method="post" id="Hapus{{$data->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <input type="submit" form="Hapus{{$data->id}}" class="btn btn-danger col-md-12 m-1" onclick="return confirm('Yakin untuk menghapus Jenis Produk ini?')" value="Hapus">
                                    <a href="{{route('rak-belanja.edit', $data->id)}}" class="btn btn-success col-md-12 m-1">Ubah</a>
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
@endsection

@push('JS')

@endpush

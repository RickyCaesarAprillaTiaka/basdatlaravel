@extends('Layout.Main')

@section('title', 'Jenis Produk | Tambah Jenis Produk')

@section('Content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Jenis Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('member.index')}}">Jenis Produk</a></li>
                    <li class="breadcrumb-item active">Tambah Jenis Produk</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-12">

            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Jenis Produk</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('jenis_produk.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="NamaJenisProduk">Nama Jenis Produk</label>
                        <input name="NamaJenisProduk" type="text" class="form-control" id="NamaJenisProduk"
                            placeholder="Nama Jenis Produk">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah Jenis Produk</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>
@endsection

@push('JS')

@endpush
@extends('Layout.Main')

@section('title', 'Rak Belanja | Tambah Rak Belanja')

@section('Content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Rak Belanja</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('rak-belanja.index')}}">Rak Belanja</a></li>
                    <li class="breadcrumb-item active">Tambah Rak Belanja</li>
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
                <h3 class="card-title">Tambah Rak Belanja</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('belanja.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="NamaProduk">Nama Produk</label>
                        <div class="row">
                            <div class="col-5">
                                <input name="NamaProduk" type="text" class="form-control" id="NamaProduk"
                                placeholder="Nama Produk">
                            </div>
                            <div class="col-0">
                                <i>X</i>
                            </div>
                            <div class="col-4">
                                <input name="TotalProduk" type="number" class="form-control" id="TotalProduk"
                                placeholder="Total Produk">
                            </div>
                            <div class="col-2">
                                <button class="btn btn-warning">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tambah Rak Belanja</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>
@endsection

@push('JS')

@endpush
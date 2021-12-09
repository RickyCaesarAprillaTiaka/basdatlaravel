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
            <form action="{{route('rak-belanja.update', $RakBelanja->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="NamaProduk">Nama Produk</label>
                        <input name="NamaProduk" type="text" class="form-control" id="NamaProduk"
                            placeholder="Nama Produk" value="{{$RakBelanja->NamaProduk}}">

                    </div>
                    <div class="form-group">
                        <label for="MerkProduk">Merek Produk</label>
                        <input name="MerkProduk" type="text" class="form-control" id="NamaProduk"
                            placeholder="Merek Produk" value="{{$RakBelanja->MerkProduk}}">
                            
                    </div>
                    <div class="form-group">
                        <label for="JenisProduk">Jenis Produk</label>
                        <select name="JenisProduk" id="JenisProduk" class="form-control">
                            @foreach ($JenisProduks as $data)
                                <option value="{{$data->id}}">{{$data->NamaJenisProduk}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="PersediaanProduk">Persediaan Produk</label>
                        <input name="PersediaanProduk" type="text" class="form-control" id="PersediaanProduk"
                            placeholder="Persediaan Produk" value="{{$RakBelanja->PersediaanProduk}}">
                            
                    </div>
                    <div class="form-group">
                        <label for="HargaProduk">Harga Produk</label>
                        <input name="HargaProduk" type="text" class="form-control" id="HargaProduk"
                            placeholder="Harga Produk" value="{{$RakBelanja->HargaProduk}}">
                            
                    </div>
                    <div class="form-group">
                        <label for="DeskripsiProduk">Deskripsi Produk</label>
                        <textarea name="DeskripsiProduk" class="form-control" cols="30" rows="10"
                            style="resize: none;" id="DeskripsiProduk">{{$RakBelanja->DeskripsiProduk}}</textarea>
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
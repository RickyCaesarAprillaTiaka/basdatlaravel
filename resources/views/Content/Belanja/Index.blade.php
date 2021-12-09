@extends('Layout.Main')

@section('title', 'Jenis Produk')

@section('Content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Belanja</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Belanja</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a href="{{route('belanja.create')}}" class="btn btn-success float-sm-right"><i
                        class="far fa-plus-square"></i> Tambah Belanja</a>
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
                <h3 class="card-title">Daftar Belanja</h3>
                <div class="card-tools">
                    {{$StrukPembelanjaan->links()}}
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Total Pembayaran</th>
                            <th>Jenis Pembayaran</th>
                            <th>Deskripsi Pembelanjaan</th>
                            <th>Member</th>
                            <th>Tanggal Struk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($StrukPembelanjaan->count() == 0)
                        <tr>
                            <td colspan="7" align="center">No Data</td>
                        </tr>
                        @else
                        @foreach ($StrukPembelanjaan as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->TotalPembayaran}}</td>
                            <td>{{$data->JenisPembayaran}}</td>
                            <td>{{$data->DeskripsiPembelanjaan}}</td>
                            <td>{{$data->StrukMemberRela->NamaLengkapMember}}</td>
                            <td>{{date('d/m/Y', strtotime($data->created_at))}}</td>
                            <td>
                                <div class="row">
                                    <form name="Hapus" action="{{route('belanja.destroy', $data->id)}}" method="post" id="Hapus{{$data->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <input type="submit" form="Hapus{{$data->id}}" class="btn btn-danger col-md-12 m-1" onclick="return confirm('Yakin untuk menghapus Jenis Produk ini?')" value="Hapus">
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

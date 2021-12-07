@php
    use Carbon\Carbon;
@endphp
@extends('Layout.Main')

@section('title', 'Member')

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
                    <li class="breadcrumb-item active">Member</li>
                </ol>
            </div><!-- /.col -->
            <div class="col-sm-12">
                <a href="{{route('member.create')}}" class="btn btn-success float-sm-right"><i
                        class="far fa-plus-square"></i> Tambah Member</a>
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
                <h3 class="card-title">Daftar Member</h3>
                <div class="card-tools">
                    {{$Members->links()}}
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Lengkap Member</th>
                            <th>No. Handphone Member</th>
                            <th style="width: 30%;">Alamat Lengkap Member</th>
                            <th>Level Member</th>
                            <th>Tanggal Daftar Member</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($Members->count() == 0)
                        <tr>
                            <td colspan="5" align="center">No Data</td>
                        </tr>
                        @else
                        @foreach ($Members as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->NamaLengkapMember}}</td>
                            <td>{{$data->NoHandphoneMember}}</td>
                            <td>{{$data->AlamatLengkapMember}}</td>
                            <td class="row"><span class="col-12 badge rounded-pill bg-@if ($data->LevelMember == 'Silver'){{'secondary'}}@elseif ($data->LevelMember == 'Gold'){{'warning'}}@else{{'primary'}}@endif">{{$data->LevelMember}}</span></td>
                            <td>{{date('d/m/Y', strtotime($data->created_at))}}</td>
                            <td>
                                <div class="row">
                                    <input type="submit" form="Hapus" class="btn btn-danger col-md-12 m-1" onclick="return confirm('Yakin untuk menghapus member ini?')" value="Hapus">
                                    <a href="{{route('member.edit', $data->id)}}" class="btn btn-success col-md-12 m-1">Ubah</a>
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
<form action="{{route('member.destroy', $data->id)}}" method="post" id="Hapus">
    @csrf
    @method('DELETE')
</form>
@endsection

@push('JS')

@endpush
@extends('Layout.Main')

@section('title', 'Member | Ubah Member')

@section('Content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ubah Member</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('member.index')}}">Member</a></li>
                    <li class="breadcrumb-item active">Ubah Member</li>
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
                <h3 class="card-title">Ubah Member</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('member.update', $Member->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="NamaLengkapMember">Nama Lengkap Member</label>
                        <input name="NamaLengkapMember" type="text" class="form-control" id="NamaLengkapMember"
                            placeholder="Nama Lengkap Member" value="{{$Member->NamaLengkapMember}}">
                    </div>
                    <div class="form-group">
                        <label for="NoHandphoneMember">No Handphone Member</label>
                        <input name="NoHandphoneMember" type="text" class="form-control" id="NoHandphoneMember"
                            placeholder="No Handphone Member" value="{{$Member->NoHandphoneMember}}">
                    </div>
                    <div class="form-group">
                        <label for="AlamatLengkapMember">Alamat Lengkap Member</label>
                        <textarea name="AlamatLengkapMember" class="form-control" cols="30" rows="10"
                            style="resize: none;" id="AlamatLengkapMember">{{$Member->AlamatLengkapMember}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="LevelMember">Level Member</label>
                        <select name="LevelMember" id="LevelMember" class="form-control">
                            <option>Silver</option>
                            <option>Gold</option>
                            <option>Diamond</option>
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Ubah Member</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</section>
@endsection

@push('JS')

@endpush
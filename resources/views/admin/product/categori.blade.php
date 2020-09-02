@extends('layouts.admin')

@section('content')
@php
$pageName = "Kategori";
@endphp

@include('layouts.component.allert')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>{{$pageName}}</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">

            </div>
        </div>
    </div>
</div>
<div class="card bg-white p-4">
    <!-- Card header -->
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-8">
                <h5 class="mb-0">Variant </h5>
            </div>
            <div class="col-4 text-right">
                <a href="#!" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#tambahVariant">Tambah
                    Kategori</a>
            </div>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah Produk</th>

                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($categories as $kategori)
            <tr>
                <th scope="row">1</th>
                <td>{{$kategori->namaKategori}}</td>
                <td>{{$kategori->jmlPost}}</td>

                <td>
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-danger"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item btn-doneList" href="" data-toggle="modal"
                                data-target="#tambahVariant">
                                <i class="fa fa-edit mr-1 text-success"></i>
                                Edit
                            </a>
                            <a href="" type="button" class="dropdown-item btn-removeList">
                                <i class="fa fa-trash mr-2 text-danger"></i>
                                Hapus
                            </a>
                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <td colspan="5">Belum ada data kategori</td>
        @endforelse

        </tbody>
    </table>
</div>
<!-- Modal tambah variant -->
<div class="modal fade" id="tambahVariant" tabindex="-1" role="dialog" aria-labelledby="tambahVariant"
    aria-hidden="true" style="top:10%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form  action="{{ route('tambahKategori') }}" id="field_variant_form" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Kategori</label>
                        <input name="kategori" type="text" class="form-control" id="jenis_variant" placeholder="Nama Kategori">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button form="field_variant_form" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
@endsection
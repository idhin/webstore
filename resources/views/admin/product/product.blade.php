@extends('layouts.admin')

@section('content')
@php
$pageName = "Produk";
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
                <ol class="breadcrumb text-right">
                    <li class="active">{{$pageName}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-12 p-4 bg-white">
    <div class="row">
        <div class="col-6">
            <div class="input-group">
                <div class="input-group-btn">
                    <button class="btn btn-danger">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
                <input type="text" id="input1-group2" name="input1-group2" placeholder="cari produk"
                    class="form-control">
            </div>
        </div>
        <div class="col-6 text-right">
            <span class="text-secondary">22 Produk</span>
            <a href="/admin/product/manage" class="btn btn-danger rounded">
                <i class="fa fa-plus"></i>
                Tambah Produk</a>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <div class="custom-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="custom-nav-all-tab" data-toggle="tab" href="#custom-nav-all"
                        role="tab" aria-controls="custom-nav-all" aria-selected="true">Semua</a>

                    <a class="nav-item nav-link" id="custom-nav-public-tab" data-toggle="tab" href="#custom-nav-public"
                        role="tab" aria-controls="custom-nav-public" aria-selected="false">Publik</a>

                    <a class="nav-item nav-link" id="custom-nav-hiden-tab" data-toggle="tab" href="#custom-nav-hiden"
                        role="tab" aria-controls="custom-nav-hiden" aria-selected="false">Tersembunyi</a>

                    <a class="nav-item nav-link" id="custom-nav-schedule-tab" data-toggle="tab"
                        href="#custom-nav-schedule" role="tab" aria-controls="custom-nav-schedule"
                        aria-selected="false">Dijadwalkan</a>

                    <a class="nav-item nav-link" id="custom-nav-access-tab" data-toggle="tab" href="#custom-nav-access"
                        role="tab" aria-controls="custom-nav-access" aria-selected="false">Link Akses</a>
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                    aria-labelledby="custom-nav-all-tab">
                    @component('admin/product/component/topmenu',[])
                    @endcomponent
                    <table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">SKU</th>
            <th scope="col">Stok</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($barangs as $index => $b)
        <tr>
            <th>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
            </th>
            <th scope="row">{{$index+1}}</th>
            <td>
                <img src="<?php echo asset("storage/app/$b->namaKategori")?>" class="img-rounded" alt="Gambar Produk"
                    width="100px">
            </td>
            <td>
                <a href="/admin/product/namaproduct">
                    {{$b->namaBarang}}
                </a>
            </td>
            <td>-</td>
            <td>{{$b->stok}}</td>
            <td>{{$b->image}}</td>
            <td>{{$b->hargaCoret}}</td>
            <td>
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-danger"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item btn-doneList" href="">
                            <i class="fa fa-eye mr-1 text-primary"></i>
                            Lihat
                        </a>
                        <a class="dropdown-item btn-doneList" href="/admin/product/manage">
                            <i class="fa fa-edit mr-1 text-success"></i>
                            Edit
                        </a>
                        <a class="dropdown-item btn-doneList" href="">
                            <i class="fa fa-print mr-1 text-info"></i>
                            Laporan
                        </a>
                        <a class="dropdown-item btn-doneList" href="">
                            <i class="fa fa-copy mr-1 text-warning"></i>
                            Duplikat
                        </a>
                        <a href="" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-trash mr-2 text-danger"></i>
                            Hapus
                        </a>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
                </div>


                <div class="tab-pane fade" id="custom-nav-public" role="tabpanel"
                    aria-labelledby="custom-nav-public-tab">
                    @component('admin/product/component/topmenu',[])
                    @endcomponent
                    @component('admin/product/component/table_product',[])
                    @endcomponent
                </div>

                <div class="tab-pane fade" id="custom-nav-hiden" role="tabpanel" aria-labelledby="custom-nav-hiden-tab">
                    @component('admin/product/component/topmenu',[])
                    @endcomponent
                    @component('admin/product/component/table_product',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-schedule" role="tabpanel"
                    aria-labelledby="custom-nav-schedule-tab">
                    @component('admin/product/component/topmenu',[])
                    @endcomponent
                    @component('admin/product/component/table_product',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-access" role="tabpanel"
                    aria-labelledby="custom-nav-access-tab">
                    @component('admin/product/component/topmenu',[])
                    @endcomponent
                    @component('admin/product/component/table_product',[])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
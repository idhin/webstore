@extends('layouts.admin')

@section('content')
@php
$pageName = "Katalog";
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
    <div class="col-sm-8 text-right p-2">
        <a href="/admin/product/catalog/manage" class="btn btn-danger">
            <i class="fa fa-plus"></i>
            Tambah Katalog</a>
    </div>
</div>
<div class="card bg-white">
    @component('admin/product/component/topmenu_catalog',[])
    @endcomponent
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th scope="col">No</th>
                <th scope="col">Nama Katalog</th>
                <th scope="col">Jumlah Produk</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    </div>
                </th>
                <td>1</td>
                <td>Katalog Celamis</td>
                <td>12</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-danger"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item btn-doneList" href="/admin/product/catalog/show">
                                <i class="fa fa-eye mr-1 text-primary"></i>
                                Detail
                            </a>
                            <a class="dropdown-item btn-doneList" href="/admin/product/catalog/manage">
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

        </tbody>
    </table>
</div>
@endsection
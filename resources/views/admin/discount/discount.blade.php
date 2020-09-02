@extends('layouts.admin')

@section('content')
@php
$pageName = "Diskon";
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
    <div class="col-sm-8 pt-2">
        <div class="page-header float-right">
            <div class="page-title">
                <span class="text-secondary">22 Diskon</span>
                <a href="/admin/discount/manage" class="btn btn-danger rounded">
                    <i class="fa fa-plus"></i>
                    Diskon</a>
            </div>
        </div>
    </div>
</div>

<div class="col-12 p-4 bg-white">

    @component('admin/product/component/topmenu_catalog',[])
    @endcomponent
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th scope="col">No</th>
                <th scope="col">Nama Diskon</th>
                <th scope="col">Kode Kupon</th>
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
                <td>Promo Lebaran</td>
                <td>#LBRN234</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-danger"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item btn-doneList" href="/admin/discount/manage">
                                <i class="fa fa-edit mr-1 text-success"></i>
                                Edit
                            </a>
                            <a class="dropdown-item btn-doneList" href="/admin/discount/report">
                                <i class="fa fa-print mr-1 text-primary"></i>
                                Laporan
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
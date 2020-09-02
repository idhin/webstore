@extends('layouts.admin')

@section('content')
@php
$pageName = "Draft";
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
                <input type="text" id="input1-group2" name="input1-group2" placeholder="cari transaksi"
                    class="form-control">
            </div>
        </div>
        <div class="col-6 text-right">
            <a href="/admin/order/manage" class="btn btn-danger rounded">
                <i class="fa fa-plus"></i>
                Order</a>
        </div>
    </div>
</div>
<div class="card">
    <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th scope="col">No</th>
                <th scope="col">Nama Transaksi</th>
                <th scope="col">Total</th>
                <th scope="col">Pelanggan</th>
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
                <th scope="row">1</th>
                <td>
                    <a href="/admin/order/manage">
                        #TRSK_NabilaTrf
                    </a>
                </td>
                <td>Rp.150.000</td>
                <td>Khulafaur Rasyidin</td>
                <td>
                    <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-danger"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item btn-doneList" href="/admin/order/manage">
                                <i class="fa fa-edit mr-1 text-success"></i>
                                Edit
                            </a>
                            <a class="dropdown-item btn-doneList" href="">
                                <i class="fa fa-print mr-1 text-info"></i>
                                Tetapkan
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
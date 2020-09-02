@extends('layouts.admin')

@section('content')
@php
$pageName = "Checkout Tertinggal";
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

        </div>
        <div class="col-6 text-right">
            <a href="/admin/order/checkout/abandoned/setting" class="btn btn-danger rounded">
                <i class="fa fa-cog"></i>
                Pengaturan</a>
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
                <th scope="col">Hubungi</th>
                <th scope="col">Waktu Dibuat</th>
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
                <td><i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i></td>
                <td>Rabu, 22 Jul 2020 6:40 pm</td>
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
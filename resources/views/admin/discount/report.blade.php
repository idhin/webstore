@extends('layouts.admin')

@section('content')
@php
$pageName = "Laporan Diskon / Nama Diskon";
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
                <span class="text-secondary">22 Total Pemakaian</span>
            </div>
        </div>
    </div>
</div>

<div class="col-12 p-4 bg-white">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Waktu Penggunaan</th>
                <th scope="col">Order</th>
                <th scope="col">Pelanggan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>21 July 2020, 10:14 PM</td>
                <td>
                    <a href="/admin/order/show/namaorder">
                        200707000001 - Rosyi Zakiyyah
                    </a>
                </td>
                <td>
                    <a href="/admin/customer/profile">
                        Aprilia
                    </a>
                </td>
            </tr>
            <tr>
                <td>21 July 2020, 10:14 PM</td>
                <td>
                    <a href="/admin/order/show/namaorder">
                        200707000001 - Rosyi Zakiyyah
                    </a>
                </td>
                <td>
                    <a href="/admin/customer/profile">
                        Aprilia
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
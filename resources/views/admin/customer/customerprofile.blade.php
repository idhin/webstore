@extends('layouts.admin')

@section('content')
@php
$pageName = "Nama Customer";
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
                    <a href="/admin/customer/manage" class="btn btn-danger rounded">
                        <i class="fa fa-edit"></i>
                        edit</a>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-12 bg-white">
    <div class="row">

        <div class="col-8 ">
            <div class="custom-tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="custom-nav-all-tab" data-toggle="tab"
                            href="#custom-nav-all" role="tab" aria-controls="custom-nav-all"
                            aria-selected="true">Overview</a>

                        <a class="nav-item nav-link" id="custom-nav-public-tab" data-toggle="tab"
                            href="#custom-nav-public" role="tab" aria-controls="custom-nav-public"
                            aria-selected="false">Riwayat Order</a>
                    </div>
                </nav>
                <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                        aria-labelledby="custom-nav-all-tab">

                        <div class="row">
                            <div class="col-4">
                                Nama Depan
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Fuad
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Nama Belakang
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Waseso
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Email
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Fuad@mail.com
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Telepon
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                +6212 3456 7890
                                <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Waktu Dibuat
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Selasa, 21 Juli 2020 10:14 pm
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Tipe
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Tamu
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Total Pembelian
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Rp.1.000.000
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Berlangganan Newsletter
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Ya
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Group Reseller
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Reseller Bandung
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                Tags
                            </div>
                            <div class="col-2">
                                :
                            </div>
                            <div class="col-6">
                                Royal
                            </div>
                        </div>
                        <h5 class="pt-4">Daftar Alamat</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Atas Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">No Telp</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        Nabila Celamis
                                    </td>
                                    <td>
                                        Jl Sukapura Mangga Dua,Bojongsoang<br>
                                        <small>Kab. Bandung, Jawa Barat, Indonesia</small>
                                    </td>
                                    <td>
                                        +62 1234 5678
                                    </td>
                                    <td>
                                        <a class="dropdown-item btn-doneList p-0" href="">
                                            <i class="fa fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="tab-pane fade" id="custom-nav-public" role="tabpanel"
                        aria-labelledby="custom-nav-public-tab">
                        @component('admin/customer/component/order_customer_table',[])
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title mb-3">Profile Card</strong>
                </div>
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="{{ asset('admin/images/admin.jpg')}}"
                            alt="Card image cap">
                        <h5 class="text-sm-center mt-2 mb-1">Nama Customer</h5>
                        <div class="location text-sm-center"><i class="fa fa-map-marker"></i> Reseller
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="card-body p-2">
                    <span><b>Sumber Sesi</b></span><br>
                    <small><b>Pertama Diliat</b></small><br>
                    <small>Senin, 29 Jun 2020 9:07 pm</small><br>
                    <small><b>Halaman Landasan</b></small><br>
                    <small>
                        <a href="">
                            Webstore.id
                        </a>
                    </small><br>
                    <small><b>Perangkat</b></small><br>
                    <small>Other</small><br>
                    <small><b>Sistem Operasi</b></small><br>
                    <small>Mac OS X 10.13.22</small><br>
                    <small><b>Pertama Diliat</b></small><br>
                    <small>Senin, 29 Jun 2020 9:07 pm</small><br>
                    <small><b>Web Browser</b></small><br>
                    <small>Safari</small><br>
                    <small><b>IP</b></small><br>
                    <small>180.245.176.205</small><br>
                    <small><b>Letak Geografi</b></small><br>
                    <small>Bandung, Jawa Barat</small><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
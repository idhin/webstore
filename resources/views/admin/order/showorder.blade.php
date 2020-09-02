@extends('layouts.admin')

@section('content')
@php
$pageName = "#NamaTransaksi";
@endphp

@include('layouts.component.allert')
<style>

</style>
<form>
    <div class="breadcrumbs">
        <div class="col-md-10">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{$pageName}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-1 text-right p-2">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-print pr-2"></i>print
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" target="_blank" href="/admin/print/invoice">Print Invoice</a>
                    <a class="dropdown-item" target="_blank" href="/admin/print/packingSlip">Packing Slip</a>
                    <a class="dropdown-item" target="_blank" href="/admin/print/thermalInvoice" disabled>Thermal
                        Invoice</a>
                </div>
            </div>
        </div>
        <div class="col-md-1 text-right p-2">

            <button type="submit" class="btn btn-outline-primary">Duplikat</button>
        </div>
    </div>
    <div class="col-12 bg-white mb-5">

        <div class="custom-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="custom-nav-all-tab" data-toggle="tab" href="#custom-nav-all"
                        role="tab" aria-controls="custom-nav-all" aria-selected="true">Order</a>

                    <a class="nav-item nav-link" id="custom-nav-active-tab" data-toggle="tab" href="#custom-nav-active"
                        role="tab" aria-controls="custom-nav-active" aria-selected="false">Laba</a>
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                    aria-labelledby="custom-nav-all-tab">
                    <div class="row">

                        <div class="col-7 ">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded"
                                                alt="Cinque Terre" width="100px">
                                        </td>
                                        <td>
                                            Nabila Celamis<br>
                                            <small>Ukuran :630 gram</small>
                                        </td>
                                        <td>
                                            Rp.150.000
                                        </td>
                                        <td>
                                            2x
                                        </td>
                                        <td>
                                            <a class="dropdown-item btn-doneList p-0" href="">
                                                <i class="fa fa-times text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded"
                                                alt="Cinque Terre" width="100px">
                                        </td>
                                        <td>
                                            Nabila Celamis<br>
                                            <small>Ukuran :630 gram</small>
                                        </td>
                                        <td>
                                            Rp.150.000
                                        </td>
                                        <td>
                                            3x
                                        </td>
                                        <td>
                                            <a class="dropdown-item btn-doneList p-0" href="">
                                                <i class="fa fa-times text-danger"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row pb-3">
                                <div class="col-6 border-top">
                                    <span>SubTotal</span>
                                </div>
                                <div class="col-6 text-right border-top">
                                    <span>Rp.140.000</span>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-6 border-top">
                                    <small>Diskon</small><br>
                                    <span style="color:red">Promo Gratis Ongkir</span>
                                </div>
                                <div class="col-6 text-right border-top">
                                    <span>-8.000</span>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-6 border-top">
                                    <small>Tarif pengiriman</small><br>
                                    <span>JNE - Reguler 1(Kg)</span>
                                </div>
                                <div class="col-6 text-right border-top">
                                    <span>8.000</span>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-6 border-top">
                                    <span>TOTAL</span>
                                </div>
                                <div class="col-6 text-right border-top">
                                    <h5>Rp.140.000</h5>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-3 border-top">
                                    <small>Status Pembayaran</small><br>
                                    <span class="badge badge-danger">Expired</span>
                                </div>
                                <div class="col-3 border-top">
                                    <small>Gerbang Pembayaran</small>
                                    <span>Manual</span>
                                </div>
                                <div class="col-3 border-top">
                                    <small>Metode Pembayaran</small>
                                    <span>Bank Transfer</span>
                                </div>
                                <div class="col-3 text-right border-top pt-2">
                                    <button class="btn btn-outline-info btn-sm">Tidak Expired</button>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-3 border-top">
                                    <small>Status Pengiriman</small><br>
                                    <span class="badge badge-secondary">Belum Dikirim</span>
                                </div>
                                <div class="col-3 border-top">
                                    <small>Metode Pengiriman</small>
                                    <span>Bank Transfer</span>
                                </div>
                                <div class="col-3 border-top">
                                </div>
                                <div class="col-3 text-right border-top pt-2">
                                    <button class="btn btn-outline-info btn-sm">Online booking</button>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-3 border-top">
                                    <small>Status Stok</small><br>
                                    <span class="badge badge-secondary">Belum Dikurangi</span>
                                </div>
                                <div class="col-3 border-top">

                                </div>
                                <div class="col-3 border-top">
                                </div>
                                <div class="col-3 text-right border-top pt-2">
                                    <button class="btn btn-outline-info btn-sm">Kurangi Stok</button>
                                </div>
                            </div>
                            @component('admin/order/component/order_tracker',[])
                            @endcomponent
                        </div>

                        <div class="col-5">
                            <div class="card">
                                <div class="card-body p-2">
                                    <span><b>Link Invoice</b></span><br>
                                    <div class="input-group mb-2">

                                        <input type="text" class="form-control" id="inlineFormInputGroup"
                                            value="https://webstore.id/o/200721000001/ae4ae95">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary">Copy</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-2">
                                    <span><b>Catatan</b></span><br>
                                    <small class="text-justify">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry.
                                        Lorem Ipsum has been the industry's standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley of type
                                    </small>
                                </div>
                                <div class="card-body p-2">
                                    <span><b>Pelanggan</b></span><br>
                                    <span>
                                        <a href="">
                                            <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                                        </a>
                                        <a href="/admin/customer/profile">
                                            Fuad
                                        </a>
                                    </span>
                                </div>
                                <div class="card-body p-2">
                                    <span><b>Dropshipper</b></span><br>
                                    <div class="row">
                                        <div class="col-6">
                                            <small>Nama :</small><br>
                                        </div>
                                        <div class="col-6">
                                            <small>
                                                <a href="/admin/customer/profile">
                                                    Fuad
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <small>Telepon :</small><br>
                                        </div>
                                        <div class="col-6">
                                            <small>
                                                <a href="">
                                                    <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                                                </a>
                                                <a href="/admin/customer/profile">
                                                    0838-7429-83
                                                </a>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-2">
                                    <span><b>Alamat Pengiriman</b></span><br>
                                    <small><b>Jalan Kenangan No 13, Bojongloa Kidul</b></small><br>
                                    <small>Kab. Bandung, Bojongsoang, 40192</small><br>
                                    <small>Jawa Barat, Indonesia</small><br>
                                    <small>
                                        <a href="">
                                            <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                                        </a>
                                        <a href="/admin/customer/profile">
                                            0838-7429-83
                                        </a>
                                    </small>
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


                <div class="tab-pane fade" id="custom-nav-active" role="tabpanel"
                    aria-labelledby="custom-nav-active-tab">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded"
                                            alt="Cinque Terre" width="100px">
                                    </td>
                                    <td>
                                        Nabila Celamis<br>
                                        <small>Ukuran :630 gram</small>
                                    </td>
                                    <td>
                                        Rp.150.000
                                    </td>
                                    <td>
                                        2x
                                    </td>
                                    <td>
                                        <a class="dropdown-item btn-doneList p-0" href="">
                                            <i class="fa fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded"
                                            alt="Cinque Terre" width="100px">
                                    </td>
                                    <td>
                                        Nabila Celamis<br>
                                        <small>Ukuran :630 gram</small>
                                    </td>
                                    <td>
                                        Rp.150.000
                                    </td>
                                    <td>
                                        3x
                                    </td>
                                    <td>
                                        <a class="dropdown-item btn-doneList p-0" href="">
                                            <i class="fa fa-times text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row pb-3">
                            <div class="col-6 border-top">
                                <span>SubTotal</span>
                            </div>
                            <div class="col-6 text-right border-top">
                                <span>Rp.140.000</span>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 border-top">
                                <small>Diskon</small><br>
                                <span style="color:red">Promo Gratis Ongkir</span>
                            </div>
                            <div class="col-6 text-right border-top">
                                <span>-8.000</span>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 border-top">
                                <small>Tarif pengiriman</small><br>
                                <span>JNE - Reguler 1(Kg)</span>
                            </div>
                            <div class="col-6 text-right border-top">
                                <span>8.000</span>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-6 border-top">
                                <span>TOTAL</span>
                            </div>
                            <div class="col-6 text-right border-top">
                                <h5>Rp.140.000</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Modal Tidak Expired-->

</form>
<div class="modal fade" id="modalTetapkan" tabindex="-1" role="dialog" aria-labelledby="modalTetapkan"
    aria-hidden="true" style="top:10%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tetapkan Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <small for="total">total</small>
                    <input type="number" class="form-control" id="total" aria-describedby="total" placeholder=""
                        value="125.000" disabled>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="stockMinus">
                    <label class="form-check-label" for="stockMinus">
                        Abaikan Stock Yang Kurang
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="uniqueCode">
                    <label class="form-check-label" for="uniqueCode">
                        Gunakan Kode Unik
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-block m-0">Tetapkan Order</button>
            </div>
        </div>
    </div>
</div>
@endsection
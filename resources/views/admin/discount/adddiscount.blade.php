@extends('layouts.admin')

@section('content')
@php
$pageName = "Tambah Diskon";
@endphp

@include('layouts.component.allert')

<form>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>{{$pageName}}</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8 text-right p-2">
            <button type="submit" class="btn btn-danger">Simpan</button>
        </div>
    </div>
    <div class="col-12 bg-white">
        <div class="row">

            <div class="col-8 ">
                <div class="form-group">
                    <span for="discountName">Nama Diskon</span>
                    <input type="text" class="form-control" id="discountName" aria-describedby="discountName"
                        placeholder="">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="discountType">Example select</label>
                            <select class="form-control" id="discountType">
                                <option>Potongan Harga</option>
                                <option>% Diskon</option>
                                <option>Gratis Ongkir</option>
                                <option>Potongan Ongkir</option>
                                <option>Potongan Harga Perproduk</option>
                                <option>Dapat Produk Gratis</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="totalDiscount">Potongan</label>
                            <input type="number" class="form-control" id="totalDiscount"
                                aria-describedby="totalDiscount" placeholder="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-clock-o"></i>
                        Jadwal
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small for="timeStart">Waktu Mulai</small>
                            <input type="date" class="form-control" id="timeStart" aria-describedby="timeStart"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <small for="timeStart">Waktu Selesai</small>
                            <input type="date" class="form-control" id="timeStart" aria-describedby="timeStart"
                                placeholder="">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="noTime">
                                Tidak Ada Batasan Waktu
                            </label>
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-unlock"></i>
                        Kode Kupon
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="useCupon">
                            <label class="form-check-label" for="useCupon">
                                Gunakan Kode Kupon
                            </label>
                        </div>
                        <div class="form-group">
                            <small for="cuponCode">Kode Kupon</small>
                            <input type="text" class="form-control" id="cuponCode" aria-describedby="cuponCode"
                                placeholder="">
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-shopping-cart"></i>
                        Kuantitas
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small for="maxUser">Pengguna Maksimal</small>
                            <input type="text" class="form-control" id="maxUser" aria-describedby="maxUser"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <small for="userLimit">Maksimal Per Pelanggan</small>
                            <input type="number" class="form-control" id="userLimit" aria-describedby="userLimit"
                                placeholder="">
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-align-right"></i>
                        Penyusunan
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small for="exampleInputEmail1">tags</small>
                            <input type="text" class="form-control" id="tags" placeholder="Klasik, Katun, Muslimah">
                        </div>
                        <textarea id="summernote_small" name="editordata"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Tidak Expired-->

</form>
@endsection
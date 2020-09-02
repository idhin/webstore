@extends('layouts.main')

@section('content')
@php
$pageNameTitle = "Home | Admin | Webstore";
$pageName = "Home";
@endphp

@include('layouts.component.allert')

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="checkout__order P-5">
                    <div class="text-center">
                        <h5>
                            <b>PEMBAYARAN</b>
                        </h5>
                        <p>Silahkan Transfer Ke Rekening</p>
                        <h4>
                            01234567890 (BRI)
                        </h4>
                        <p>Sebelum Tanggal 21 Mei 2020 : 23:59</p>
                        <a href="/admin/print/invoice" class="btn btn-success" target="_blank">Simpan Invoice</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Bukti Pembyaran</label>
                    <input type="file" class="form-control-file">
                </div>
                <div class="btn btn-danger btn-block">Saya Sudah Bayar</div>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

@endsection
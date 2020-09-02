@extends('layouts.invoice')

@section('content')
@php
$pageName = "print invoice";
@endphp
<div class="container p-5 ">
    <div class="col-12 text-center border p-2">
        <h5>#KODETRANSASKSI</h5>
        <span>Khulafaur Rasyidin (+6281 2233 2553)</span>
    </div>
    <div class="col-12 border p-2">
        <small><b>Jalan Kenangan No 13, Bojongloa Kidul</b></small><br>
        <small>Kab. Bandung, Bojongsoang, 40192</small><br>
        <small>Jawa Barat, Indonesia</small><br>
    </div>
    <div class="col-12 border">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
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
                </tr>
                <tr>
                    <th scope="row">2</th>
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
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-12 border ">
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


@endsection
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
        <form action="#" class="checkout__form">
            <div class="row">
                <div class="col-lg-8">
                    <h5>Detail</h5>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="checkout__form__input">
                            <p>Email <span>*</span></p>
                            <input type="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Nama Depan <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="checkout__form__input">
                                <p>Nama Belakang <span>*</span></p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="checkout__form__input">
                                <p>Negara <span>*</span></p>
                                <select class="form-control" id="country">
                                    <option>Indonesia</option>
                                    <option>Wakanda</option>
                                </select>
                            </div>
                            <div class="checkout__form__input">
                                <p>Alamat <span>*</span></p>
                                <input type="text" placeholder="Alamat">
                                <input type="text" placeholder="Kosan, Rumah, Kontrakan (opsional)">
                            </div>
                            <div class="checkout__form__input">
                                <p>Provinsi <span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__form__input">
                                <p>Kabupaten/kota <span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__form__input">
                                <p>Kode Pos <span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__form__checkbox">
                                <label for="acc">
                                    Kirim Sebagai Dropshipper
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout__order">
                        <h5>Pesanan</h5>
                        <div class="checkout__order__product">
                            <ul>
                                <li>
                                    <span class="top__text">Produk</span>
                                    <span class="top__text__right">Total</span>
                                </li>
                                <li>01. Chain buck bag <span>Rp.150.000</span></li>
                                <li>02. Zip-pockets pebbled<br /> tote briefcase <span>Rp.150.000</span></li>
                                <li>03. Black jean <span>Rp.150.000</span></li>
                                <li>04. Cotton shirt <span>Rp.150.000</span></li>
                            </ul>
                        </div>
                        <div class="checkout__order__total">
                            <div class="form-group">
                                <label for="ongkir">Ongkos Kirim</label>
                                <input type="number" class="form-control" id="ongkir" aria-describedby="emailHelp"
                                    placeholder="Masukkan Ongkos Kirim">
                            </div>
                            <ul>
                                <li>Subtotal <span>Rp.150.000</span></li>
                                <li>Total <span>Rp.150.000</span></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-tag"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup"
                                    placeholder="Kode Kupon">
                            </div>
                        </div>
                        <a href="/payment" type="submit" class="site-btn">Pembayaran</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Checkout Section End -->

@endsection
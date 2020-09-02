@extends('layouts.admin')

@section('content')
@php
$pageName = "Tambah Order";
@endphp

@include('layouts.component.allert')
@include('layouts.component.cssplusminus')

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
            <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                data-target="#modalTetapkan">Tetapkan Order</button>
            <button type="submit" class="btn btn-danger">Buat
                Draft</button>
        </div>
    </div>
    <div class="col-12 bg-white">
        <div class="row">

            <div class="col-7 ">
                <div class="form-group">
                    <label for="cariProduk">Cari Produk</label>
                    <div class="row">
                        <div class="col-10">
                            <select data-placeholder="Cari Produk" multiple class="standardSelect">
                                <option value=""></option>
                                <option value="">Gamis</option>
                                <option value="">Gamis lagi</option>
                                <option value="">Gamis</option>
                            </select>
                        </div>
                        <div class="col-2 text-right">
                            <button class="btn btn-danger btn-sm btn-block">Tambah</button>
                        </div>
                    </div>
                </div>
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
                                <div class="quantity">
                                    <input type='button' value='-' class='minus' field='quantity' /><input type='text'
                                        name='quantity' value='0' class='qty' /><input type='button' value='+'
                                        class='plus' field='quantity' />
                                </div>
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
                                <div class="quantity">
                                    <input type='button' value='-' class='minus' field='quantity' /><input type='text'
                                        name='quantity' value='0' class='qty' /><input type='button' value='+'
                                        class='plus' field='quantity' />
                                </div>
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
                    <div class="col-6 border-top pt-3">
                        <span>SubTotal</span>
                    </div>
                    <div class="col-6 text-right border-top pt-3">
                        <span>Rp.140.000</span>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-6 border-top pt-3">
                        <span>TOTAL</span>
                    </div>
                    <div class="col-6 text-right border-top pt-3">
                        <h5>Rp.140.000</h5>
                    </div>
                </div>
            </div>

            <div class="col-5">
                <div class="card">
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-user"></i>
                        Pelanggan
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fromcustomer">
                            <label class="form-check-label" for="fromcustomer">
                                Dari Daftar Pelanggan
                            </label>
                        </div>
                        <div class="form-group">
                            <small>Pelanggan</small>
                            <select data-placeholder="Cari Produk" multiple class="standardSelect">
                                <option value=""></option>
                                <option value="">Baco</option>
                                <option value="">Becce</option>
                                <option value="">Gamis</option>
                            </select>
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-map-marker"></i>
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fromcustomer">
                            <label class="form-check-label" for="fromcustomer">
                                Perlu Dikirim
                            </label>
                        </div>
                        <div class="row p-0">
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="firstname">Nama Depan</small>
                                    <input type="text" class="form-control" id="firstname" aria-describedby="firstname"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="firstname">Nama Depan</small>
                                    <input type="text" class="form-control" id="backname" aria-describedby="backname"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small for="natio">Negara</small>
                            <select class="form-control" id="nation">
                                <option>Indonesia</option>
                                <option>Wakanda</option>
                                <option>Wadiyah</option>
                                <option>Somaliland</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <small for="firstname">Kota/Kabupaten</small>
                            <input type="text" class="form-control" id="firstname" aria-describedby="firstname"
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <small for="address">Alamat</small>
                            <textarea class="form-control" id="address" rows="3"></textarea>
                        </div>

                        <div class="row p-0">
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="firstname">Kode Pos</small>
                                    <input type="number" class="form-control" id="postnumber"
                                        aria-describedby="postnumber" placeholder="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="firstname">No Telp</small>
                                    <input type="number" class="form-control" id="telp" aria-describedby="telp"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-truck"></i>
                        Pengiriman
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small for="firstname">berat</small>
                            <input type="number" class="form-control" id="berat" aria-describedby="berat"
                                placeholder="">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="beratkhusus">
                                <label class="form-check-label" for="beratkhusus">
                                    Berat Khusus
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <small for="deliv">Metode Pengiriman</small>
                            <select class="form-control" id="deliv">
                                <option>Metode Tambahan</option>
                            </select>
                        </div>
                        <div class="row p-0">
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="deliverymethod">Metode Pengiriman</small>
                                    <input type="number" class="form-control" id="deliverymethod"
                                        aria-describedby="deliverymethod" placeholder="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="delivarycost">Tarif Pengiriman</small>
                                    <input type="number" class="form-control" id="delivarycost"
                                        aria-describedby="delivarycost" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-credit-card"></i>
                        Pembayaran
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small for="payment">Metode Pembayaran</small>
                            <select class="form-control" id="payment">
                                <option>Tidak Ditentukan</option>
                                <option>Bank Transfer</option>
                            </select>
                        </div>
                    </div>
                    {{-- =============BATAS================ --}}
                    <div class="card-header border-top">
                        <i class="fa fa-shopping-cart"></i>
                        Dropshipper
                    </div>
                    <div class="card-body">
                        <div class="row p-0">
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="dropshipname">Nama</small>
                                    <input type="text" class="form-control" id="dropshipname"
                                        aria-describedby="dropshipname" placeholder="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="dropshiptelp">No Telp</small>
                                    <input type="number" class="form-control" id="dropshiptelp"
                                        aria-describedby="dropshiptelp" placeholder="">
                                </div>
                            </div>
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
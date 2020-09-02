@extends('layouts.admin')

@section('content')
@php
$pageName = "Produk Baru";
@endphp

@include('layouts.component.allert')
<form action="{{ route('admin.product.tambahBarang') }}" method="POST" enctype="multipart/form-data">
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
        <div class="custom-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="custom-nav-all-tab" data-toggle="tab" href="#custom-nav-all"
                        role="tab" aria-controls="custom-nav-all" aria-selected="true">General</a>

                    <a class="nav-item nav-link" id="custom-nav-public-tab" data-toggle="tab" href="#custom-nav-public"
                        role="tab" aria-controls="custom-nav-public" aria-selected="false">Variasi</a>

                    <a class="nav-item nav-link" id="custom-nav-hiden-tab" data-toggle="tab" href="#custom-nav-hiden"
                        role="tab" aria-controls="custom-nav-hiden" aria-selected="false">Reseler</a>

                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                    aria-labelledby="custom-nav-all-tab">
                    <div class="row">
                        <div class="col-8 ">
                            <div class="pb-3">
                                <input type="file" class="dropify" name="image" data-height="300">
                            </div>
                            <!-- <input type="textarea" nama="namaBarang"></textarea> -->
                            <textarea id="summernote" name="namaBarang"></textarea>
                        </div>
                        <div class="col-4">
                        <div class="card p-0 m-0">
    <div class="card-header">
        <i class="fa fa-eye"></i>
        Visibilitas</div>
    <div class="card-body">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="hiden">
            <label class="form-check-label" for="hiden" name="">
                Tersembunyi
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="hiden">
            <label class="form-check-label" for="hiden" name="">
                Hanya Bisa Diakses Dengan Link
            </label>
        </div>
    </div>
    <div class="card-header border-top">
        <i class="fa fa-align-right"></i>
        Penyusunan
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <small for="Kategori">Kategori</small>
                    <select class="form-control" id="Kategori" name="kategori">
                    @foreach ($kategoris as $k)
                        <option value="{{$k->id}}">{{$k->namaKategori}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <small for="tipeproduk">Tipe Produk</small>
                    <select class="form-control" id="tipeproduk" name="">
                        <option>Produk Fisik</option>
                        <option>digital</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <small for="exampleInputEmail1">tags</small>
            <input type="text" class="form-control" id="tags" placeholder="Klasik, Katun, Muslimah">
        </div>
    </div>
    <div class="card-header border-top">
        <i class="fa fa-usd"></i>
        harga
    </div>
    <div class="card-body">
        <div class="col-6 p-0">
            <small for="price">Harga</small>
            <input type="number" class="form-control" id="tags" name="harga" placeholder="2.500">
        </div>
        <div class="col-6 p-0">
            <small for="pricenot">Harga Coret</small>
            <input type="number" class="form-control" id="tags"  name="hargaCoret" placeholder="2.500">
        </div>
        <div class="col-6 p-0">
            <small for="pricebuy">Harga Modal</small>
            <input type="number" class="form-control" id="tags" name="hargaModal"  placeholder="2.500">
        </div>
        <!-- <div class="col-12 p-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hiden">
                <small class="form-check-label text-secondary" for="hiden" name="">
                    Memiliki harga grosir
                </small>
            </div>
        </div> -->

    </div>
    <div class="card-header border-top">
        <i class="fa fa-dropbox"></i>
        Stock
    </div>
    <div class="card-body">
        <div class="form-group pb-0 mb-0">
            <small for="exampleInputEmail1">Kode Stock (SKU)</small>
            <input type="text" class="form-control" id="sku">
        </div>
        <div class="col-12 p-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hiden">
                <small class="form-check-label text-secondary" for="hiden" name="">
                    Lacak Stock
                </small>
            </div>
        </div>
        <div class="form-group pb-0 mb-0">
            <small for="exampleInputEmail1">Stock Saat Ini</small>
            <input type="text" name="stok" class="form-control" id="sku">
        </div>
        <div class="col-12 p-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hiden">
                <small class="form-check-label text-secondary" for="hiden" name="">
                    Tetap bisa beli walau stock habis
                </small>
            </div>
        </div>
    </div>

    <div class="card-header border-top">
        <i class="fa fa-truck"></i>
        Pengiriman
    </div>
    <div class="card-body">
        <div class="row form-group">
            <div class="col col-12 p-0">
                <div class="input-group">
                    <input type="number" id="input2-group1" name="berat" placeholder="Berat" class="form-control">
                    <div class="input-group-addon p-0">
                        <div class="form-group mb-0">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="g">g</option>
                                <option value="kg">kg</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-header border-top">
        <i class="fa fa-globe"></i>
        SEO
    </div>
    <div class="card-body mb-5">
        <div class="form-group pb-0 mb-0">
            <small for="exampleInputEmail1">Slug</small>
            <input type="text" class="form-control" id="slug">
        </div>
        <div class="col-12 p-0">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="hiden">
                <small class="form-check-label text-secondary" for="hiden" name="">
                    Sembunyikan Dari Mesin Pencari
                </small>
            </div>
        </div>
        <div class="form-group pb-0 mb-0">
            <small for="exampleInputEmail1">Judul Halaman</small>
            <input type="text" class="form-control" id="" name="">
        </div>
        <div class="form-group pb-0 mb-0">
            <small for="exampleInputEmail1">Meta Deskripsi</small>
            <input type="text" class="form-control" id="" name="">
        </div>
    </div>
</div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="custom-nav-public" role="tabpanel"
                    aria-labelledby="custom-nav-public-tab">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="mb-0">Variant </h5>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="#!" class="btn btn-sm btn-success" data-toggle="modal"
                                        data-target="#tambahVariant">Tambah
                                        Variant</a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jenis Variasi</th>
                                    <th scope="col">Opsi</th>
                                    <th scope="col">Harga Produk</th>
                                    <th scope="col">Harga Beli</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ukuran</td>
                                    <td>XL</td>
                                    <td>Rp.10.000</td>
                                    <td>Rp.7.000</td>
                                    <td>50</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-danger"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a class="dropdown-item btn-doneList" href="" data-toggle="modal"
                                                    data-target="#tambahVariant">
                                                    <i class="fa fa-edit mr-1 text-success"></i>
                                                    Edit
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
                </div>

                <div class="tab-pane fade" id="custom-nav-hiden" role="tabpanel" aria-labelledby="custom-nav-hiden-tab">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h5 class="mb-0">Reseller </h5>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="" class="btn btn-sm btn-success" data-toggle="modal"
                                        data-target="#tambahReseller">Tambah Reseller</a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Group</th>
                                    <th scope="col">Harga Produk</th>
                                    <th scope="col">Harga Coret</th>
                                    <th scope="col">Harga Modal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Eceran</td>
                                    <td>Rp.10.000</td>
                                    <td>Rp.15.000</td>
                                    <td>Rp.7.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-danger"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a class="dropdown-item btn-doneList" href="" data-toggle="modal"
                                                    data-target="#tambahReseller">
                                                    <i class="fa fa-edit mr-1 text-success"></i>
                                                    Edit
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
                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah variant -->
    <div class="modal fade" id="tambahVariant" tabindex="-1" role="dialog" aria-labelledby="tambahVariant"
        aria-hidden="true" style="top:10%">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Manage Variant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                  
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jenis Variant</label>
                            <input name="jenis" type="text" class="form-control" id="jenis_variant"
                                placeholder="Ukuran, Warna, Bahan">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Variant</label>
                            <input name="opsi" type="text" class="form-control" id="opsi_variant"
                                placeholder="Nama Variant">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Produk</label>
                            <input name="price" type="number" class="form-control" id="harga_produk"
                                placeholder="Harga Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Beli</label>
                            <input name="cost_price" type="number" class="form-control" id="harga_beli"
                                placeholder="Harga Beli">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stock</label>
                            <input name="qty" type="number" class="form-control" id="stock" placeholder="Stock">
                        </div>
          
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button form="field_variant_form" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal tambah Reseller -->
    <div class="modal fade" id="tambahReseller" tabindex="-1" role="dialog" aria-labelledby="tambahReseller"
        aria-hidden="true" style="top:10%">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal Reseller</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" id="field_variant_form">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Group</label>
                            <input name="group" type="text" class="form-control" id="nama_group"
                                placeholder="nama group">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Produk</label>
                            <input name="price" type="number" class="form-control" id="harga_produk"
                                placeholder="Harga Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Coret</label>
                            <input name="not_price" type="number" class="form-control" id="harga_coret"
                                placeholder="Harga Produk">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Harga Modal</label>
                            <input name="cost_price" type="number" class="form-control" id="harga_beli"
                                placeholder="Harga Beli">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button form="field_variant_form" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
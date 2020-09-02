@extends('layouts.admin')

@section('content')
@php
$pageName = "Tambah Katalog";
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
                    <label for="namaCatalog">Nama Katalog</label>
                    <input type="text" class="form-control" id="namaCatalog" aria-describedby="emailHelp" placeholder=""
                        name="">
                </div>
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
                @component('admin/product/component/topmenu_catalog',[])
                @endcomponent
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th scope="col">No</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Nama</th>
                            <th scope="col"></th>
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
                                <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded"
                                    alt="Cinque Terre" width="100px">
                            </td>
                            <td>Nabila Celamis</td>
                            <td>
                                <a class="dropdown-item btn-doneList p-0" href="">
                                    <i class="fa fa-times text-danger"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-header border-top">
                        <i class="fa fa-align-right"></i>
                        Penyusunan
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <small for="exampleInputEmail1">tags</small>
                            <input type="text" class="form-control" id="tags" placeholder="Klasik, Katun, Muslimah">
                        </div>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>

</form>

@endsection
@extends('layouts.admin')

@section('content')
@php
$pageName = "Tambah Segment";
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
                    <label for="namaCatalog">Nama Segment</label>
                    <input type="text" class="form-control" id="namaCatalog" aria-describedby="emailHelp" placeholder=""
                        name="">
                </div>
                <div class="form-group">
                    <label for="cariProduk">Cari Member</label>
                    <div class="row">
                        <div class="col-10">
                            <select data-placeholder="Cari Produk" multiple class="standardSelect">
                                <option value=""></option>
                                <option value="">Fuad</option>
                                <option value="">Dewi</option>
                                <option value="">Ani</option>
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
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tipe</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <th scope="row">1</th>
                            <td>Nabila Celamis</td>
                            <td>Bisa Login</td>
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
                            <input type="text" class="form-control" id="tags" placeholder="Royal, Sopan, kAYA">
                        </div>
                        <textarea id="summernote" name="editordata"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>

</form>
@endsection
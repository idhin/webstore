@extends('layouts.admin')

@section('content')
@php
$pageName = "Return Order";
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
                    <li class="active">Order : #213215324</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-12 bg-white">
    <div class="row">
        <div class="col-4 border-right">
            <div class="form-group">
                <small for="manajemenstock">Manajemen Stock</small>
                <select class="form-control" id="manajemenstock">
                    <option>Kurangi Stock Seperti Biasa</option>
                    <option>Abaikan Stock Yang Kurang</option>
                    <option>Jangan kurangi Stock</option>
                </select>
            </div>
            <div class="form-group">
                <small for="kurir">Kurir</small>
                <select class="form-control" id="kurir">
                    <option>JNE</option>
                    <option>Dakota Cargo</option>
                    <option>TIKI</option>
                </select>
            </div>
            <div class="form-group">
                <small>Tipe Retur</small><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sendAll" id="sendAll" value="kirim Semua">
                    <label class="form-check-label" for="sendAll">Kirim Semua</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="halfsend" id="halfsend" value="Kirim Sebagian">
                    <label class="form-check-label" for="halfsend">Kirim Sebagian</label>
                </div>
            </div>
            <div class="form-group">
                <small>Catatan</small>
                <textarea id="summernote" name="editordata" placeholder="tambahkan catatan"></textarea>
            </div>
        </div>
        <div class="col-8 ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">SKU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded"
                                alt="Cinque Terre" width="100px">
                        </td>
                        <td>Nabila Celamis</td>
                        <td>-</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
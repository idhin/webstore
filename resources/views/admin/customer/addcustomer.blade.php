@extends('layouts.admin')

@section('content')
@php
$pageName = "Tambah Pelanggan";
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
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <span for="firstname">Nama Depan</span>
                            <input type="text" class="form-control" id="firstname" aria-describedby="firstname"
                                placeholder="John">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <span for="totalDiscount">Nama Belakang</span>
                            <input type="text" class="form-control" id="backname" aria-describedby="backname"
                                placeholder="smith">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <span for="email">Email</span>
                            <input type="email" class="form-control" id="email" aria-describedby="email"
                                placeholder="john@mail.com">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <span for="telp">Telepon</span>
                            <input type="number" class="form-control" id="telp" aria-describedby="telp"
                                placeholder="+62 1234 5678">
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addressModal">
                    Tambah Alamat
                </button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Atas Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No Telp</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                Nabila Celamis
                            </td>
                            <td>
                                Jl Sukapura Mangga Dua,Bojongsoang<br>
                                <small>Kab. Bandung, Jawa Barat, Indonesia</small>
                            </td>
                            <td>
                                +62 1234 5678
                            </td>
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
                    <div class="card-header">
                        <strong class="card-title mb-3">Foto Profil</strong>
                    </div>
                    <div class="card-body">
                        <input type="file" class="dropify" name="cover" data-height="300">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header border-top">
                        <i class="fa fa-align-right"></i>
                        Penyusunan
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="type">Tipe</small>
                                    <select class="form-control" id="type">
                                        <option>Manual</option>
                                        <option>Bisa Login</option>
                                        <option>Tamu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <small for="group">Group Reseller</small>
                                    <input type="text" class="form-control" id="group" aria-describedby="group"
                                        placeholder="Pilih Group Reseller">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <small for="exampleInputEmail1">tags</small>
                            <input type="text" class="form-control" id="tags" placeholder="Royal, Sopan, Kaya">
                        </div>
                        <textarea id="summernote_small" name="editordata"></textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Tidak Expired-->
    <!-- Modal -->
    <div class="modal fade" id="addressModal" tabindex="-1" role="dialog" aria-labelledby="addressModal"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <small for="firstname">Nama Depan</small>
                                <input type="text" class="form-control" id="firstname" aria-describedby="firstname"
                                    placeholder="John">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <small for="totalDiscount">Nama Belakang</small>
                                <input type="text" class="form-control" id="backname" aria-describedby="backname"
                                    placeholder="smith">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <small for="nation">Negara</small>
                        <select class="form-control" id="nation">
                            <option>Indonesia</option>
                            <option>Malaysia</option>
                            <option>Brunei</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <small for="province">Provinsi</small>
                        <input type="province" class="form-control" id="province" aria-describedby="province"
                            placeholder="provinsi">
                    </div>
                    <div class="form-group">
                        <small for="city">Kota/Kabupaten</small>
                        <input type="text" class="form-control" id="city" aria-describedby="city"
                            placeholder="Kab/kota">
                    </div>
                    <div class="form-group">
                        <small for="Address">Alamat</small>
                        <textarea class="form-control" id="Address" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <small for="postNumber">Kode Pos</small>
                                <input type="number" class="form-control" id="postNumber" aria-describedby="postNumber"
                                    placeholder="12345">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <small for="telpAddress">Telepon</small>
                                <input type="number" class="form-control" id="telpAddress"
                                    aria-describedby="telpAddress" placeholder="+62 1234 5678">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
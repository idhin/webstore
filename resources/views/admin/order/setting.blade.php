@extends('layouts.admin')

@section('content')
@php
$pageName = "Pengaturan Checkout Tertinggal";
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
                    <li class="active">{{$pageName}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-12 p-4 bg-white">
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 text-right">
            <button type="submit" class="btn btn-primary rounded">
                Simpan</button>
        </div>
    </div>
</div>
<div class="card p-2">
    <div class="col-6">
        <h5>Filter</h5>
        <div class="form-group">
            <small for="timeLong">Harus Lebih Lama Dari</small>
            <select class="form-control" id="timeLong">
                <option>3 Hari</option>
                <option>7 Hari</option>
                <option>14 Hari</option>
                <option>21 Hari</option>
                <option>30 Hari</option>
            </select>
        </div>
        <div class="form-group">
            <small for="minimum">Minimum Pembelian (Opsional)</small>
            <input type="number" class="form-control" id="minimum" placeholder="Rp">
        </div>
        <h5>Pengingat</h5>
        <div class="form-group">
            <small for="firstAllert">Kirim Pengingat Pertama Setelah</small>
            <select class="form-control" id="firstAllert">
                <option>Tidak Dikirim</option>
                <option>3 Jam</option>
                <option>6 Jam</option>
                <option>12 Jam</option>
                <option>18 Jam</option>
                <option>24 Jam</option>
                <option>2 Hari</option>
                <option>3 Hari</option>
                <option>4 Hari</option>
                <option>5 Hari</option>
                <option>6 Hari</option>
                <option>7 Hari</option>
                <option>8 Hari</option>
                <option>10 Hari</option>
                <option>12 Hari</option>
            </select>
        </div>
        <div class="form-group">
            <small for="secondAllert">Kirim Pengingat Kedua Setelah</small>
            <select class="form-control" id="secondAllert">
                <option>Tidak Dikirim</option>
                <option>2 Hari</option>
                <option>3 Hari</option>
                <option>4 Hari</option>
                <option>5 Hari</option>
                <option>6 Hari</option>
                <option>7 Hari</option>
                <option>8 Hari</option>
                <option>10 Hari</option>
                <option>12 Hari</option>
            </select>
        </div>
        <div class="form-group">
            <small for="thirdAllert">Kirim Pengingat Kedua Setelah</small>
            <select class="form-control" id="thirdAllert">
                <option>Tidak Dikirim</option>
                <option>2 Hari</option>
                <option>3 Hari</option>
                <option>4 Hari</option>
                <option>5 Hari</option>
                <option>6 Hari</option>
                <option>7 Hari</option>
                <option>8 Hari</option>
                <option>10 Hari</option>
                <option>12 Hari</option>
            </select>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')

@section('content')
@php
$pageName = "Laporan Produk";
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
    <div class="col-sm-8 text-right p-2">

    </div>
</div>


<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            @component('admin/chart/sales',[])
            @endcomponent
        </div>
    </div><!-- .animated -->
</div><!-- .content -->
@endsection
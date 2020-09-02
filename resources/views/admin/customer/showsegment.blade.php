@extends('layouts.admin')

@section('content')
@php
$pageName = "Nama Segment";
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

<div class="col-12 pt-4 bg-white">
    <div class="row">
        <div class="col-6">

        </div>
        <div class="col-6 text-right">
            <span class="text-secondary">30 Pelanggan</span>
            <a href="/admin/customer/segment/manage" class="btn btn-danger rounded">
                <i class="fa fa-edit"></i>
                Edit</a>
        </div>
    </div>
</div>
<div class="col-12 bg-white">
    @component('admin/product/component/topmenu_catalog',[])
    @endcomponent
    @component('admin/customer/component/customer_table',[])
    @endcomponent
</div>
@endsection
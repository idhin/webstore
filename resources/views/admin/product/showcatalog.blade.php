@extends('layouts.admin')

@section('content')
@php
$pageName = "Katalog Cakep";
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
<div class="card">
    @component('admin/product/component/topmenu',[])
    @endcomponent
    @component('admin/product/component/table_product',[])
    @endcomponent
</div>
@endsection
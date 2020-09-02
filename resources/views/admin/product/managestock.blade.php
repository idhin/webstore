@extends('layouts.admin')

@section('content')
@php
$pageName = "Kelola Stock";
@endphp

@include('layouts.component.allert')
@include('layouts.component.cssplusminus')

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

            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="custom-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="custom-nav-all-tab" data-toggle="tab" href="#custom-nav-all"
                        role="tab" aria-controls="custom-nav-all" aria-selected="true">Terendah</a>

                    <a class="nav-item nav-link" id="custom-nav-public-tab" data-toggle="tab" href="#custom-nav-public"
                        role="tab" aria-controls="custom-nav-public" aria-selected="false">Terbanyak</a>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                    aria-labelledby="custom-nav-all-tab">
                    @component('admin/product/component/manage_stock_table',[])
                    @endcomponent
                </div>


                <div class="tab-pane fade" id="custom-nav-public" role="tabpanel"
                    aria-labelledby="custom-nav-public-tab">
                    @component('admin/product/component/manage_stock_table',[])
                    @endcomponent
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
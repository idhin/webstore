@extends('layouts.admin')

@section('content')
@php
$pageName = "Pelanggan";
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
            <div class="input-group">
                <div class="input-group-btn">
                    <button class="btn btn-danger">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
                <input type="text" id="input1-group2" name="input1-group2" placeholder="cari pelanggan"
                    class="form-control">
            </div>
        </div>
        <div class="col-6 text-right">
            <span class="text-secondary">124 Pelanggan</span>
            <a href="/admin/customer/manage" class="btn btn-danger rounded">
                <i class="fa fa-plus"></i>
                Pelanggan</a>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <div class="custom-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <a class="nav-item nav-link active" id="custom-nav-all-tab" data-toggle="tab" href="#custom-nav-all"
                        role="tab" aria-controls="custom-nav-all" aria-selected="true">Semua</a>

                    <a class="nav-item nav-link" id="custom-nav-public-tab" data-toggle="tab" href="#custom-nav-public"
                        role="tab" aria-controls="custom-nav-public" aria-selected="false">Bisa Login</a>

                    <a class="nav-item nav-link" id="custom-nav-hiden-tab" data-toggle="tab" href="#custom-nav-hiden"
                        role="tab" aria-controls="custom-nav-hiden" aria-selected="false">Tamu</a>

                    <a class="nav-item nav-link" id="custom-nav-schedule-tab" data-toggle="tab"
                        href="#custom-nav-schedule" role="tab" aria-controls="custom-nav-schedule"
                        aria-selected="false">Manual</a>
                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                    aria-labelledby="custom-nav-all-tab">
                    @component('admin/customer/component/topmenu',[])
                    @endcomponent
                    @component('admin/customer/component/customer_table',[])
                    @endcomponent
                </div>


                <div class="tab-pane fade" id="custom-nav-public" role="tabpanel"
                    aria-labelledby="custom-nav-public-tab">
                    @component('admin/customer/component/topmenu',[])
                    @endcomponent
                    @component('admin/customer/component/customer_table',[])
                    @endcomponent
                </div>

                <div class="tab-pane fade" id="custom-nav-hiden" role="tabpanel" aria-labelledby="custom-nav-hiden-tab">
                    @component('admin/customer/component/topmenu',[])
                    @endcomponent
                    @component('admin/customer/component/customer_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-schedule" role="tabpanel"
                    aria-labelledby="custom-nav-schedule-tab">
                    @component('admin/customer/component/topmenu',[])
                    @endcomponent
                    @component('admin/customer/component/customer_table',[])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
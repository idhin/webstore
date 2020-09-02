@extends('layouts.main')

@section('content')
@php
$pageNameTitle = "Home | Admin | Webstore";
$pageName = "Home";
@endphp

@include('layouts.component.allert')

<section class="shop spad">
    <div class="container">


        <div class="col-lg-12 col-md-9">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>Nama Koleksi</h4>
                </div>
            </div>
            <div class="row">
                @component('home/component/product',[])
                @endcomponent
                <div class="col-lg-12 text-center">
                    <div class="pagination__option">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Shop Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        @component('home/component/instagram',[])
        @endcomponent
    </div>
</div>
<!-- Instagram End -->
@endsection
@extends('layouts.main')

@section('content')
@php
$pageNameTitle = "Home | Admin | Webstore";
$pageName = "Home";
@endphp

@include('layouts.component.allert')

<!-- Shop Section Begin -->
<section class="trend spad">
    <div class="container">
        @component('home/component/feature',[])
        @endcomponent
    </div>
</section>

<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                @component('home/component/filter',[])
                @endcomponent
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    @component('home/component/allproduct',[])
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
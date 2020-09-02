@extends('layouts.main')

@section('content')
@php
$pageNameTitle = "Home | Admin | Webstore";
$pageName = "Home";
@endphp

@include('layouts.component.allert')

<!-- Header Section Begin -->


<!-- Categories Section Begin -->
<section class="categories">
    @component('home/component/header',[])
    @endcomponent
</section>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="section-title">
                    <h4>New product</h4>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".women">Women’s</li>
                    <li data-filter=".men">Men’s</li>
                    <li data-filter=".kid">Kid’s</li>
                    <li data-filter=".accessories">Accessories</li>
                    <li data-filter=".cosmetic">Cosmetics</li>
                </ul>
            </div>
        </div>
        <div class="row property__gallery">
            @component('home/component/product',[])
            @endcomponent
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Banner Section Begin -->
<section class="banner set-bg" data-setbg="{{ asset('main/img/banner/banner-1.jpg')}}">
    @component('home/component/collection',[])
    @endcomponent
</section>
<!-- Banner Section End -->

<!-- Trend Section Begin -->
<section class="trend spad">
    <div class="container">
        @component('home/component/feature',[])
        @endcomponent
    </div>
</section>
<!-- Trend Section End -->

<!-- Discount Section Begin -->
<section class="discount">
    <div class="container">
        @component('home/component/discount',[])
        @endcomponent
    </div>
</section>
<!-- Discount Section End -->

<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        @component('home/component/services',[])
        @endcomponent
    </div>
</section>
<!-- Services Section End -->

<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        @component('home/component/instagram',[])
        @endcomponent
    </div>
</div>
<!-- Instagram End -->
@endsection
@extends('layouts.admin')

@section('content')
@php
$pageName = "SMS Broadcast";
@endphp

@include('layouts.component.allert')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
</div>
@endsection
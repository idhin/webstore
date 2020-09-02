@extends('layouts.invoice')

@section('content')
@php
$pageName = "packing slip";
@endphp
<div class="container p-5 ">
    <div class="col-12 border">
        <div class="row">
            <div class="col-8 border p-0">
                <div class="col-12 border p-3">
                    <h5>#KODETRANSASKSI</h5>
                    <span>Khulafaur Rasyidin (+6281 2233 2553)</span>
                </div>
                <div class="col-12 border p-3">
                    <small><b>Jalan Kenangan No 13, Bojongloa Kidul</b></small><br>
                    <small>Kab. Bandung, Bojongsoang, 40192</small><br>
                    <small>Jawa Barat, Indonesia</small><br>
                </div>
                <div class="col-12 border">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    Nabila Celamis<br>
                                    <small>Ukuran :630 gram</small>
                                </td>
                                <td>
                                    Rp.150.000
                                </td>
                                <td>
                                    2x
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    Nabila Celamis<br>
                                    <small>Ukuran :630 gram</small>
                                </td>
                                <td>
                                    Rp.150.000
                                </td>
                                <td>
                                    3x
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4 border p-5">
                <img src="https://seeklogo.com/images/F/fragile-logo-160FDAAFEF-seeklogo.com.png" class="img-rounded"
                    alt="Cinque Terre" width="100%">
                <img src="https://www.incimages.com/uploaded_files/image/1024x576/*Barcode_32896.jpg"
                    class="img-rounded pt-3" alt="Cinque Terre" width="100%" height="60px">
            </div>
        </div>
    </div>
</div>
@endsection
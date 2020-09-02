@extends('layouts.admin')

@section('content')
@php
$pageName = "Order";
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
                <input type="text" id="input1-group2" name="input1-group2" placeholder="cari transaksi"
                    class="form-control">
            </div>
        </div>
        <div class="col-6 text-right">
            <a href="/admin/product/manage" type="button" class="btn btn-outline-primary rounded" data-toggle="modal"
                data-target="#uploadResi">
                <i class="fa fa-upload"></i>
            </a>
            <a href="/admin/order/manage" class="btn btn-danger rounded">
                <i class="fa fa-plus"></i>
                Order</a>
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

                    <a class="nav-item nav-link" id="custom-nav-active-tab" data-toggle="tab" href="#custom-nav-active"
                        role="tab" aria-controls="custom-nav-active" aria-selected="false">Aktif</a>

                    <a class="nav-item nav-link" id="custom-nav-notdeliv-tab" data-toggle="tab"
                        href="#custom-nav-notdeliv" role="tab" aria-controls="custom-nav-notdeliv"
                        aria-selected="false">Belum Dikirim</a>

                    <a class="nav-item nav-link" id="custom-nav-pack-tab" data-toggle="tab" href="#custom-nav-pack"
                        role="tab" aria-controls="custom-nav-pack" aria-selected="false">Sudah Dipacking</a>

                    <a class="nav-item nav-link" id="custom-nav-deliv-tab" data-toggle="tab" href="#custom-nav-deliv"
                        role="tab" aria-controls="custom-nav-deliv" aria-selected="false">Terkirim</a>

                    <a class="nav-item nav-link" id="custom-nav-nopay-tab" data-toggle="tab" href="#custom-nav-nopay"
                        role="tab" aria-controls="custom-nav-nopay" aria-selected="false">Belum dibayar</a>

                    <a class="nav-item nav-link" id="custom-nav-pay-tab" data-toggle="tab" href="#custom-nav-pay"
                        role="tab" aria-controls="custom-nav-pay" aria-selected="false">Terbayar</a>

                    <a class="nav-item nav-link" id="custom-nav-refund-tab" data-toggle="tab" href="#custom-nav-refund"
                        role="tab" aria-controls="custom-nav-refund" aria-selected="false">Telah Refund</a>

                    {{-- <a class="nav-item nav-link" id="custom-nav-success-tab" data-toggle="tab"
                        href="#custom-nav-success" role="tab" aria-controls="custom-nav-success"
                        aria-selected="false">Berhasil</a> --}}

                    <a class="nav-item nav-link" id="custom-nav-fail-tab" data-toggle="tab" href="#custom-nav-fail"
                        role="tab" aria-controls="custom-nav-fail" aria-selected="false">Gagal</a>

                    <a class="nav-item nav-link" id="custom-nav-done-tab" data-toggle="tab" href="#custom-nav-done"
                        role="tab" aria-controls="custom-nav-done" aria-selected="false">Selesai</a>


                </div>
            </nav>
            <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                <div class="tab-pane fade show active" id="custom-nav-all" role="tabpanel"
                    aria-labelledby="custom-nav-all-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>


                <div class="tab-pane fade" id="custom-nav-active" role="tabpanel"
                    aria-labelledby="custom-nav-active-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>

                <div class="tab-pane fade" id="custom-nav-notdeliv" role="tabpanel"
                    aria-labelledby="custom-nav-notdeliv-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-pack" role="tabpanel" aria-labelledby="custom-nav-pack-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-deliv" role="tabpanel" aria-labelledby="custom-nav-deliv-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-nopay" role="tabpanel" aria-labelledby="custom-nav-nopay-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-pay" role="tabpanel" aria-labelledby="custom-nav-pay-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-refund" role="tabpanel"
                    aria-labelledby="custom-nav-refund-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                {{-- <div class="tab-pane fade" id="custom-nav-success" role="tabpanel"
                    aria-labelledby="custom-nav-success-tab">
                    berhasil
                </div> --}}
                <div class="tab-pane fade" id="custom-nav-fail" role="tabpanel" aria-labelledby="custom-nav-fail-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
                <div class="tab-pane fade" id="custom-nav-done" role="tabpanel" aria-labelledby="custom-nav-done-tab">
                    @component('admin/order/component/order_table',[])
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modalOnlineBooking" tabindex="-1" role="dialog" aria-labelledby="modalOnlineBooking"
    aria-hidden="true" style="top:10%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Online Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>JNE-Reguler</option>
                    </select>
                </div>
                <label for="exampleFormControlSelect1">Apakah Kamu Yakin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="" value="Ya">
                    <label class="form-check-label" for="">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="" value="Tidak">
                    <label class="form-check-label" for="">Tidak</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary btn-block m-0">Online Booking</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tidak Expired-->
<div class="modal fade" id="modaLNotExpired" tabindex="-1" role="dialog" aria-labelledby="modaLNotExpired"
    aria-hidden="true" style="top:10%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tandai Order Tidak Expired</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Kamu Yakin Menandai Order Tidak Expired
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">Tidak</button>
                <button type="button" class="btn btn-primary btn-block m-0">Ya</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tidak Refund-->
<div class="modal fade" id="modalRefund" tabindex="-1" role="dialog" aria-labelledby="modalRefund" aria-hidden="true"
    style="top:2%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Refund Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Tindakan ini tidak bisa dikembalikan. Apakah kamu yakin untuk Refund Order ini?</p>
                <div class="form-group">
                    <small for="modalRefundNilai">Nilai</small>
                    <select class="form-control" id="modalRefundNilai">
                        <option>Total</option>
                        <option>Total Dikurangi Ongkir</option>
                        <option>Nilai Khusus</option>
                    </select>
                </div>
                <div class="form-group">
                    <small for="modalRefundNilai">Nilai</small>
                    <input type="Number" class="form-control" id="modalRefundNilaiKhusus" aria-describedby="emailHelp"
                        placeholder="">
                </div>
                <div class="form-group">
                    <small for="modalRefundNilai">Paragraph</small>
                    <textarea id="summernote_small" name="editordata" style="30px"></textarea>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="sendEmail">
                    <label class="form-check-label" for="sendEmail">Kirim Ke Email Pelanggan</label>
                </div>
                <small for="exampleFormControlSelect1">Apakah Kamu Yakin</small><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="" value="Ya">
                    <label class="form-check-label" for="">Ya</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="" value="Tidak">
                    <label class="form-check-label" for="">Tidak</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary btn-block m-0">Refund Order</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Upload Resi-->
<div class="modal fade" id="uploadResi" tabindex="-1" role="dialog" aria-labelledby="uploadResi" aria-hidden="true"
    style="top:10%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Nomer Resi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="uploadResi">Upload Resi</label>
                    <input type="file" class="form-control-file" id="UploadResi">
                </div>
                <a href="" class="text-primary">Download Contoh</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-block" data-dismiss="modal">batal</button>
                <button type="button" class="btn btn-danger btn-block m-0">Upload</button>
            </div>
        </div>
    </div>
</div>
@endsection
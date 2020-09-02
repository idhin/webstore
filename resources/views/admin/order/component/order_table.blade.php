<table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th scope="col">Aksi</th>
            <th scope="col">No</th>
            <th scope="col">No Transaksi</th>
            <th scope="col">Total Pembelian</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Status Pengirirman</th>
            <th scope="col">Pelanggan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
            </th>
            <td>
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list text-danger"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item btn-doneList" href="/admin/order/show/namaorder">
                            <i class="fa fa-eye mr-1 text-primary"></i>
                            Lihat
                        </a>
                        <button type="button" class="dropdown-item btn-doneList" data-toggle="modal"
                            data-target="#modalOnlineBooking">
                            <i class=" fa fa-edit mr-1 text-success"></i>
                            Online Booking
                        </button>
                        <a class="dropdown-item btn-doneList" href="" data-toggle="modal"
                            data-target="#modaLNotExpired">
                            <i class="fa fa-check mr-1 text-success"></i>
                            Tandai Tidak Expired
                        </a>
                        <a class="dropdown-item btn-doneList" href="" data-toggle="modal" data-target="#modalRefund">
                            <i class="fa fa-money mr-1 text-info"></i>
                            Refund
                        </a>
                        <a href="/admin/order/return" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-truck mr-2 text-warning"></i>
                            Return Barang
                        </a>
                        <a href="" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-times mr-2 text-danger"></i>
                            Expired
                        </a>
                    </div>
                </div>
            </td>
            <th scope="row">1</th>
            <td>
                <a href="/admin/order/show/namaorder">
                    200707000001 - Rosyi Zakiyyah
                </a>
            </td>
            <td>Rp.350.000</td>
            <td>
                <span class="badge badge-success">Terbayar</span>
            </td>
            <td>
                <span class="badge badge-success">Semua Terkirim</span>
            </td>
            <td>
                <div class="row">
                    <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                    <a href="/admin/customer/profile">
                        Aprilia
                    </a>
                </div>
            </td>

        </tr>
        {{-- //expired --}}
        <tr>
            <th>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
            </th>
            <td>
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list text-danger"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item btn-doneList" href="/admin/order/show/namaorder">
                            <i class="fa fa-eye mr-1 text-primary"></i>
                            Lihat
                        </a>
                        <button type="button" class="dropdown-item btn-doneList" data-toggle="modal"
                            data-target="#modalOnlineBooking">
                            <i class=" fa fa-edit mr-1 text-success"></i>
                            Online Booking
                        </button>
                        <a class="dropdown-item btn-doneList" href="" data-toggle="modal"
                            data-target="#modaLNotExpired">
                            <i class="fa fa-check mr-1 text-success"></i>
                            Tandai Tidak Expired
                        </a>
                        <a class="dropdown-item btn-doneList" href="" data-toggle="modal" data-target="#modalRefund">
                            <i class="fa fa-money mr-1 text-info"></i>
                            Refund
                        </a>
                        <a href="/admin/order/return" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-truck mr-2 text-warning"></i>
                            Return Barang
                        </a>
                        <a href="" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-times mr-2 text-danger"></i>
                            Expired
                        </a>
                    </div>
                </div>
            </td>
            <th scope="row">1</th>
            <td>
                <a href="/admin/order/show/namaorder">
                    200707000001 - Rosyi Zakiyyah
                </a>
            </td>
            <td>Rp.350.000</td>
            <td>
                <span class="badge badge-danger">Expired</span>
            </td>
            <td>
                <span class="badge badge-secondary">Belum Terkirim</span>
            </td>
            <td>
                <div class="row">
                    <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                    <a href="/admin/customer/profile">
                        Aprilia
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <th>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
            </th>
            <td>
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list text-danger"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item btn-doneList" href="/admin/order/show/namaorder">
                            <i class="fa fa-eye mr-1 text-primary"></i>
                            Lihat
                        </a>
                        <button type="button" class="dropdown-item btn-doneList" data-toggle="modal"
                            data-target="#modalOnlineBooking">
                            <i class=" fa fa-edit mr-1 text-success"></i>
                            Online Booking
                        </button>
                        <a class="dropdown-item btn-doneList" href="" data-toggle="modal"
                            data-target="#modaLNotExpired">
                            <i class="fa fa-check mr-1 text-success"></i>
                            Tandai Tidak Expired
                        </a>
                        <a class="dropdown-item btn-doneList" href="" data-toggle="modal" data-target="#modalRefund">
                            <i class="fa fa-money mr-1 text-info"></i>
                            Refund
                        </a>
                        <a href="/admin/order/return" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-truck mr-2 text-warning"></i>
                            Return Barang
                        </a>
                        <a href="" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-times mr-2 text-danger"></i>
                            Expired
                        </a>
                    </div>
                </div>
            </td>
            <th scope="row">1</th>
            <td>
                <a href="/admin/order/show/namaorder">
                    200707000001 - Rosyi Zakiyyah
                </a>
            </td>
            <td>Rp.350.000</td>
            <td>
                <span class="badge badge-danger">Dibatalkan</span>
            </td>
            <td>
                <span class="badge badge-secondary">Belum Terkirim</span>
            </td>
            <td>
                <div class="row">
                    <i class="fa fa-whatsapp fa-lg btn btn-success rounded mr-2"></i>
                    <a href="/admin/customer/profile">
                        Aprilia
                    </a>
                </div>
            </td>

        </tr>

    </tbody>
</table>
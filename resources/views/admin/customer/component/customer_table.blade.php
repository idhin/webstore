<table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Tipe</th>
            <th scope="col">Order Terakhir</th>
            <th scope="col">Total Pembelian</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </div>
            </th>
            <th scope="row">1</th>
            <td>
                <a href="/admin/customer/profile">
                    Nabila Celamis
                </a>
            </td>
            <td>nabilacelamis@gmail.com</td>
            <td>Bisa Login</td>
            <td>
                <a href="/admin/order/show/namaorder">
                    200707000001 - Rosyi Zakiyyah
                </a>
            </td>
            <td>Rp 69.000</td>
            <td>
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-danger"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item btn-doneList" href="/admin/customer/profile">
                            <i class="fa fa-eye mr-1 text-primary"></i>
                            Detail
                        </a>
                        <a class="dropdown-item btn-doneList" href="/admin/customer/manage">
                            <i class="fa fa-edit mr-1 text-success"></i>
                            Edit
                        </a>
                        <a href="" type="button" class="dropdown-item btn-removeList">
                            <i class="fa fa-trash mr-2 text-danger"></i>
                            Hapus
                        </a>
                    </div>
                </div>
            </td>
        </tr>

    </tbody>
</table>
<table class="table table-striped">
    <thead>
        <tr>
            <th></th>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">SKU</th>
            <th scope="col">Stok</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
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
                <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded" alt="Cinque Terre"
                    width="100px">
            </td>
            <td>
                <a href="/admin/product/namaproduct">
                    Nabila Celamis
                </a>
            </td>
            <td>-</td>
            <td>25</td>
            <td>Celamis</td>
            <td>Rp 69.000</td>
            <td>
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-danger"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left">
                        <a class="dropdown-item btn-doneList" href="">
                            <i class="fa fa-eye mr-1 text-primary"></i>
                            Lihat
                        </a>
                        <a class="dropdown-item btn-doneList" href="/admin/product/manage">
                            <i class="fa fa-edit mr-1 text-success"></i>
                            Edit
                        </a>
                        <a class="dropdown-item btn-doneList" href="">
                            <i class="fa fa-print mr-1 text-info"></i>
                            Laporan
                        </a>
                        <a class="dropdown-item btn-doneList" href="">
                            <i class="fa fa-copy mr-1 text-warning"></i>
                            Duplikat
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
<?php include("header.php"); ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>456 Transaksi</h4>
                                <h5>Offline</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>125 Transaksi</h4>
                                <h5>Shopee</h5>
                            </div>
                            <div class="dash-imgs">
                                <img src="img/shopee.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count bg-danger">
                            <div class="dash-counts">
                                <h4>58 Transaksi</h4>
                                <h5>Bukalapak</h5>
                            </div>
                            <div class="dash-imgs">
                                <img src="img/bukalapak.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>265</h4>
                                <h5>Tokopedia</h5>
                            </div>
                            <div class="dash-imgs">
                                <img src="img/tokopedia.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Offline & Online</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Offline</span>
                                        </li>
                                        <li>
                                            <span>Online</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2022 <img src="img/icon/dropdown.svg" alt="img" class="ms-2">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">New Marketplace Request Order</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="productlist.html" class="dropdown-item">Product List</a>
                                        </li>
                                        <li>
                                            <a href="addproduct.html" class="dropdown-item">Product Add</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Marketplace</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="productimgname">
                                                    <a href="#" class="product-img">
                                                        <img src="img/tokopedia.png" alt="product">
                                                    </a>
                                                    <a href="#">Alga Chloe</a>
                                                </td>
                                                <td>100 X 200 CM (Rp.8.500.000)</td>
                                            </tr> 
                                            <tr>
                                                <td>2</td>
                                                <td class="productimgname">
                                                    <a href="#" class="product-img">
                                                        <img src="img/bukalapak.png" alt="product">
                                                    </a>
                                                    <a href="#">Alga Carolyne</a>
                                                </td>
                                                <td>100 X 200 CM (Rp.8.500.000)</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Omnichanel Account</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Marketplace</th>
                                        <th>Username/Nama Toko</th>
                                        <th>Transaksi Sukses</th>
                                        <th>Transaksi Gagal</th>
                                        <th>Transaksi Diproses</th>
                                        <th>Omzet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="img/tokopedia.png" alt="" width="50px">
                                        </td>
                                        <td>Alga Matress Cilacap</td>
                                        <td>45 Transaksi</td>
                                        <td>5 Transaksi</td>
                                        <td>7 Transaksi</td>
                                        <td>Rp.254.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="img/tokopedia.png" alt="" width="50px">
                                        </td>
                                        <td>Alga Matress Tasikmalaya</td>
                                        <td>12 Transaksi</td>
                                        <td>2 Transaksi</td>
                                        <td>1 Transaksi</td>
                                        <td>Rp.45.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="img/tokopedia.png" alt="" width="50px">
                                        </td>
                                        <td>Alga Matress Bandung</td>
                                        <td>12 Transaksi</td>
                                        <td>2 Transaksi</td>
                                        <td>1 Transaksi</td>
                                        <td>Rp.45.000.000</td>
                                    </tr>
                                    
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <img src="img/tokopedia.png" alt="" width="50px">
                                        </td>
                                        <td>Alga Matress Jakarta</td>
                                        <td>121 Transaksi</td>
                                        <td>2 Transaksi</td>
                                        <td>19 Transaksi</td>
                                        <td>Rp.459.000.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include("footer.php");?>
<?php include('menu/header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<style>
    .file {
        position: relative;
        overflow: hidden;
    }

    #file {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">



                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown user-menu">
                    <a class="nav-link dropdown-toggle nav-profile d-flex align-items-center pe-0" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img src="asset/dist/img/avatar5.png" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-times-circle mr-2"></i> ยังไม่ได้ login เข้าใช้งาน
                            <ion-icon name="close-circle-outline"></ion-icon>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="index" class="dropdown-item">
                            <i class="fas fa-user-lock mr-2"></i> ลงชื่อเข้าใช้งาน

                        </a>
                        <div class="dropdown-divider"></div>


                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <?php include('menu/menuAdmin.php') ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">ข้อมูลสินค้า</h1>
                        </div>

                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- general form elements -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-barcode"></i>
                                        ข้อมูลสินค้า
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-10">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text px-2">ค้นหาข้อมูล </div>
                                                </div>

                                                <input type="text" class="form-control" autocomplete="yes" name="searchProduct" placeholder="ค้นหาข้อมูล">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">
                                                    <i class="fas fa-plus"></i>
                                                    เพิ่มสินค้า
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px" class="text-center">#</th>
                                                        <th class="text-center" style="width: 200px">บาร์โค้ด</th>
                                                        <th>ชื่อสินค้า</th>
                                                        <th class="text-center" style="width: 150px">ประเภทสินค้า</th>
                                                        <th class="text-center" style="width: 150px">จำนวนคงเหลือ</th>
                                                        <th class="text-center" style="width: 100px">แก้ไข</th>
                                                        <th class="text-center" style="width: 100px">ลบ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1.</td>
                                                        <td class="text-center">1234567890123</td>
                                                        <td>
                                                            คอมพิวเตอร์
                                                        </td>
                                                        <td>
                                                            อุปกรณ์ไอที
                                                        </td>
                                                        <td class="text-center">10 เครื่อง</td>
                                                        <td class="text-center"> <i class="fas fa-edit"></i></td>
                                                        <td class="text-center"> <i class="fas fa-times delete-row"></i></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2.</td>
                                                        <td class="text-center">1234567890123</td>
                                                        <td>
                                                            เมาส์
                                                        </td>
                                                        <td>
                                                            อุปกรณ์ไอที
                                                        </td>
                                                        <td class="text-center">5 อัน</td>
                                                        <td class="text-center"> <i class="fas fa-edit"></i></td>
                                                        <td class="text-center"> <i class="fas fa-times delete-row"></i></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3.</td>
                                                        <td class="text-center">1234567890123</td>
                                                        <td>
                                                            คีย์บอร์ด
                                                        </td>
                                                        <td>
                                                            อุปกรณ์ไอที
                                                        </td>
                                                        <td class="text-center">5 อัน</td>
                                                        <td class="text-center"> <i class="fas fa-edit"></i></td>
                                                        <td class="text-center"> <i class="fas fa-times delete-row"></i></td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4.</td>
                                                        <td class="text-center">1234567890123</td>
                                                        <td>
                                                            น้ำหมึก
                                                        </td>
                                                        <td>
                                                            อุปกรณ์ไอที
                                                        </td>
                                                        <td class="text-center">1 กล่อง</td>
                                                        <td class="text-center"> <i class="fas fa-edit"></i></td>
                                                        <td class="text-center"> <i class="fas fa-times delete-row"></i></td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
            </section>
            <?php include('menu/footer.php') ?>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <i class="fas fa-plus"></i>
                                เพิ่มข้อมูลสินค้า
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">รหัสบาร์โค้ด : <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="รหัสบาร์โค้ด">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">ชื่อสินค้า : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="inputPassword3" placeholder="ชื่อสินค้า">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">ประเภทสินค้า : <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" autocomplete="yes" class="form-control" id="inputEmail3" placeholder="รหัสบาร์โค้ด">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">หน่วย : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="inputPassword3" placeholder="หน่วย">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-4 col-form-label">จำนวนสินค้า : <span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" autocomplete="yes" class="form-control" id="inputPassword3" placeholder="จำนวนสินค้า">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-6" style="align-content: center;">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <img class="card-img-top" style="width: 150px;" id="imageProduct">
                                        </div>
                                        <div class="card-body">
                                            <div class="file btn btn-primary">
                                                เพิ่มรุป
                                                <input type="file" id="file" name="file" onchange="loadFile(this)" accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-center">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                                บันทึก
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fas fa-times delete-row"></i>
                                ยกเลิก
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('menu/script.php') ?>
</body>

<script src="asset/plugins/select2/js/select2.full.min.js"></script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()
    })

    function loadFile(input) {
        var imageProduct = document.getElementById('imageProduct');
        if (input.files && input.files[0]) {
            imageProduct.src = URL.createObjectURL(input.files[0]);
            imageProduct.onload = function() {
                URL.revokeObjectURL(imageProduct.src); // free memory
            }
        } else {
            imageProduct.src = ''; // Clear the image source if no file is selected
        }
    }
</script>


</html>
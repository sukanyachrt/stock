<?php include('menu/header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<link rel="stylesheet" href="asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="asset/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
<?php
include('./services/Connect_Data.php');
$connect = new Connect_Data();
$connect->connectData();
?>

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
                            <h1 class="m-0">ข้อมูลพนักงาน</h1>
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
                                        <i class="fas fa-users"></i>
                                        ข้อมูลสินค้า
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text px-2">ค้นหาข้อมูล </div>
                                                </div>
                                                <input type="text" class="form-control" autocomplete="yes" id="searchEmploy" name="searchEmploy" placeholder="ค้นหาข้อมูล">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fas fa-plus"></i>
                                                        เพิ่มข้อมูล</button>
                                                </div>
                                               
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-bordered table-hover" id="tbDataEmploy">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px" class="text-center">#</th>
                                                        <th class="text-center">รหัสพนักงาน</th>
                                                        <th>ชื่อ-สกุล</th>
                                                        <th class="text-center">แผนก</th>
                                                        <th class="text-center">Username</th>
                                                        <th class="text-center">สถานะ</th>
                                                        <th class="text-center">จัดการข้อมูล</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <strong>ระบบ Stock <a href="https://adminlte.io">@2023</a></strong>

            <div class="float-right d-none d-sm-inline-block">
                <b>By</b> นักศึกษาฝึกงาน.
            </div>
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- เพิ่มข้อมูล -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="form-horizontal" id="employeeForm">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <i class="fas fa-plus"></i>
                                เพิ่มข้อมูลพนักงาน
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">รหัสพนักงาน : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="empid" name="empid" placeholder="รหัสพนักงาน">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">ชื่อ : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="fname" name="fname" placeholder="ชื่อ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">นามสกุล : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="lname" name="lname" placeholder="นามสกุล">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">แผนก : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <?php
                                            $connect->sql = "SELECT * FROM depart WHERE status=1";
                                            $connect->queryData();
                                            ?>
                                            <select class="form-control" id="depart" name="depart">
                                                <option disabled selected value="">-- เลือก --</option>
                                                <?php
                                                while ($rsconnect = $connect->fetch_AssocData()) {
                                                ?>
                                                    <option value="<?= $rsconnect['id'] ?>"><?php echo $rsconnect['departname'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">สิทธิ์ผู้ใช้งาน : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="role_emp" name="role_emp">
                                                <option disabled selected value="">-- เลือก --</option>
                                                <option value="user">ผู้ใช้งานทั่วไป</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Username : </label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="username" name="username" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password : </label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="password" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="modal-footer justify-content-center">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" id="checkAdd" class="custom-control-input">
                                <label class="custom-control-label" for="checkAdd">เพิ่มรายชื่ออื่นๆ ต่อ</label>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                                บันทึก
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fas fa-times delete-row"></i>
                                ยกเลิก
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- จบเพิ่มข้อมุล -->
        <!-- แก้ไขข้อมูล -->
        <div class="modal fade" id="modal-edit">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="form-horizontal" id="editemployeeForm">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title">
                                <i class="fa fa-edit"></i>
                                แก้ไขข้อมูลพนักงาน
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">รหัสพนักงาน : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="editempid" name="editempid" placeholder="รหัสพนักงาน">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">ชื่อ : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="editfname" name="editfname" placeholder="ชื่อ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">นามสกุล : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="editlname" name="editlname" placeholder="นามสกุล">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">แผนก : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <?php
                                            $connect->sql = "SELECT * FROM depart WHERE status=1";
                                            $connect->queryData();
                                            ?>
                                            <select class="form-control" id="editdepart" name="editdepart">
                                                <option disabled selected value="">-- เลือก --</option>
                                                <?php
                                                while ($rsconnect = $connect->fetch_AssocData()) {
                                                ?>
                                                    <option value="<?= $rsconnect['id'] ?>"><?php echo $rsconnect['departname'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">สิทธิ์ผู้ใช้งาน : <span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="editrole_emp" name="editrole_emp">
                                                <option disabled selected value="">-- เลือก --</option>
                                                <option value="user">ผู้ใช้งานทั่วไป</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Username : </label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="editusername" name="editusername" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-3 col-form-label">Password : </label>
                                        <div class="col-sm-9">
                                            <input type="text" autocomplete="yes" class="form-control" id="editpassword" name="editpassword" placeholder="Password">
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <div class="modal-footer justify-content-center">
                            <input type="hidden" id="editId" name="editId" value="">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i>
                                บันทึกการแก้ไข
                            </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fas fa-times delete-row"></i>
                                ยกเลิก
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- จบแก้ไขข้อมูล -->
    <!-- confrom การลบข้อมูล -->
    <div class="modal fade" id="modal-confirmDel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">ยืนยันการลบข้อมูล</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>ยืนยันการลบ</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" id="delId" onclick="del()" class="btn btn-primary">ยืนยัน</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <?php include('menu/script.php') ?>
</body>
<style>
    .dataTables_paginate.paging_simple_numbers {
        float: right;
    }
</style>
<script src="asset/plugins/select2/js/select2.full.min.js"></script>
<script src="asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="asset/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="asset/plugins/toastr/toastr.min.js"></script>
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

<script>
    $(function() {
        $('.select2').select2();
        loadDataemploy();

    })


    $("#searchEmploy").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#tbDataEmploy tbody tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    function loadDataemploy() {
        $.ajax({
            url: "services/employee/data.php?v=searchemp",
            success: function(response) {
                var tbDataEmploy = '';
                $.each(response, function(index, item) {
                    data_approve = '';
                    tbDataEmploy += `<tr>
                        <td class="text-center">${index+1}.</td>
                        <td class="text-center">${item.empid}</td>
                        <td>${item.fname} ${item.lname}</td>
                        <td class="text-center">${item.departname}</td>
                        <td class="text-center">${item.username}</td>
                        <td class="text-center">
                            ${item.status_emp==1 ? '<span class="badge bg-success">ใช้งาน</span>' : '<span class="badge bg-danger">ไม่ใช้งาน</span>'}
                        </td>
                        </td>
                        <td class="text-center">
                            <button type="button" onclick="modalEdit(${JSON.stringify(item).replace(/"/g, '&quot;')})" data-toggle="modal" data-target="#modal-edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></button>
                            <button type="button" data-toggle="modal" data-target="#modal-confirmDel"  onclick="confirmDel(${item.id})" class="btn btn-danger btn-sm"> <i class="fas fa-times delete-row"></i></button>
                        </td>
                    </tr>`
                });
                var table = $('#tbDataEmploy').DataTable();
                table.destroy();
                $('#tbDataEmploy tbody').html(tbDataEmploy);

                // $('#tbDataEmploy tbody').html(tbDataEmploy);
                $("#tbDataEmploy").DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });



            },
            error: function(error) {
                console.log(error)
            }
        });
    }



    //เพิ่มข้อมูล
    $('#employeeForm').validate({
        rules: {
            empid: {
                required: true,
            },
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            depart: {
                required: true,
            },
            role_emp: {
                required: true,
            },

        },
        messages: {
            empid: {
                required: "โปรดกรอกรหัสพนักงาน",

            },
            fname: {
                required: "โปรดกรอกชื่อพนักงาน",

            },
            lname: {
                required: "โปรดกรอกนามสกุลพนักงาน",

            },
            depart: {
                required: "โปรดกรอกเลือกแผนก",

            },
            role_emp: {
                required: "โปรดกรอกสิทธิ์การเข้าใช้งาน",

            },


        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {

            $.ajax({
                type: 'POST',
                url: "services/employee/data.php?v=insertEmp",
                data: $(form).serialize(),
                success: function(response) {
                    if (!$('#checkAdd').is(':checked')) {
                        $('#modal-default').modal('hide');
                    }
                    toastr.success('บันทึกข้อมูลแล้วครับ.')
                    form.reset();
                },
                error: function(error) {
                    console.log(error)
                }
            });
        }

    });

    //แก้ไข
    function modalEdit(item) {
        console.log(item)
        $('#editId').val(item.id)
        $('#editempid').val(item.empid)
        $('#editfname').val(item.fname)
        $('#editlname').val(item.lname)
        $('#editdepart').val(item.depart)
        $('#editrole_emp').val(item.role_emp)
        $('#editusername').val(item.username)
        $('#editpassword').val(item.password)
    }

    $('#editemployeeForm').validate({
        rules: {
            editempid: {
                required: true,
            },
            editfname: {
                required: true,
            },
            editlname: {
                required: true,
            },
            editdepart: {
                required: true,
            },
            editrole_emp: {
                required: true,
            },

        },
        messages: {
            editempid: {
                required: "โปรดกรอกรหัสพนักงาน",

            },
            editfname: {
                required: "โปรดกรอกชื่อพนักงาน",

            },
            editlname: {
                required: "โปรดกรอกนามสกุลพนักงาน",

            },
            editdepart: {
                required: "โปรดกรอกเลือกแผนก",

            },
            editrole_emp: {
                required: "โปรดกรอกสิทธิ์การเข้าใช้งาน",

            },


        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {

            $.ajax({
                type: 'POST',
                url: "services/employee/data.php?v=editemp",
                data: $(form).serialize(),
                success: function(response) {
                    $('#modal-edit').modal('hide');
                    loadDataemploy();
                    toastr.success('แก้ไขข้อมูลแล้วครับ.')
                    form.reset();
                },
                error: function(error) {
                    console.log(error)
                }
            });
        }

    });

    //ลบข้อมูล

    function confirmDel(objId) {
        $('#delId').val(objId)

    }

    function del() {
        var id = $('#delId').val();
        $.ajax({
            url: "services/employee/data.php?v=delemp&id=" + id,
            success: function(response) {
                loadDataemploy();
                $('#modal-confirmDel').modal('hide');
                toastr.success('ลบข้อมูลแล้วครับ.')
            }
        });
    }
</script>


</html>
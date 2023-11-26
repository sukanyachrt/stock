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

    #editfile {
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
                            <h1 class="m-0">ข้อมูลหน่วยนับ</h1>
                        </div>

                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-barcode"></i>
                                        ข้อมูลหน่วยนับ
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text px-2">ค้นหาข้อมูล</div>
                                                </div>
                                                <input type="text" class="form-control" autocomplete="yes" id="textsearch" name="textsearch" placeholder="ค้นหาข้อมูล">

                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-Unit"><i class="fas fa-plus"></i>
                                                        เพิ่มข้อมูล</button>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12 table-responsive p-0">
                                            <table class="table table-bordered" id="tbUnits">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 200px">ชื่อหน่วยนับ</th>
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
                    <br /><br /><br />
            </section>
            <!-- เพิ่มหน่วยนับ -->
            <div class="modal fade" id="modal-Unit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="UnitForm">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">เพิ่มข้อมูล Unit</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ชื่อหน่วย :</label>
                                    <input type="text" autocomplete="yes" class="form-control" id="unitName" name="unitName" placeholder="ชื่อหน่วย">
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- จบหน่วยนับ -->
            <!-- แก้ไขข้อมูล -->
            <div class="modal fade" id="modal-edit">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <form class="form-horizontal" id="editunitForm">
                            <div class="modal-header bg-warning">
                                <h4 class="modal-title">
                                    <i class="fa fa-edit"></i>
                                    แก้ไขข้อมูลหน่วยนับ
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    ชื่อหน่วย
                                                </span>
                                            </div>
                                            <input type="text" autocomplete="yes" class="form-control" id="editunitName" name="editunitName" placeholder="ชื่อหน่วย">


                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    สถานะ
                                                </span>
                                            </div>
                                            <select id="editunitstatus" name="editunitstatus" class="form-control">
                                                <option disabled selected value="">-- เลือก --</option>
                                                <option value="1">ใช้งาน</option>
                                                <option value="0">ไม่ใช้งาน</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="modal-footer justify-content-center">
                                <input type="hidden" id="editId" name="editId" value="">
                                <button type="submit" class="btn btn-warning">
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
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">ยืนยันการลบข้อมูล</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>ยืนยันการลบ?</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" id="delId" onclick="del()" class="btn btn-danger">ยืนยัน</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

                    </div>
                </div>
            </div>
        </div>

        <?php include('menu/footer.php') ?>

        <?php include('menu/script.php') ?>
</body>

<style>
    .dataTables_paginate.paging_simple_numbers {
        float: right;
    }

    .input-group>.select2-container--bootstrap4 {
        width: auto !important;
        flex: 1 1 auto !important;
    }

    .input-group>.select2-container--bootstrap4 .select2-selection--single {
        height: 100% !important;
        line-height: inherit !important;
    }

    .dataTables_filter {
        display: none;
    }
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.full.js"></script>

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
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    $(function() {

        getUnits();

    });
    $('#textsearch').focus()
    const textsearch = document.querySelector('#textsearch');

    const table = new DataTable('#tbUnits')

    textsearch.addEventListener('input', function() {
        table.draw();
    });

    let isModalOpen = false;

    textsearch.addEventListener('input', function(event) {
        DataTable.ext.search.push(function(settings, data, dataIndex) {
            const searchText = textsearch.value.toLowerCase();
            const rowData = data.join(' ').toLowerCase();

            return rowData.includes(searchText);
        });

        const table = new DataTable('#tbUnits');

        textsearch.addEventListener('input', function() {
            table.draw();
        });
    });
    //get ข้อมูล
    function getUnits() {
        $.ajax({
            type: 'GET',
            url: "services/units/data.php?v=searchUnits",
            success: function(response) {
                var table = $('#tbUnits').DataTable();
                table.clear();
                var tbUnits = '';
                $.each(response, function(index, item) {
                    tbUnits += `<tr id="row_${item.id}">
                        <td class="text-center">${item.nameunit}</td>
                        <td class="text-center">
                            ${item.status==1 ? '<span class="badge bg-success">ใช้งาน</span>' : '<span class="badge bg-danger">ไม่ใช้งาน</span>'}
                        </td>
                        <td class="text-center">
                            <button type="button" onclick="modalEdit(${JSON.stringify(item).replace(/"/g, '&quot;')})" data-toggle="modal" data-target="#modal-edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></button>
                            ${item.status==1 ? '<button type="button" data-toggle="modal" data-target="#modal-confirmDel"  onclick="confirmDel(' + item.id + ')" class="btn btn-danger btn-sm"> <i class="fas fa-times delete-row"></i></button>' : '<button type="button" class="btn btn-default btn-sm"> <i class="fas fa-times delete-row"></i></button>' }
                        </td>
                    </tr>`
                });
                table.rows.add($(tbUnits)).draw();
                table.draw();
            },
            error: function(error) {
                console.log(error)
            }
        });
    }
    //เพิ่มข้อมูล
    $('#UnitForm').validate({
        rules: {
            unitName: {
                required: true,
            },

        },
        messages: {
            unitName: {
                required: "โปรดกรอกชื่อหน่วยนับ",

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
                url: "services/units/data.php?v=insertUnit",
                data: $(form).serialize(),
                success: function(response) {
                    //console.log(response)
                    $('#modal-Unit').modal('hide');
                    getUnits()
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
        $('#editunitName').val(item.nameunit)
        $('#editunitstatus').val(item.status);


    }

    $('#editunitForm').validate({
        rules: {
            editunitName: {
                required: true,
            },
            editunitstatus: {
                required: true,
            },

        },
        messages: {
            editunitName: {
                required: "โปรดกรอกชื่อหน่วยนับ",

            },
            editunitstatus: {
                required: "โปรดกรอกเลือกสถานะ",

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
                url: "services/units/data.php?v=updateUnit",
                data: $(form).serialize(),
                success: function(response) {

                    $('#modal-edit').modal('hide');
                    getUnits()
                    toastr.success('บันทึกการแก้ไขข้อมูลแล้วครับ.')
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
            url: "services/units/data.php?v=delunit&id=" + id,
            success: function(response) {
                getUnits();
                $('#modal-confirmDel').modal('hide');
                toastr.success('ลบข้อมูลแล้วครับ.')
            }
        });
    }
</script>


</html>
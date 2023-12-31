<?php include('menu/header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<link rel="stylesheet" href="asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="asset/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
    <?php include('menu/nav.php') ?>
    <!-- /.navbar -->

        <?php include('menu/menuAdmin.php') ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">ประเภทสินค้า</h1>
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
                                        ข้อมูลประเภทสินค้า
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
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-producttype"><i class="fas fa-plus"></i>
                                                        เพิ่มข้อมูล</button>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-12 table-responsive p-0">
                                            <table class="table table-bordered" id="tbProducttype">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" style="width: 200px">ชื่อประเภทสินค้า</th>
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
            <!-- เพิ่มประเภทสินค้า -->
            <div class="modal fade" id="modal-producttype">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="productTypeForm">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title">เพิ่มข้อมูลประเภทสินค้า</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ชื่อประเภทสินค้า :</label>
                                    <input type="text" autocomplete="yes" class="form-control" id="nametype" name="nametype" placeholder="ชื่อประเภทสินค้า">
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
            <!-- แก้ไขข้อมูล -->
            <div class="modal fade" id="modal-edit">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <form class="form-horizontal" id="editproducttypeForm">
                            <div class="modal-header bg-warning">
                                <h4 class="modal-title">
                                    <i class="fa fa-edit"></i>
                                    แก้ไขข้อมูลประเภทสินค้า
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
                                                    ชื่อประเภทสินค้า
                                                </span>
                                            </div>
                                            <input type="text" autocomplete="yes" class="form-control" id="editnametype" name="editnametype" placeholder="ชื่อประเภทสินค้า">
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    สถานะ
                                                </span>
                                            </div>
                                            <select id="edittypestatus" name="edittypestatus" class="form-control">
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

        getProductType()
        $('#textsearch').focus()
        const textsearch = document.querySelector('#textsearch');

        const table = new DataTable('#tbProducttype')

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

            const table = new DataTable('#tbProducttype');

            textsearch.addEventListener('input', function() {
                table.draw();
            });
        });
    });

    //get ข้อมูล
    function getProductType() {
        $.ajax({
            type: 'GET',
            url: "services/producttype/data.php?v=searchProducttype",
            success: function(response) {
                var table = $('#tbProducttype').DataTable();
                table.clear();
                var tbProducttype = '';
                $.each(response, function(index, item) {
                    tbProducttype += `<tr id="row_${item.id}">
                        <td class="text-center">${item.nametype}</td>
                        <td class="text-center">
                            ${item.status==1 ? '<span class="badge bg-success">ใช้งาน</span>' : '<span class="badge bg-danger">ไม่ใช้งาน</span>'}
                        </td>
                        <td class="text-center">
                            <button type="button" onclick="modalEdit(${JSON.stringify(item).replace(/"/g, '&quot;')})" data-toggle="modal" data-target="#modal-edit" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></button>
                            ${item.status==1 ? '<button type="button" data-toggle="modal" data-target="#modal-confirmDel"  onclick="confirmDel(' + item.id + ')" class="btn btn-danger btn-sm"> <i class="fas fa-times delete-row"></i></button>' : '<button type="button" class="btn btn-default btn-sm"> <i class="fas fa-times delete-row"></i></button>' }
                        </td>
                    </tr>`
                });
                table.rows.add($(tbProducttype)).draw();
                table.draw();

            },
            error: function(error) {
                console.log(error)
            }
        });
    }
    //เพิ่มข้อมูล
    $('#productTypeForm').validate({
        rules: {
            nametype: {
                required: true,
            },

        },
        messages: {
            nametype: {
                required: "โปรดกรอกชื่อประเภทสินค้า",

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
                url: "services/producttype/data.php?v=insertProducttype",
                data: $(form).serialize(),
                success: function(response) {
                    //console.log(response)
                    $('#modal-producttype').modal('hide');
                    getProductType()
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
        $('#editnametype').val(item.nametype)
        $('#edittypestatus').val(item.status);


    }

    $('#editproducttypeForm').validate({
        rules: {
            editnametype: {
                required: true,
            },
            edittypestatus: {
                required: true,
            },

        },
        messages: {
            editnametype: {
                required: "โปรดกรอกชื่อประเภทสินค้า",

            },
            edittypestatus: {
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
                url: "services/producttype/data.php?v=updateProducttype",
                data: $(form).serialize(),
                success: function(response) {
                    console.log(response)
                    $('#modal-edit').modal('hide');
                    getProductType()
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
            url: "services/producttype/data.php?v=delproducttype&id=" + id,
            success: function(response) {
                getProductType();
                $('#modal-confirmDel').modal('hide');
                toastr.success('ลบข้อมูลแล้วครับ.')
            }
        });
    }
</script>


</html>
<?php include('header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<link rel="stylesheet" href="asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
<link rel="stylesheet" href="asset/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<style>
    

    #tblistProducts tbody tr.hover {
        background-color: #87CEFA;
        /* เปลี่ยนสีตามที่คุณต้องการ */
        cursor: pointer;
    }

    .dataTables_empty {
        display: none;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
    <?php include('menu/nav.php') ?>
    <!-- /.navbar -->

        <?php include('menu/menuUser.php') ?>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> ประวัติการเบิก - คืนสินค้า</h1>
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
                                        ประวัติการเบิก - คืนสินค้า
                                    </h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 table-responsive">
                                            <table class="table table-bordered" id="tbwithdraws">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">บาร์โค้ด</th>
                                                        <th class="text-center">ชื่อสินค้า</th>
                                                        <th class="text-center">ประเภทสินค้า</th>
                                                        <th class="text-center">จำนวน</th>
                                                        <th class="text-center">ผู้เบิก-คืนของ</th>
                                                        <th class="text-center">วันที่ทำรายการ</th>
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
            </section>


           

        </div>

        <?php include('script.php') ?>
</body>
<script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
    getHistory();
    const tableHistory = new DataTable('#tbwithdraws');


    function getHistory() {
        $.ajax({
            type: 'GET',
            url: "services/withdraws/data.php?v=searchHistoryAll",
            success: function(response) {
                console.log(response)
                var tableHistory = $('#tbwithdraws').DataTable();
                tableHistory.clear();
                var tbwithdraws = '';
                $.each(response, function(index, item) {
                    tbwithdraws += `<tr>
                    <td class="text-center">${index+1}</td>
                    <td class="text-center">${item.barcode}</td>
                    <td>${item.productname}</td>
                    <td class="text-center">${item.nametype}</td>
                    <td class="text-center">${item.numwithdraw} ${item.nameunit}</td>
                    <td class="text-center">${item.employuse}</td>
                    <td class="text-center">${moment(item.dateinsert, "YYYY-MM-DD HH:mm:ss").format("DD/MM/YYYY HH:mm:ss")}</td>
                </tr>`;
                });
                tableHistory.rows.add($(tbwithdraws)).draw();
            },
            error: function(error) {
                console.log(error)
            }
        });
    }
</script>


</html>
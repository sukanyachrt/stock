<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ</title>

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@500&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="asset/plugins/toastr/toastr.min.css">
    <style type="text/css">
        body {
            font-family: 'Sarabun', sans-serif;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>ระบบ STOCK </b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">กรุณาเข้าสู่ระบบ</p>
                <form action="#" method="post" id="myForm">
                    <div class="input-group mb-3">
                        <input name="username" autocomplete="no" value="admin" type="text" class="form-control" placeholder="รหัสผู้ใช้งาน" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="password" type="password" class="form-control" placeholder="รหัสผ่าน" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ </button>
                        </div>
                        <div class="col-12 mt-3">
                            <button type="button" id="notCheckuser" class="btn btn-default btn-block">เข้าใช้งานโดยไม่ login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="asset/plugins/jquery/jquery.min.js"></script>
    <script src="asset/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="asset/plugins/toastr/toastr.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="asset/dist/js/adminlte.min.js"></script>

</body>
<script>
    $(document).ready(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
        $("#myForm").submit(function(e) {
            e.preventDefault();


            var form = $('#myForm')[0];
            var formdataA = new FormData(form);
            $.ajax({
                async: true,
                url: "services/auth/data.php?v=checkauth",
                type: "POST",
                cache: false,
                data: formdataA,
                processData: false, // tell jQuery not to process the data
                contentType: false,
                success: function(Res) {
                    //console.log(Res)
                    if (Res.status == "ok") {
                        postSession(Res);
                    } else {
                        toastr.error(Res.msg)
                    }
                }
            });
            // window.location.replace('admin');

        });
    });

    $("#notCheckuser").on("click", function() {
        window.location.replace('user');

    })

    function postSession(data) {
        $.ajax({
            url: "services/createsession.php",
            type: "POST",
            data: data, // ใช้ข้อมูลจากการร้องขอแรก
            success: function(Res) {
               window.location.replace(Res.role_emp);
            },

        });
    }
</script>

</html>
<script>
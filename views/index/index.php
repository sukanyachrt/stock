<?php include('header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">

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
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
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

    <?php include('menu/menuUser.php') ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">เบิก - คืนสินค้า</h1>
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

                        <input type="text" class="form-control" autocomplete="yes" name="searchProduct" placeholder="ค้นหาจากบาร์โค้ด">
                      </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                        <button type="button" class="btn btn-block btn-primary">
                          <i class="fas fa-search"></i>
                          ค้นหาข้อมูล
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
                            <th class="text-center" style="width: 150px">จำนวน</th>
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

                            <td><input type="number" class="form-control float-right" placeholder="จำนวนที่เบิก"></td>
                            <td class="text-center"> <i class="fas fa-times delete-row"></i></td>

                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="button" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    บันทึกข้อมูล
                  </button>
                  <button type="button" class="btn btn-warning">
                  <i class="fas fa-undo"></i>
                    ยกเลิก
                  </button>
                </div>

              </div>
            </div>
          </div>
      </section>
      <!-- /.content-wrapper -->
      <?php include('footer.php') ?>



      <aside class="control-sidebar control-sidebar-light">
        <!-- Control sidebar content goes here -->
      </aside>

    </div>

    <?php include('script.php') ?>
</body>

<script src="asset/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function() {
    $('.select2').select2()

  });
  let rowCounter = 1;

  const myTable = () => {
    return `<tr>
      <td>${rowCounter++}</td>
      <td>
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">-- เลือกประเภทสินค้า --</option>
          <option>Alaska</option>
          <option>California</option>
          <option>Delaware</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option>Washington</option>
        </select>
      </td>
      <td>
        <select class="form-control select2" style="width: 100%;">
          <option selected="selected">-- เลือกรายการสินค้า --</option>
          <option>Alaska</option>
          <option>California</option>
          <option>Delaware</option>
          <option>Tennessee</option>
          <option>Texas</option>
          <option>Washington</option>
        </select>
      </td>
      <td><input type="number" class="form-control float-right" placeholder="จำนวนที่เบิก"></td>
      <td><input type="text" class="form-control float-right" placeholder="หน่วย"></td>
      <td> <i class="fas fa-times delete-row"></i></td>
    </tr>`;
  };
  const updateRowCounter = () => {
    // Update the counter in each row
    $('#myTable tbody tr').each(function(index) {
      $(this).find('td:first').text(index + 1);
    });

    // Update the global counter
    rowCounter = $('#myTable tbody tr').length + 1;
  };
  $(function() {
    $('#myTable tbody').html(myTable)
    $('#myTable tbody').find('.select2').select2();
  });

  function AddRowData() {
    $('#myTable tbody').append(myTable);
    $('#myTable tbody').find('.select2').select2();
  }
  $('#myTable tbody').on('click', '.delete-row', function() {
    // Find the closest row and remove it
    $(this).closest('tr').remove();
    updateRowCounter();
  });
</script>

</html>
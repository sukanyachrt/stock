<?php include('menu/header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
              <h1 class="m-0">ภาพรวมของระบบ</h1>
            </div>

          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-layer-group"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">จำนวนสินค้าในสต๊อก</span>
                  <span class="info-box-number">
                    10
                    <small>Items</small>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">ปริมาณการเบิกสินค้า</span>
                  <span class="info-box-number">
                    10
                    <small>items</small>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">ปริมาณการคืนของสินค้า</span>
                  <span class="info-box-number">
                    10
                    <small>items</small>
                  </span>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">จำนวนพนักงาน</span>
                  <span class="info-box-number">
                    10
                    <small>คน</small>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h3 class="card-title">สต๊อกแยกตามประเภทสินค้า</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-success card-outline">
                <div class="card-header">
                  <h3 class="card-title">สต๊อกแยกตามสินค้า</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <!-- general form elements -->
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-barcode"></i>
                    ประวัติการเบิก - คืนสินค้า
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <button class="nav-link active btn btn-block" onclick="findWithdraw('ทั้งหมด')" data-toggle="tab">ทั้งหมด</button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link  btn btn-block" onclick="findWithdraw('เบิกสินค้า')" data-toggle="tab">เบิกสินค้า</button>
                      </li>
                      <li class="nav-item">
                        <button class="nav-link btn btn-block" onclick="findWithdraw('คืนสินค้า')" data-toggle="tab">คืนสินค้า</button>
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-12">
                      <table class="table table-bordered" id="tbwithdraws">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">บาร์โค้ด</th>
                            <th class="text-center">ชื่อสินค้า</th>
                            <th class="text-center">ประเภทสินค้า</th>
                            <th class="text-center">ประเภทการเบิก-คืน</th>
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
        </div>
      </section>


    </div>

    <?php include('menu/script.php') ?>
</body>

<script src="asset/plugins/select2/js/select2.full.min.js"></script>
<script src="asset/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="asset/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="asset/plugins/chart.js/Chart.min.js"></script>
<script>
  $(function() {
    $('.select2').select2();
    pieStockTypeproducts();
    pieStockProducts();
    getHistory();

  });

  const table = new DataTable('#tbwithdraws');

  function findWithdraw(typewithdraw) {
    var value = typewithdraw;
    if (value != "ทั้งหมด") {
      $("#tbwithdraws tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
    } else {
      $("#tbwithdraws tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value));
      });
    }

  }


  function getHistory() {
    $.ajax({
      type: 'GET',
      url: "services/withdraws/data.php?v=searchHistoryAll",
      success: function(response) {
        var tableHistory = $('#tbwithdraws').DataTable();
        tableHistory.clear();
        var tbwithdraws = '';
        $.each(response, function(index, item) {
          tbwithdraws += `<tr>
                    <td class="text-center">${index+1}</td>
                    <td class="text-center">${item.barcode}</td>
                    <td>${item.productname}</td>
                    <td class="text-center">${item.nametype}</td>
                    <td class="text-center">${item.typewithdraw}</td>
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

  function pieStockTypeproducts() {
    var donutData        = {
      labels: [
          'เครื่องเขียน',
          'อุปกรณ์สำนักงาน',
          'อื่นๆ',
          
      ],
      datasets: [
        {
          data: [10,2,6],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12'],
        }
      ]
    }
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = donutData;
    var pieOptions = {
      maintainAspectRatio: false,
      responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
  }

  function pieStockProducts() {
    var donutData        = {
      labels: [
          'ปากกาสีแดง',
          'ยางลบ',
          'ดินสอ',
          'ปากกาดำ',
          'เมาส์',
          'น้ำ',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
    var pieData = donutData;
    var pieOptions = {
      maintainAspectRatio: false,
      responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
  }
</script>

</html>
<?php include('menu/header.php') ?>

<link rel="stylesheet" href="asset/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<?php
include("./services/Connect_Data.php");
$connect = new Connect_Data();
$connect->connectData();
?>

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
                    <?php
                    $connect->sql = "SELECT sum( numproduct ) AS numproduct 
                      FROM
                      products
                      where `status`=1";
                    $connect->queryData();
                    $rsconnect = $connect->fetch_AssocData();
                    echo $rsconnect['numproduct'] ?? 0;
                    ?>

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
                    <?php
                    $connect->sql = "SELECT sum( numwithdraw )  as numwithdraw
                    FROM withdraw WHERE `status` = 1 
                    AND typewithdraw = 'เบิกสินค้า'";
                    $connect->queryData();
                    $rsconnect = $connect->fetch_AssocData();
                    echo $rsconnect['numwithdraw'] ?? 0;
                    ?>
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
                    <?php
                    $connect->sql = "SELECT sum( numwithdraw )  as numwithdraw
                    FROM withdraw WHERE `status` = 1 
                    AND typewithdraw = 'คืนสินค้า'";
                    $connect->queryData();
                    $rsconnect = $connect->fetch_AssocData();
                    echo $rsconnect['numwithdraw'] ?? 0;
                    ?>
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
                    <?php
                    $connect->sql = "SELECT count(*) as numemploy
                    FROM  employees where status_emp=1";
                    $connect->queryData();
                    $rsconnect = $connect->fetch_AssocData();
                    echo $rsconnect['numemploy'] ?? 0;
                    ?>
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
                  <canvas id="pieChart_typeproduct" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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
                  <canvas id="pieChart_of_product" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
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

                <div class="card-body table-responsive">
                  <div class="row">
                    <div class="col-12 ">
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
    $.ajax({
      type: 'GET',
      url: "services/dashboard/data.php?v=stockoftypeproduct",
      success: function(response) {
        console.log(response)
        var labels = [];
        var data = [];
        $.each(response, function(index, item) {
          labels.push(item.nametype)
          data.push(item.numproduct ?? 0)
        });
        var pieChartStockoftype = {
          labels: labels,
          datasets: [{
            data: data,
            backgroundColor: data.map(() => getRandomColor())
          }]
        }
        var pieChartCanvas = $('#pieChart_typeproduct').get(0).getContext('2d')
        var pieData = pieChartStockoftype;
        var pieOptions = {

          maintainAspectRatio: false,
          responsive: true,
        }
        new Chart(pieChartCanvas, {
          type: 'pie',
          data: pieData,
          options: pieOptions
        })
      }
    });

  }

  function pieStockProducts() {
    $.ajax({
      type: 'GET',
      url: "services/dashboard/data.php?v=stockofproduct",
      success: function(response) {
       // console.log(response)
        var labels = [];
        var data = [];
        $.each(response, function(index, item) {
          labels.push(item.productname)
          data.push(item.numproduct ?? 0)
        });
        var pieChartStockoftype = {
          labels: labels,
          datasets: [{
            data: data,
            backgroundColor: data.map(() => getRandomColor())
          }]
        }
        var pieChartCanvas = $('#pieChart_of_product').get(0).getContext('2d')
        var pieData = pieChartStockoftype;
        var pieOptions = {
          maintainAspectRatio: false,
          responsive: true,
          tooltips: {
            callbacks: {
              label: function(tooltipItem, data) {
                var dataset = data.datasets[tooltipItem.datasetIndex];
                var label = data.labels[tooltipItem.index] || '';
                var value = dataset.data[tooltipItem.index] || '';
                return label + ': ' + value;
              }
            }
          }
        }
        new Chart(pieChartCanvas, {
          type: 'pie',
          data: pieData,
          options: pieOptions
        })
      }
    });

  }

  function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }
</script>

</html>
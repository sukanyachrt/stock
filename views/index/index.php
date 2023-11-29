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
  .dataTables_filter {
    display: none;
  }

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
                    <div class="col-12">
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            ประเภทการเบิก-คืน
                          </span>
                        </div>
                        <select id="typewithdraw" name="typewithdraw" class="form-control">
                          <option disabled selected value="">-- เลือก --</option>
                          <option value="เบิกสินค้า">เบิกสินค้า</option>
                          <option value="คืนสินค้า">คืนสินค้า</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            ชื่อผู้เบิกของ
                          </span>
                        </div>
                        <input type="text" autocomplete="yes" class="form-control" id="namewithdraw" name="namewithdraw" placeholder="ชื่อผู้เบิกของ">
                      </div>
                    </div>
                    <div class="form-group col-sm-12 classshowSearch">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text px-2">ค้นหาข้อมูล</div>
                        </div>
                        <input type="text" class="form-control" autocomplete="yes" id="textsearch" name="textsearch" placeholder="ค้นหาข้อมูล">

                        <div class="input-group-append">
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-searchproduct">
                            <i class="fas fa-search"></i>
                            ค้นหาข้อมูล</button>
                        </div>

                      </div>

                    </div>

                  </div>

                  <div class="row classshowSearch">
                    <div class="col-12">
                      <table class="table table-bordered" id="tbProducts">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">บาร์โค้ด</th>
                            <th class="text-center">ชื่อสินค้า</th>
                            <th class="text-center">ประเภทสินค้า</th>
                            <th class="text-center">จำนวน</th>
                            <th class="text-center">ลบ</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-center classshowSearch">
                  <button type="button" class="btn btn-primary" onclick="confirmWithdraw()">
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
      <!-- ค้นหาข้อมูลสินค้า -->
      <div class="modal fade" id="modal-searchproduct">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h4 class="modal-title">ข้อมูลสินค้า</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="form-group col-sm-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text px-2">ค้นหาข้อมูล</div>
                    </div>
                    <input type="text" class="form-control" autocomplete="yes" id="textsearchproduct" name="textsearchproduct" placeholder="ค้นหาข้อมูล">

                  </div>

                </div>

              </div>
              <div class="row">
                <div class="col-12 table-responsive p-0">
                  <table class="table table-bordered table-hover" id="tblistProducts">
                    <thead>
                      <tr>
                        <th class="text-center" style="width: 200px">บาร์โค้ด</th>
                        <th>ชื่อสินค้า</th>
                        <th class="text-center">ประเภทสินค้า</th>
                        <th class="text-center">จำนวน</th>
                        <th class="text-center">รูป</th>
                        <th class="text-center">สถานะ</th>

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
      <!-- show result การเบิกของ -->
      <div class="modal fade" id="modal-showResult">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">

            <div class="modal-header bg-primary">
              <h4 class="modal-title texttypeWithdraw">ข้อมูลรายละเอียดการเบิก-คืนสินค้า</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row justify-content-center">
                <!-- <div class="col-12">
                    <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          ประเภทการเบิก-คืน
                        </span>
                      </div>
                      <select id="typewithdraw" name="typewithdraw" class="form-control">
                        <option disabled selected value="">-- เลือก --</option>
                        <option value="1">เบิกสินค้า</option>
                        <option value="0">คืนสินค้า</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="input-group mb-3">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          ชื่อผู้เบิกของ
                        </span>
                      </div>
                      <input type="text" autocomplete="yes" class="form-control" id="namewithdraw" name="namewithdraw" placeholder="ชื่อผู้เบิกของ">
                    </div>
                  </div> -->
                <div class="col-12">
                  <table class="table table-bordered table-hover" id="tbShowconfirm">
                    <thead>
                      <tr>
                        <th class="text-center">บาร์โค้ด</th>
                        <th class="text-center">ชื่อสินค้า</th>
                        <th class="text-center">ประเภทสินค้า</th>
                        <th class="text-center">จำนวน</th>

                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot></tfoot>
                  </table>
                </div>
              </div>

            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" onclick="saveWithdraw()" class="btn btn-primary btntypeWithdraw">ยืนยันการเบิกของ</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

            </div>

          </div>
        </div>
      </div>

      <!-- confrom ผลการค้นหา -->
      <div class="modal fade" id="modal-Alertdata">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">แจ้งเตือน</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p id="resultBarcode"></p>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-warning" data-dismiss="modal">ตกลง</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>

            </div>
          </div>
        </div>
      </div>
    
      <aside class="control-sidebar control-sidebar-light">
      </aside>

    </div>

    <?php include('script.php') ?>
</body>
<script src="asset/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="asset/plugins/toastr/toastr.min.js"></script>
<script src="asset/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="asset/plugins/select2/js/select2.full.min.js"></script>
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
    timer: 5000
  });
  $('.classshowSearch').hide();
  $('#textsearch').focus();
  getProduct();
  $('#modal-searchproduct').on('shown.bs.modal', function() {
    $('#textsearchproduct').focus();

  });

  const textsearch = document.querySelector('#textsearch');
  textsearch.addEventListener('input', function(event) {
    var value = $(this).val().trim();
    var isNumeric = !isNaN(value);
    if (value.length === 13 && isNumeric) {
      getProductByBarcode(value);
    }
  });
  const table = new DataTable('#tbProducts');
  table.clear();
  let numrow = 1;

  //ค้นหาข้อมูลจาก barcode เพื่อใส่ลงในการเบิกของ
  function getProductByBarcode(objBarcode) {
    var barcode = objBarcode;

    $.ajax({
      type: 'GET',
      url: "services/withdraws/data.php?v=searchProductsByBarcode&barcode=" + barcode,
      success: function(response) {
        console.log(response)
        if (response == null) {
          $('#resultBarcode').text(`ไม่เจอเลข Barcode ${textsearch.value}`)
          $('#modal-Alertdata').modal('show');
          return;
        }
        var item = response
        var existingRow = table.row(`#row_${item.id}`).data();
        var productid = item.id;

        if (existingRow) {
          var quantityInput = $(`#row_${item.id} input[type='number']`);
          var currentQuantity = parseInt(quantityInput.val());
          quantityInput.val(currentQuantity + 1);
          textsearch.value = '';

        } else {
          var tbProducts = `<tr id="row_${item.id}">
                    <td class="text-center">${numrow}</td>
                    <td class="text-center">${item.barcode}</td>
                    <td>${item.productname}</td>
                    <td class="text-center">${item.nametype}</td>
                    <td>
                        <input type="number" value="1" class="form-control float-right" placeholder="จำนวนที่เบิก">
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-xl delete-button"> <i class="fas fa-times delete-row"></i></button>
                    </td>
                </tr>`;


          table.rows.add($(tbProducts)).draw();
          textsearch.value = '';
          updateNumrow()
        }
        $(`#row_${item.id} .delete-button`).on('click', function() {
          deleteRow(item.id);
        });
        checkNumproduct(productid)
      }
    });
  }



  //ข้อมูลสินค้าลงในตาราง
  function getProduct() {
    $.ajax({
      type: 'GET',
      url: "services/withdraws/data.php?v=searchProducts",
      success: function(response) {
        var tablelist = $('#tblistProducts').DataTable();
        tablelist.clear();
        var tblistProducts = '';
        $.each(response, function(index, item) {
          tblistProducts += `<tr id="row_${item.id}" data-product-id="${item.id}">
                    <td class="text-center">${item.barcode}</td>
                    <td>${item.productname}</td>
                    <td class="text-center">${item.nametype}</td>
                    <td class="text-center">${item.numproduct} ${item.nameunit}</td>
                    <td class="text-center">
                        ${item.imageproduct !== undefined && item.imageproduct != null && item.imageproduct !== "" ? 
                            `<img class="attachment-img img-md" src="data:image/png;base64,${item.imageproduct}" alt="Attachment Image">` : 
                            ''
                        }
                    </td>
                    <td class="text-center">
                        ${item.status==1 ? '<span class="badge bg-success">ใช้งาน</span>' : '<span class="badge bg-danger">ไม่ใช้งาน</span>'}
                    </td>
                </tr>`;
        });
        tablelist.rows.add($(tblistProducts)).draw();
      },
      error: function(error) {
        console.log(error)
      }
    });
  }
  $('#tblistProducts tbody').on('mouseenter', 'tr', function() {
    $(this).addClass('hover');
  });


  $('#tblistProducts tbody').on('mouseleave', 'tr', function() {
    $(this).removeClass('hover');
  });


  $('#tblistProducts tbody').on('click', 'tr', function() {
    var productId = $(this).data('product-id');
    addProductToTable(productId);

    $('#modal-searchproduct').modal('hide');
  });

  //เบิกของจากการคลิกตาราง
  function addProductToTable(productId) {
    console.log(productId)
    var existingRow = $(`#tbProducts #row_${productId}`);

    if (existingRow.length > 0) {

      var quantityInput = existingRow.find('input[type="number"]');
      var currentQuantity = parseInt(quantityInput.val());
      quantityInput.val(currentQuantity + 1);

    } else {

      $.ajax({
        type: 'GET',
        url: "services/products/data.php?v=searchProductsByID&id=" + productId,
        success: function(response) {
          if (response == null) {
            return;
          }
          var item = response

          var existingRow = table.row(`#row_${item.id}`).data();

          if (existingRow) {
            var quantityInput = $(`#row_${item.id} input[type='number']`);
            var currentQuantity = parseInt(quantityInput.val());
            quantityInput.val(currentQuantity + 1);

          } else {
            var tbProducts = `<tr id="row_${item.id}">
                  <td class="text-center">${numrow}</td>
                  <td class="text-center">${item.barcode}</td>
                  <td>${item.productname}</td>
                  <td class="text-center">${item.nametype}</td>
                  <td>
                      <input type="number" value="1" class="form-control float-right" placeholder="จำนวนที่เบิก">
                  </td>
                  <td class="text-center">
                      <button type="button" class="btn btn-xl delete-button"> <i class="fas fa-times delete-row"></i></button>
                  </td>
              </tr>`;
            table.rows.add($(tbProducts)).draw();

            updateNumrow();
            $(`#row_${item.id} .delete-button`).on('click', function() {
              deleteRow(item.id);
            });


          }
        }
      });
    }

    checkNumproduct(productId);
  }
  $('#tbProducts tbody').on('change', 'input[type="number"]', function() {
    var rowId = $(this).closest('tr').attr('id');
    var rowIdParts = rowId.split("row_");
    checkNumproduct(rowIdParts[1]);
  });

  // ลบข้อมูลจาก table เบิกคืน
  function deleteRow(itemId) {
    table.row(`#row_${itemId}`).remove().draw();
    updateNumrow();
  }
  // อัพเดทเลขแถวในตาราง table เบิกคืน
  function updateNumrow() {
    $('#tbProducts tbody tr').each(function(index) {
      $(this).find('td:first').text(index + 1);
    });
  }

  function getProductById(productId) {
    $.ajax({
      type: 'GET',
      url: "services/products/data.php?v=searchProductsByID&id=" + productId,
      success: function(response) {
        console.log(response)
        return response;
      }
    });

  }


  const textsearchproduct = document.querySelector('#textsearchproduct');
  const listproduct = new DataTable('#tblistProducts');


  textsearchproduct.addEventListener('input', function(event) {
    var value = $(this).val().trim();

    DataTable.ext.search.pop();

    if (value !== '') {
      DataTable.ext.search.push(function(settings, data, dataIndex) {
        // ทำการค้นหาในทุกคอลัมน์
        for (var i = 0; i < data.length; i++) {
          if (data[i].toLowerCase().includes(value.toLowerCase())) {
            return true;
          }
        }
        return false;
      });
    }

    listproduct.draw();
  });

  //check ปริมาณสินค้า
  function checkNumproduct(productid) {
    if ($('#typewithdraw').val() == "เบิกสินค้า") {
      var rowId = "row_" + productid;
      var $targetRow = $('#tbProducts tbody tr[id="' + rowId + '"]');

      if ($targetRow.length > 0) {
        var numWithdraw = $targetRow.find('input[type="number"]').val();
        $.ajax({
          type: 'GET',
          url: "services/withdraws/data.php?v=findnumproduct&productid=" + productid,
          success: function(response) {
            console.log(response)
            let numproduct = response.numproduct;
            let checknum = numproduct - numWithdraw
            if (checknum < 0) {
              var quantityInput = $(`#row_${productid} input[type='number']`);
              var currentQuantity = parseInt(quantityInput.val());

              quantityInput.val(currentQuantity - Math.abs(checknum));
              toastr.error('ปริมาณสินค้าคงเหลือไม่พอในการเบิกครับ.')

            }

          },
          error: function(error) {
            console.log(error)
          }
        });


      }
    } else {
      return;
    }



  }
  $('#typewithdraw').on('change', function() {
    var selectedValue = $(this).val();
    if (selectedValue != "") {
      $('.texttypeWithdraw').text('ข้อมูลรายละเอียดการ' + selectedValue)
      $('.btntypeWithdraw').text('ยืนยันการ' + selectedValue)
      $('.classshowSearch').show();
    } else {
      $('.classshowSearch').hide();
    }
  });

  //ยืนยันการเบิกของ
  function confirmWithdraw() {
    var allInputs = $('#tbProducts tbody tr input[type="number"]');

    // ตรวจสอบว่าพบหรือไม่
    if (allInputs.length > 0) {
      if ($('#typewithdraw') != "" && ($('#namewithdraw').val().trim()) != "") {
        $('#tbShowconfirm tbody').html('')
        let sumnumWithdraw = 0;
        $('#tbProducts tbody tr').each(function(index) {
          var rowId = $(this).attr('id');
          var rowIdParts = rowId.split("row_");
          var rowNumber = rowIdParts[1];


          var barcode = $(this).find('td:eq(1)').text();
          var productname = $(this).find('td:eq(2)').text();
          var producttype = $(this).find('td:eq(3)').text();

          var numWithdraw = $(this).find('input[type="number"]').val();
          sumnumWithdraw = sumnumWithdraw + parseFloat(numWithdraw);
          console.log('Row ID:', rowNumber, 'Input Value:', numWithdraw, 'secondTdText :');
          $('#tbShowconfirm tbody').append(`<tr id="productid_${rowNumber}">
            <td>${barcode}</td>
            <td>${productname}</td>
            <td>${producttype}</td>
            <td>${numWithdraw}</td>
          
            </tr>`);
          if (index == allInputs.length - 1) {


            $('#modal-showResult').modal('show');
          }

        });
        $('#tbShowconfirm tfoot').html(`<tr>
      <td colspan="3"><b>รวม</b></td>
      <td>${sumnumWithdraw}</td>
      </tr>`);
      } else {
        $('#resultBarcode').text(`โปรดกรอกชื่อผู้เบิก | คืนสินค้าครับ`)
        $('#modal-Alertdata').modal('show');
        return;
      }


    } else {
      $('#resultBarcode').text(`คุณยังไม่ได้คีย์เบิก-คืนสินค้าครับ !!`)
      $('#modal-Alertdata').modal('show');

    }


  }


  function saveWithdraw() {
    var formData = new FormData();
    formData.append('typewithdraw', $('#typewithdraw').val());
    formData.append('namewithdraw', $('#namewithdraw').val());
    var dataWithdraw = [];
    $('#tbShowconfirm tbody tr').each(function(index) {
      var rowId = $(this).attr('id');
      var rowIdParts = rowId.split("productid_");
      var rowNumber = rowIdParts[1];
      // <tr id="productid_${rowNumber}">
      var barcode = $(this).find('td:eq(1)').text();
      var numwithdraw = $(this).find('td:eq(3)').text();
      let data_ = {
        "productid" : rowNumber,
        "barcode": barcode,
        "numwithdraw": numwithdraw
      }



      dataWithdraw.push(data_)

      console.log('productname:', barcode, 'numwithdraw :' + numwithdraw);

    });
    var dataWithdrawJSON = JSON.stringify(dataWithdraw);

    // Append the JSON string to the FormData
    formData.append('dataWithdraw', dataWithdrawJSON);
    // formData.append('dataWithdraw', dataWithdraw);
    console.log(formData)

    $.ajax({
      async: true,
      url: "services/withdraws/data.php?v=withdrawsProduct",
      type: "POST",
      cache: false,
      data: formData,
      processData: false, // tell jQuery not to process the data
      contentType: false,

      success: function(response) {
        console.log(response)
        $('#modal-showResult').modal('hide');
        toastr.success('บันทึกรายการเรียบร้อยแล้วครับ.')
        $('#tbShowconfirm tbody').html('')
        $('#tbProducts tbody').html('')
        $('#namewithdraw').val('')
      },
      error: function(error) {
        console.log(error);
      }
    });
  }
</script>

</html>
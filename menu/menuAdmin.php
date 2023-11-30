<?php

/**
 * Main Sidebar
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */


if ($_SESSION['id'] == "") {
	header("Location: index");
}
else{
	if($_SESSION['role_emp']!="admin"){
		header("Location: index");
	}
}
function isActive($data)
{
	$array = explode('/', $_SERVER['REQUEST_URI']);
	$key = array_search("stock", $array);
	$name = $array[$key + 1];
	return $name === $data ? 'active' : '';
}
?>
<aside class="main-sidebar sidebar-light-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="asset/dist/img/logo-skype.svg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">ระบบ STOCK</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?php echo $_SESSION['fname']." ".$_SESSION['lname'] ?></a>
			</div>
		</div>

		<!-- SidebarSearch Form -->
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item">
					<a href="admin" class="nav-link <?php echo isActive('admin') ?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							ภาพรวมของระบบ

						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="employee" class="nav-link <?php echo isActive('employee') ?>">
						<i class="nav-icon fas fa-user-cog"></i>
						<p>
							จัดการผู้ใช้งาน

						</p>
					</a>
				</li>
				<li class="nav-item menu-open">
					<a href="#" class="nav-link <?php echo isActive('unit') || isActive('product') || isActive('producttype') ? 'active' : '' ?>">

						<i class="nav-icon fas fa-table"></i>
						<p>
							จัดการข้อมูลสินค้า
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="product" class="nav-link <?php echo isActive('product') ?>">
								<i class="fas fa-barcode nav-icon"></i>
								<p>
									ข้อมูลสินค้า

								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="producttype" class="nav-link <?php echo isActive('producttype') ?>">
								<i class="far fas fa-tasks nav-icon"></i>
								<p>ข้อมูลประเภทสินค้า</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="unit" class="nav-link <?php echo isActive('unit') ?>">
								<i class="far fa-circle nav-icon"></i>
								<p>ข้อมูลหน่วยนับ</p>
							</a>
						</li>

					</ul>
				</li>



			</ul>
		</nav>
	</div>
</aside>
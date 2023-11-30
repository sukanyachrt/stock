<?php

/**
 * Main Sidebar
 * 
 * @link https://appzstory.dev
 * @author Yothin Sapsamran (Jame AppzStory Studio)
 */


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
				<a href="#" class="d-block">
					<?php echo $_SESSION['fname'] ?? 'ผู้ใช้งานทั่วไป' ?>
					<?php echo $_SESSION['lname'] ?? '' ?>
				</a>
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
					<a href="user" class="nav-link <?php echo isActive('user') ?>">
						<i class="nav-icon fas fa-sticky-note"></i>
						<p>
							เบิก-คืนสินค้า

						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="history" class="nav-link <?php echo isActive('history') ?>">
						<i class="nav-icon fas fa-th"></i>
						<p>
							ประวัติการเบิกคืนสินค้า

						</p>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</aside>
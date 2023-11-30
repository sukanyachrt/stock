<nav class="main-header navbar navbar-expand navbar-white navbar-light">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a class="nav-link dropdown-toggle nav-profile d-flex align-items-center pe-0" href="#" data-toggle="dropdown" aria-expanded="false">
                <img src="asset/dist/img/avatar5.png" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-block dropdown-toggle ps-2"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-times-circle mr-2"></i>
                    <?php
                    echo $_SESSION['fname'] ?? 'ยังไม่ได้ login เข้าใช้งาน';
                    echo " " . $_SESSION['lname'] ?? ''
                    ?>
                    <ion-icon name="close-circle-outline"></ion-icon>
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout" class="dropdown-item">
                    <i class="fas fa-user-lock mr-2"></i>
                    <?php
                    if (!isset($_SESSION['fname'])) {
                        echo "ลงชื่อเข้าใช้งาน";
                    } else {
                        echo "ออกจากระบบ";
                    }

                    ?>


                </a>
                <div class="dropdown-divider"></div>


        </li>

    </ul>
</nav>
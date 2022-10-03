<div style="background-color:#444; height:10px;"></div>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
        <a class="navbar-brand" href="#">LANSAKA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item bg-link">
                    <a class="nav-link link" href="index.php">หน้าหลัก</a>
                </li>
                <li class="nav-item bg-link">
                    <a class="nav-link link" href="restaurant.php">ร้านอาหาร</a>
                </li>
                <li class="nav-item bg-link">
                    <a class="nav-link link" href="hotel.php">ที่พัก-โรงแรม</a>
                </li>
                <li class="nav-item bg-link">
                    <a class="nav-link link" href="travel.php">ท่องเที่ยว</a>
                </li>
                <li class="nav-item bg-link">
                    <a class="nav-link link" href="contact.php">ติดต่อสอบถาม</a>
                </li>
            </ul>
            <?php if (!$sess_user) { ?>
                <!-- register -->
                <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#registerModal">
                    <i class="bi bi-person-plus"></i>
                    สมัครสมาชิก
                </button>
                <!-- sign in -->
                <i class="bi bi-box-arrow-in-left btn-in" data-bs-toggle="modal" data-bs-target="#loginModal"></i>
            <?php } else { ?>
                <!-- profile -->
                <button class="btn btn-outline-light">
                    <i class="bi bi-person"></i>
                    ข้อมูลส่วนตัว
                </button>
                <!-- sign out -->
                <i class="bi bi-box-arrow-right btn-out" data-bs-toggle="modal" data-bs-target="#logoutModal"></i>
            <?php } ?>
        </div>
    </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog login-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ลงชื่อเข้าสู่ระบบ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="email">Email address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="ป้อนอีเมล" required>
                        </div>
                    </div>
                    <div class="row mt-2 mb-3">
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="ป้อนรหัสผ่าน" required>
                        </div>
                    </div>
                    <div class="row" style="padding:10px;">
                        <button type="submit" name="login" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ออกจากระบบ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row" style="padding:10px;">
                        <button type="submit" name="logout" class="btn btn-primary">ตกลง</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <!-- Brand (optional) -->
        <a class="navbar-brand text-primary" href="<?= _WEB_ROOT; ?>/dashboard/index">
            <strong>My Website</strong>
        </a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Centered Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
            <ul class="navbar-nav">
                <li class="nav-item mx-3">
                    <a class="nav-link text-primary" aria-current="page" href="<?= _WEB_ROOT; ?>/dashboard/index">Trang chủ</a>
                </li>
                <?php if(isset($_SESSION["login"])) { ?>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-primary" href="<?= _WEB_ROOT; ?>/account/index">Tài khoản</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-primary" href="<?= _WEB_ROOT; ?>/dashboard/list">Sản phẩm</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-primary" href="<?= _WEB_ROOT; ?>/custumer/index">Khách hàng</a>
                    </li>
                <?php } ?>
            </ul>
        </div>

        <!-- Right Side (Login/Logout Button) -->
        <div class="d-flex align-items-center">
            <?php if(isset($_SESSION["login"])) { ?>
                <a href="<?= _WEB_ROOT; ?>/user/logout" class="btn btn-outline-danger mx-2 rounded-pill">
                    <i class="fas fa-sign-out-alt"></i> Đăng xuất
                </a>
            <?php } else { ?>
                <a href="<?= _WEB_ROOT; ?>/user/login" class="btn btn-primary mx-2 rounded-pill">
                    <i class="fas fa-sign-in-alt"></i> Đăng nhập
                </a>
            <?php } ?>
        </div>
    </div>
</nav>

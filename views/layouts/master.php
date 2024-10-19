<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <!-- Css -->
    <!-- Main Css -->
    <link rel="stylesheet" href="<?= _WEB_ROOT ?>/public/css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- DASHBOARD CSS -->
    <link href="<?= _WEB_ROOT ?>/public/css/dashboard.css" rel="stylesheet" />
    <link href="<?= _WEB_ROOT ?>/public/css/animate.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom topnav-navbar w-100" style="z-index: 1; top: 0">
                    <?php
                    include "header.php";
                    ?>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid mt-5">
                    <?php
                        if (isset($view)) {
                            include $view;
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
<!-- JAVASCRIPTS -->
<!-- <div class="menu-overlay"></div> -->
<script src="<?= _WEB_ROOT ?>/public/libs/lucide/umd/lucide.min.js"></script>
<script src="<?= _WEB_ROOT ?>/public/libs/simplebar/simplebar.min.js"></script>
<script src="<?= _WEB_ROOT ?>/public/libs/flatpickr/flatpickr.min.js"></script>
<script src="<?= _WEB_ROOT ?>/public/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="<?= _WEB_ROOT ?>/public/libs/apexcharts/apexcharts.min.js"></script>
<script src="<?= _WEB_ROOT ?>/public/js/pages/analytics-index.init.js"></script>
<script src="<?= _WEB_ROOT ?>/public/js/app.js"></script>
<!-- JAVASCRIPTS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>

</html>
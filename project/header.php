<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon  -->
        <link rel="icon" sizes="57x57" href="./assets/img/favicon/apple-icon-57x57.png">
        <link rel="icon" sizes="60x60" href="./assets/img/favicon/apple-icon-60x60.png">
        <link rel="icon" sizes="72x72" href="./assets/img/favicon/apple-icon-72x72.png">
        <link rel="iconx76" href="./assets/img/favicon/apple-icon-76x76.png">
        <link rel="icon" sizes="114x114" href="./assets/img/favicon/apple-icon-114x114.png">
        <link rel="icon" sizes="120x120" href="./assets/img/favicon/apple-icon-120x120.png">
        <link rel="icon" sizes="144x144" href="./assets/img/favicon/apple-icon-144x144.png">
        <link rel="icon" sizes="152x152" href="./assets/img/favicon/apple-icon-152x152.png">
        <link rel="icon" sizes="180x180" href="./assets/img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="./assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=".assets/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./assets/style/reset.css">
    <title>
        <?php
        echo "web 25: j2team store";
        ?>
    </title>
    <!-- import css  -->
    <link rel="stylesheet" href="./assets/style/main.css">
    <link rel="stylesheet" href="./assets/style/login.css">
    <link rel="stylesheet" href="./assets/style/card.css">
    <link rel="stylesheet" href="./assets/style/res.css">
    <link rel="stylesheet" href="./assets/style/bocongthuong.css">
</head>

<body id="toTop">
    <div class="header--menu">
        <ul>
            <li>
                <a href="#">
                    Tải ứng dụng
                </a>
            </li>

            <li>
                <a href="#">
                    Chăm sóc khách hàng
                </a>
            </li>
            <li>
                <a href="#">
                    Kiểm tra đơn hàng
                </a>
            </li>
        </ul>
    </div>


    <header>
        <div class="taskbar">
            <div class="header--ctn">
                <a href="index.php">
                    <img class="logo" src="https://i.imgur.com/gcLslvc.png" alt="">
                </a>

                <i class="far fa-list-alt"></i>

                <div class="input--ctn">
                    <input class="search" type="text" placeholder="Tìm kiếm trên J2team Store...">
                </div>

                <i class="fas fa-cart-arrow-down"></i>

                <a href="./login/login.php">
                    <input class="login" type="submit" value="Đăng nhập">
                </a>

            </div>
        </div>
        <?php
        $uri = $_SERVER['REQUEST_URI'];
        $query = $_SERVER['QUERY_STRING'];
        echo '<br>';

        $domain = $_SERVER['HTTP_HOST'];

        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

        $url = $_SERVER['REQUEST_URI'];

        ?>
        <div class="header-items">
            <ul>
                <a href="index.php">
                    <li class="options"> Cho bạn </li>
                    <?php
                    if ($url == '/datn-j2teamnnl/project/index.php') {
                        echo '<div class="checked"></div>';
                    }
                    ?>
                </a>
                <a href="./dodungsinhhoat.php">
                    <li class="options"> Đồ dùng sinh hoạt </li>
                    <?php
                    if ($url == '/datn-j2teamnnl/project/dodungsinhhoat.php') {
                        echo '<div class="checked"></div>';
                    }
                    ?>
                </a>
                <a href="./dungculamvuon.php">
                    <li class="options"> Dụng cụ làm vườn </li>
                    <?php
                    if ($url == '/datn-j2teamnnl/project/dungculamvuon.php') {
                        echo '<div class="checked"></div>';
                    }
                    ?>
                </a>
                <a href="./dodunglambep.php">
                    <li class="options"> Đồ dùng làm bếp </li>
                    <?php
                    if ($url == '/datn-j2teamnnl/project/dodunglambep.php') {
                        echo '<div class="checked"></div>';
                    }
                    ?>
                </a>
                <a href="./chamsocsuckhoe.php">
                    <li class="options"> Chăm sóc sức khỏe </li>
                    <?php
                    if ($url == '/datn-j2teamnnl/project/chamsocsuckhoe.php') {
                        echo '<div class="checked"></div>';
                    }
                    ?>
                </a>
                <a href="./cacloaithucphamkho.php">
                    <li class="options"> Các loại thực phẩm khô </li>
                    <?php
                    if ($url == '/datn-j2teamnnl/project/cacloaithucphamkho.php') {
                        echo '<div class="checked"></div>';
                    }
                    ?>
                </a>
            </ul>
        </div>


    </header>

    <div class="shadowBG hideElement "> </div>


    <div class="loginForm--ctn hideElement">
        <div class="loginForm hideElement">
            <form action="">
                <h1>Xin chào</h1>
                <p>Đăng nhập hoặc đăng kí tài khoản</p>
                <input type="text" name="" placeholder="Nhập số điện thoại/email" id="">
                <button>Tiếp tục ></button>
            </form>

            <p>Hoặc thông qua</p>
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google"></i>
            <p>Khi dùng tài khoản j2team store, bạn đã đồng ý với <a href="./dieukhoan.php"> Điều khoản và dịch vụ.</a></p>
        </div>
    </div>

    <script src="./assets/js/header.js"></script>
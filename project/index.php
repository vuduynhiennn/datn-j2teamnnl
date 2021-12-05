<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon  -->
    <link rel="icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
    <link rel="icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
    <link rel="icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
    <link rel="iconx76" href="./img/favicon/apple-icon-76x76.png">
    <link rel="icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
    <link rel="icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
    <link rel="icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
    <link rel="icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
    <link rel="icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="./img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>Nhóm 25: web bán hàng</title>
    <!-- import css  -->
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/card.css">
    <link rel="stylesheet" href="./style/res.css">
    <!-- add file script  -->
    <script src="./js/fixed.js"></script>
</head>

<body id="toTop">


<div class="container">
  <form class="login form"><span class="login__icon">ocula</span>
    <h2 class="login__title">log in to Ocula</h2>
    <div class="login__row">
      <label class="login__label" for="lg-em">e-mail</label>
      <input class="login__input" id="lg-em" type="email" placeholder="example@email.com"/>
    </div>
    <div class="login__row">
      <label class="login__label" for="lg-ps">password</label>
      <input class="login__input" id="lg-ps" type="password" placeholder="**********"/>
    </div>
    <div class="login__row">
      <button class="login__button" type="submit">sign in</button>
    </div>
    <div class="login__row"><a class="login__link">forgot your password?</a></div>
  </form>
  <form class="signup is-form-open form" id="signup">
    <svg class="svg-icon signup__trigger signup__trigger--fixed" viewBox="0 0 20 20">
      <path d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
    </svg>
    <div class="signup__wrapper is-wrapper-open" id="signup-wrapper">
      <div class="signup__row signup__row--flex"><span class="signup__icon">ocula</span>
        <svg class="svg-icon signup__trigger" viewbox="0 0 20 20">
          <path d="M10.185,1.417c-4.741,0-8.583,3.842-8.583,8.583c0,4.74,3.842,8.582,8.583,8.582S18.768,14.74,18.768,10C18.768,5.259,14.926,1.417,10.185,1.417 M10.185,17.68c-4.235,0-7.679-3.445-7.679-7.68c0-4.235,3.444-7.679,7.679-7.679S17.864,5.765,17.864,10C17.864,14.234,14.42,17.68,10.185,17.68 M10.824,10l2.842-2.844c0.178-0.176,0.178-0.46,0-0.637c-0.177-0.178-0.461-0.178-0.637,0l-2.844,2.841L7.341,6.52c-0.176-0.178-0.46-0.178-0.637,0c-0.178,0.176-0.178,0.461,0,0.637L9.546,10l-2.841,2.844c-0.178,0.176-0.178,0.461,0,0.637c0.178,0.178,0.459,0.178,0.637,0l2.844-2.841l2.844,2.841c0.178,0.178,0.459,0.178,0.637,0c0.178-0.176,0.178-0.461,0-0.637L10.824,10z"></path>
        </svg>
      </div>
      <h2 class="signup__title">sign up for free, now.</h2>
      <div class="signup__row">
        <label class="signup__label" for="su-us">username</label>
        <input class="signup__input" id="su-us" type="text" placeholder="John Doe"/>
      </div>
      <div class="signup__row">
        <label class="signup__label" for="su-em">E-Mail</label>
        <input class="signup__input" id="su-em" type="email" placeholder="example@email.com"/>
      </div>
      <div class="signup__row">
        <label class="signup__label" for="su-ps">password</label>
        <input class="signup__input" id="su-ps" type="password" placeholder="**********"/>
      </div>
      <div class="signup__row">
        <button class="signup__button" type="submit">sign up</button>
      </div>
      <div class="signup__row"><a class="signup__link">forgot your password?</a></div>

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
                <a href="#">
                    <img class="logo" src="https://i.imgur.com/gcLslvc.png" alt="">
                </a>
                <i class="far fa-list-alt"></i>
                <div class="input--ctn">

                    <input class="search" type="text" placeholder="Tìm kiếm trên J2team Store...">
                </div>

                <i class="fas fa-cart-arrow-down"></i>

                <input class="login" type="submit" value="Đăng nhập">

            </div>
        </div>
        <div class="header-items">
            <ul>
                <li class="checked"> Cho bạn </li>
                <li> Đồ dùng sinh hoạt </li>
                <li> Dụng cụ làm vườn </li>
                <li> Đồ dùng làm bếp </li>
                <li> Chăm sóc sức khỏe </li>
                <li> Các loại thực phẩm khô </li>
            </ul>
        </div>
    </header>

    <div class="main">
        <div class="main--product">
            <ul>
                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="main--product">
            <ul>
                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="main--product">
            <ul>
                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="main--product">
            <ul>
                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="container">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8c2hvZXMlMjBuaWtlfGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" />
                            <div class="card-body">
                                <div class="row">
                                    <div class="card-title">
                                        <h4>Nike Sneaker</h4>
                                        <h3>$120</h3>
                                    </div>
                                    <div class="view-btn">
                                        <a href="">View Details</a>
                                    </div>
                                </div>
                                <hr />
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi,
                                    dignissimos.
                                </p>
                                <div class="btn-group">
                                    <div class="btn">
                                        <a href="">Buy Now</a>
                                    </div>
                                    <a href=""> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        
        <div class="main--more">
            <a href="#">
                <h1>Xem thêm...</h1>
            </a>
        </div>
    </div>

    <footer>
        <div class="footer--items">
            <ul>
                <li>
                    <a href="#">
                        <img src="https://media3.scdn.vn/img4/2020/12_16/gJwXr6FFZKZCGKWaz4RB.png" alt="">
                    </a>
                    <br>
                    <p class="bold">Siêu nhiều hàng tốt</p>
                    <br>
                    <p>Cần gì cũng có 26 ngành hàng &
                        <br>
                        10 triệu sản phẩm
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="https://media3.scdn.vn/img4/2020/12_16/EfZWQVfV6nQzu2vMmnwC.png" alt="">
                    </a>
                    <br>
                    <p class="bold">Siêu yên tâm</p>
                    <br>
                    <p>Miễn phí đổi trả trong 48h</p>
                </li>
                <li>
                    <a href="#">
                        <img src="https://media3.scdn.vn/img4/2020/12_16/j5C6IQz7gIXPgjFJxmRz.png" alt="">
                    </a>
                    <br>
                    <p class="bold">Siêu tiện lợi</p>
                    <br>
                    <p>Mang thế giới mua sắm của Sendo
                        <br>
                        trong tầm tay bạn
                    </p>
                </li>
                <li>
                    <a href="#">
                        <img src="https://media3.scdn.vn/img4/2020/12_16/7AJFQGQ5qvS7gGOz8P7a.png" alt="">
                    </a>
                    <br>
                    <p class="bold">Siêu tiết kiệm</p>
                    <br>
                    <p>Giá cả hợp lí, vừa túi tiền. Luôn có nhiều
                        <br>
                        chương trình khuyến mãi
                    </p>
                </li>
            </ul>
        </div>

        <div class="footer--ctn">
            <p class="bold">Đồ Án Tốt Nghiệp J2teamnnl, Trực thuộc J2team School</p>
            <br>
            <p>Ngày khai giảng: 05/09/2021, ngày bắt đầu làm đồ án tốt nghiệp 12/05/2021</p>
            <br>
            <p>Nhóm trưởng: Vũ Duy Nhiên, thành viên nhóm: Việt Nguyễn</p>
            <br>
            <p>Công nghệ sử dụng: html 5, css 3, js thuần, php thuần, mysql</p>
            <br>
            <p>github: <a href="https://github.com/vuduynhiennn/datn-j2teamnnl">datn-j2teamnnl</a></p>
            <br>
            <a href="#">
                <img class="bocongthuong" src="https://media3.scdn.vn/img4/2020/12_16/XhpGDnvWqrlKeHLst3aS.png" alt="logo bộ công thương">
            </a>
            <a href="#">
                <img class="bocongthuong" src="https://media3.scdn.vn/img4/2020/12_16/h6lEMGIAt4Uapd0Mls34.png" alt="logo bộ công thương">
            </a>
        </div>
    </footer>
    <a href="#toTop">
        <i style="color: #D52220; font-size: 35px; position: fixed; right: 10px; bottom: 50px" class="fas fa-arrow-up hideElement"></i>
    </a>
</body>

</html>
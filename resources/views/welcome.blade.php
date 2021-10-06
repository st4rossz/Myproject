<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
          <!-- basic -->
          <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Good Dog Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Laravel</title>
</head>

<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo_gdh2.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#we_do">หน้าแรก</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">ติดต่อ</a>
                                    </li>
                                </ul>
                                <div class="sign_btn"><a href="login/page_login.php">เข้าสู่ระบบ/สมัครสมาชิก</a></div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-4">
                    <div class="text-bg">
                        <h1>Good <br>
                            Dog <br>
                            Home<br>
                            <span class="black">รับฝากเลี้ยงสุนัข </span>
                        </h1>
                        <a href="#contact">ติดต่อเรา</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="text-img">
                        <figure><img src="images/dog1.png" alt="#" /></figure>
                    </div>
                    <div class="text-img1">
                        <figure><img src="images/dog2.png" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- we_do -->
    <div id="we_do" class="we_do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>พวกเราทำอะไรบ้างง?</h2>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="images/plan1.png" alt="#" /></i>
                        <h4>รับฝากสุนัข</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="images/plan2.png" alt="#" /></i>
                        <h4>มีบริการเสริม</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="images/plan3.png" alt="#" /></i>
                        <h4>ที่พักสุนัขสะอาด</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end we_do -->
    <!-- testimonial -->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Testimonial</h2>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row d_flex">
                                            <div class="col-md-4">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <figure><img src="images/jons_img1.png" alt="#" /></figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row d_flex">
                                            <div class="col-md-4">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <figure><img src="images/jons_img1.png" alt="#" /></figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row d_flex">
                                            <div class="col-md-4">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <figure><img src="images/jons_img1.png" alt="#" /></figure>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="test_box">
                                                    <div class="jons">
                                                        <h4>Jonson Donat</h4>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehe</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonial -->
    <!-- contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <form class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Nmae" type="text" name="Nmae">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Phone Number" type="text" name=" Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Services" type="text" name="Services">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email " type="text" name="Email ">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Message" type="text"
                                    name="Message">Message</textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!-- asked -->
    <div class="asked">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Frequently Asked Questions</h2>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="some">
                        <h3>Where can I get some?</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed It is a long established fact that a
                            reader will be distracted by the readable content of a page when looking at its layout. The
                            point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                            opposed </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="some">
                        <h3>How to do clean office</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed It is a long established fact that a
                            reader will be distracted by the readable content of a page when looking at its layout. The
                            point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                            opposed </p>
                        <a class=" read_more" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end asked -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="cont">
                            <h3>Free Multipurpose<br>
                                Responsive Landing Page 2019
                            </h3>
                            <span>Modern lighting fast & easily Customizable</span>
                            <a class="read_more" href="#">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free html
                                    Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
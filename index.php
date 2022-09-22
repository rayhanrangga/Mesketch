<?php
include 'crud.php';

$bacaTesti = bacaTesti();
$bacaBlog = bacaBlog();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MeSketch</title>

    <meta name="description" content="N.Agency - Responisve Landing Page for Agency">
    <meta name="keywords" content="">
    <meta name="author" content="tabthemes">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/mesketch-logram1.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- footer -->
    <link href="resources/assets/css/footer.css" rel="stylesheet" />

    <!-- CSS Files For Plugin -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/YTPlayer.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="inc/owlcarousel/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="inc/revolution/css/settings.css" rel="stylesheet" />
    <link href="inc/revolution/css/layers.css" rel="stylesheet" />
    <link href="inc/revolution/css/navigation.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/style1.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif] -->

    <!-- Custom Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,300,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Crimson+Text:400,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS Style -->
    <link rel="stylesheet" href="resources/assets/css/bootstrap.min.css">

    <!-- Template CSS Style -->
    <link rel="stylesheet" href="resources/assets/css/style.css">

    <!-- Animate CSS  -->
    <link rel="stylesheet" href="resources/assets/css/animate.css">

    <!-- FontAwesome 4.3.0 Icons  -->
    <link rel="stylesheet" href="resources/assets/css/font-awesome.min.css">

    <!-- et line font  -->
    <link rel="stylesheet" href="resources/assets/css/et-line-font/style.css">

    <!-- BXslider CSS  -->
    <link rel="stylesheet" href="resources/assets/css/bxslider/jquery.bxslider.css">

    <!-- Owl Carousel CSS Style -->
    <link rel="stylesheet" href="resources/assets/css/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="resources/assets/css/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="resources/assets/css/owl-carousel/owl.transitions.css">

    <!-- Magnific-Popup CSS Style -->
    <link rel="stylesheet" href="resources/assets/css/magnific-popup/magnific-popup.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- [if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif] -->

</head>

<body class="homepage_slider" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="100">


    <!-- Preloader -->
    <!-- Preloader -->
    <div id="preloader">
        <div id="loading-animation">&nbsp;</div>
    </div>
    <!-- End Preloader-->
    <!-- End Preloader-->


    <!-- Start Navigation -->
    <section id="home">
        <header class="nav-solid">
            <nav class="navbar navbar-fixed-top">
                <div class="navigation">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Logo -->
                                <div class="logo-container">
                                    <div class="logo-wrap local-scroll nav">
                                        <a data-scroll href="#home">
                                            <img class="logo" src="img/mesketch-logtype1.png" alt="logo" data-rjs="2">
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end navbar-header -->

                            <div class="col-md-8 col-xs-12 nav-wrap">
                                <div class="collapse navbar-collapse" id="navbar-collapse">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a data-scroll href="#home">Home</a></li>
                                        <li><a data-scroll href="#about-us">About</a></li>
                                        <li><a data-scroll href="#lets-talk">Let's Talk</a></li>
                                        <li><a data-scroll href="#porto">Portofolio</a></li>
                                        <li><a data-scroll href="#team">Team</a></li>
                                        <li><a data-scroll href="#blog">Tips n Trick</a></li>
                                        <!--<li><a data-scroll href="#contact">Contact</a></li>-->
                                    </ul>

                                </div>
                            </div> <!-- /.col -->
                        </div> <!-- /.row -->
                    </div>
                    <!--/.container -->
                </div> <!-- /.navigation-overlay -->
            </nav> <!-- /.navbar -->
        </header>
    </section>
    <!-- End Navigation -->


    <!-- Start Intro -->
    <section id="slider">
        <div class="rev_slider_wrapper fullscreen-container" data-alias="agency-website" id="rev_slider_280_1_wrapper" style="background-color:#fff;padding:0px;height:1080px;">
            <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
            <div class="rev_slider fullscreenbanner" id="rev_slider_nagency" style="display:none;">
                <ul style="display:none;">

                    <!-- slider Item 1 -->
                    <li data-index="rs-1" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0" data-saveperformance="off" data-title="N.Agency" data-description="">
                        <img src="img/slider/bg.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3" id="slide-1-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-160','-170','-170','-120']" data-fontsize="['70','60','60','36']" data-lineheight="['70','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">Selamat Datang di MeSketch
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-SubTitle tp-resizeme white-color rs-parallaxlevel-4" id="slide-1-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-80','-90','-90','-60']" data-fontsize="['28','24','24','20']" data-lineheight="['28','24','36','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Konsultan design terbaik untuk para pemula
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rs-parallaxlevel-5" id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['15','5','5','10']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-responsive="off" style=""><a data-scroll href='#portfolio' class='btn btn-main btn-white'>Projek Kami</a>
                        </div>

                    </li>

                    <!-- slider Item 2 -->
                    <li data-index="rs-3" data-transition="slideremoveright" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0" data-saveperformance="off">
                        <img src="img/slider/bg1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme black-color rs-parallaxlevel-3" id="slide-2-layer-1" data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-100','-85']" data-fontsize="['70','60','60','36']" data-lineheight="['70','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rx:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">Buat sketsa mu sendiri!
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme NotGeneric-Text black-color rs-parallaxlevel-4" id="slide-2-layer-2" data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-10']" data-fontsize="['18','18','20','14']" data-lineheight="['28','28','32','24']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6;">Buat design sesukamu bersama tips dan trick dari kami, tidak mengerti hanya dengan membaca? hubungi kami untuk berkonsultasi mengenai design mu!
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rs-parallaxlevel-5" id="slide-2-layer-3" data-x="['left','left','left','left']" data-hoffset="['0','50','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['105','105','115','85']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-responsive="off" style=""><a data-scroll href='#portfolio' class='btn btn-main btn-black'>Projek Kami</a>
                        </div>

                    </li>

                    <!-- slider Item 3 -->
                    <li data-index="rs-2" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-rotate="0" data-saveperformance="off">
                        <img alt="" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="5000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="110" src="img/slider/bg2.jpg">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme white-color rs-parallaxlevel-3" id="slide-3-layer-1" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-75','-70','-70','-45']" data-fontsize="['70','60','60','36']" data-lineheight="['70','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 5; white-space: nowrap;">Pesan Design mu di MeSketch
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption NotGeneric-SubTitle white-color tp-resizeme rs-parallaxlevel-2" id="slide-3-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['28','24','24','20']" data-lineheight="['28','24','36','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;">Open Order For You!
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rs-parallaxlevel-5" id="slide-3-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90','100','75']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="2000" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]' data-responsive_offset="on" data-responsive="off" style=""><a href='#' class='btn btn-main btn-transparent-light'>Purchase Now</a>
                        </div>

                    </li>

                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </section>
    <!-- End Intro -->

    <!-- MULAINYA ABOUT US  -->
    <!-- Offer
    ================================================== -->
    <section id="about-us">
        <div id="landing-offer" class="pad-sec">
            <div class="container">
                <div class="title-section big-title-sec">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h1 class="big-title">About Us</h1>
                            <h1 class="big-subtitle">Solusi satu langkah untuk desain Grafis</h1>
                            <hr>
                            <p class="about-text">Setiap ide yang bagus akan menjadi hebat dengan adanya perencanaan yang baik. Disini lah kami akan membantu mewujudkan ide tersebut dengan perencanaan yang kami berikan</p>
                        </div>
                    </div> <!-- End row -->
                    <br><br><br><a href="" class="btn btn-lg btn-primary">More Information</a>
                </div>
            </div>
        </div>
    </section> <!-- end title-section -->
    <!-- SELESAI ABOUT US  -->

    <!-- MULAINYA WHAT WE DO  -->
    <section>
        <div id="features-section" class="pad-sec">
            <div class="container">
                <div class="title-section text-center " data-animation="fadeInUp" data-delay="0">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2>Apa yang kita bisa</h2>
                            <hr>
                            <p> Memulihkan potensi yang berfokus pada klien dengan mulus daripada area tema strategis fungsional.</p>
                        </div> <!-- edn col-sm-8 -->
                    </div> <!-- End row -->
                </div> <!-- end title-section -->
                <div class="row">
                    <div class="col-md-3 without-padding">
                        <div class="left-features-services">
                            <ul class="features-list">
                                <!-- feature -->
                                <li>
                                    <div class="left-features-box " data-animation="fadeInLeft" data-delay="0">
                                        <span class="iconbox"><i class="icon-lightbulb"></i></span>
                                        <div class="features-box-content">
                                            <h6>Illustrations</h6>
                                            <p>Suatu tulisan dengan teknik gambar, lukisan, fotografi, atau teknik seni rupa lainnya yang lebih menekankan hubungan subjek dengan tulisan yang dimaksud daripada bentuk.</p>
                                        </div> <!-- end features-box-content -->
                                    </div> <!-- end left-features-box -->

                                    <!-- feature -->
                                <li>
                                    <div class="left-features-box " data-animation="fadeInLeft" data-delay="0">
                                        <span class="iconbox"><i class="icon-hotairballoon "></i></span>
                                        <div class="features-box-content">
                                            <h6>Logo design</h6>
                                            <p>Proses komunikasi menggunakan elemen visual, seperti tipografi, fotografi, serta ilustrasi yang dimaksudkan untuk menciptakan persepsi akan suatu pesan yang disampaikan. </p>
                                        </div> <!-- end features-box-content -->
                                    </div> <!-- end left-features-box -->
                                </li>
                                </li>
                            </ul> <!-- end features-list -->
                        </div> <!-- end left-features-service -->
                    </div><!--  end col-md-3 -->

                    <!-- MULAI GAMBAR YANG DITENGAH -->
                    <div class="col-md-6">
                        <div class="features-image " data-animation="fadeInUp" data-delay="0">
                            <img src="img/mesketch-logram1.png" alt="">
                        </div> <!-- end features-image -->
                    </div> <!-- end col-md-6 -->
                    <!-- SELESAI GAMBAR YANG DITENGAH -->

                    <div class="col-md-3 without-padding">
                        <div class="right-features-services">
                            <ul class="features-list">
                                <!-- feature -->
                                <li>
                                    <div class="right-features-box " data-animation="fadeInRight" data-delay="0">
                                        <span class="iconbox"><i class="icon-camera"></i></span>
                                        <div class="features-box-content">
                                            <h6>Photography</h6>
                                            <p> proses melukis/menulis dengan menggunakan media cahaya.</p>
                                        </div>
                                    </div>
                                </li>

                                <!-- feature -->
                                <li>
                                    <div class="left-features-box " data-animation="fadeInLeft" data-delay="0">
                                        <span class="iconbox"><i class="icon-browser"></i></span>
                                        <div class="features-box-content">
                                            <h6>Web design</h6>
                                            <p>Sebuah bentuk grafis ataupun animasi digital dalam membuat suatu halaman web.
                                        </div> <!-- end features-box-content -->
                                    </div> <!-- end left-features-box -->
                                    <!-- feature -->
                                <li>
                                    <div class="left-features-box " data-animation="fadeInLeft" data-delay="0">
                                        <span class="iconbox"><i class="icon-mobile"></i></span>
                                        <div class="features-box-content">
                                            <h6>Vector design</h6>
                                            <p>Gambar yang menggunakan poligon dalam menciptakan gambar pada grafis komputer. </p>
                                        </div> <!-- end features-box-content -->
                                    </div> <!-- end left-features-box -->
                                </li>
                                </li>
                            </ul> <!-- end features-list -->
                        </div>
                    </div> <!-- end col-md-3 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>
    <!-- End features-section -->

    <!-- mulai let's talk -->
    <section id="lets-talk">
        <div id="banner-services" data-stellar-background-ratio="0">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6">
                        <div class="banner-content " data-animation="fadeInUp" data-delay="0">
                            <h3 class="banner-heading">Butuh Konsultasi design bersama ahlinya?</h3>
                            <div class="banner-decription">
                                Ada kalanya dalam proses membuat suatu design, kita sampai di titik buntu. Baik itu dalam pencarian ide, atau sekedar kepuasan hasil akhir, oleh karena itu, konsultasikan bersama kami. Kami akan membantu anda mencapai kepuasan.
                            </div> <!-- end banner-decription -->
                            <div>
                                <a href="https://api.whatsapp.com/send/?phone=082114018912&text&type=phone_number&app_absent=0" class="btn btn-sm btn-clean">Konsul Disini</a>
                            </div>
                        </div> <!-- end banner-content -->
                    </div> <!-- end col-sm-6 -->
                    <div class="col-sm-6">
                        <div class="banner-image " data-animation="fadeInUp" data-delay="0">
                            <img src="resources/assets/images/temp/banner-img.png" alt="">
                        </div> <!-- end banner-image -->
                    </div> <!-- end col-sm-6 -->

                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </section>
    <!-- end lest talk -->



    <!-- Start Portfolio -->
    <section id="porto" class="light-bg p-top-80 p-bottom-80">
        <div class="container">

            <!-- Section Title -->
            <div class="section-title text-center m-bottom-30">
                <h2 style="color: white;"><b>Projek Kami</b></h2>
                <div class="divider-center-small"></div>
            </div>

            <!-- Portfolio-filter -->
            <ul class="pf-filter text-center list-inline">
                <li><a href="#" data-filter="*" class="iso-active iso-button">Lihat Semua</a></li>
                <li><a href="#" data-filter=".logo" class="iso-button">Logo</a></li>
                <li><a href="#" data-filter=".poster" class="iso-button">Poster</a></li>
                <li><a href="#" data-filter=".instap" class="iso-button">Instagram Posts</a></li>
                <li><a href="#" data-filter=".etc" class="iso-button">ETC</a></li>
            </ul>

            <!-- Portfolio -->
            <div class="portfolio portfolio-isotope col-3 gutter">

                <!-- Portfolio Item -->
                <div class="pf-item logo">
                    <a href="img/portfolio/ms-porto1-02.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="img/portfolio/ms-porto1-02.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Branding</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item logo">
                    <a href="img/portfolio/ms-porto2-02.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="img/portfolio/ms-porto2-02.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Graphic, Web Design</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item etc">
                    <a href="img/portfolio/ms-porto4-01.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="img/portfolio/ms-porto4.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Graphic, Web Design</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item poster">
                    <a href="img/portfolio/ms-porto5-01.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="img/portfolio/ms-porto5-01.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Graphic, Web Design</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item instap">
                    <a href="img/portfolio/ms-porto6-01.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="img/portfolio/ms-porto6-01.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Branding, Graphic</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

                <!-- Portfolio Item -->
                <div class="pf-item instap">
                    <a href="img/portfolio/ms-porto3-02.jpg" class="pf-style lightbox-image mfp-image">
                        <div class="pf-image">
                            <img src="img/portfolio/ms-porto3-02.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <div class="overlay-content">
                                        <div class="pf-info white-color">
                                            <h4 class="pf-title">Project Name</h4>
                                            <p>Branding, Graphic</p>
                                        </div> <!-- .pf-info -->
                                    </div> <!-- .overlay-content -->
                                </div> <!-- .overlay-caption -->
                            </div> <!-- .overlay -->
                        </div> <!-- .pf-image -->
                    </a> <!-- .pf-style -->
                </div>

            </div> <!-- Portfolio -->

        </div> <!-- /.container -->
    </section>
    <!-- End Portfolio -->



    <!-- start team -->
    <section id="team" class="p-top-80 p-bottom-50">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Anggota Tim</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>Berikut adalah tim kami yang membantu, baik dalam membangun website maupun talent penyedia desain.</em></p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->




            <div class="row">

                <!-- === Team Item 1 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <div class="team-item-image-overlay">
                                <div class="team-item-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <img src="img/team/1.jpeg" alt="" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Naya
                            </div>
                            <div class="team-item-position">
                                Tim Pengembangan
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col -->

                <!-- === Team Item 2 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <div class="team-item-image-overlay">
                                <div class="team-item-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <img src="img/team/2.jpeg" alt="" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Rangga
                            </div>
                            <div class="team-item-position">
                                Tim Pengembangan
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col -->

                <!-- === Team Item 3 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <div class="team-item-image-overlay">
                                <div class="team-item-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <img src="img/team/3.jpeg" alt="" />
                        </div>
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Nazwa
                            </div>
                            <div class="team-item-position">
                                Tim Pengembangan
                            </div>
                        </div>
                    </div>
                </div> <!-- /.col -->


                <div class="col-md-2 col-sm-6 col-xs-6 p-bottom-30">

                </div>

                <!-- === Team Item 4 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <div class="team-item-image-overlay">
                                <div class="team-item-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <img src="img/team/4.jpeg" alt="" />
                        </div> <!-- /.team-item-image -->
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Fina
                            </div>
                            <div class="team-item-position">
                                Designer
                            </div>
                        </div> <!-- /.team-item-info -->
                    </div> <!-- /.team-item -->
                </div> <!-- /.col -->

                <!-- === Team Item 5 === -->
                <div class="col-md-4 col-sm-6 col-xs-6 p-bottom-30">
                    <div class="team-item wow zoomIn" data-wow-duration="1s" data-wow-delay="0.9s">
                        <div class="team-item-image">
                            <div class="team-item-image-overlay">
                                <div class="team-item-icons">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <img src="img/team/5.jpeg" alt="" />
                        </div> <!-- /.team-item-image -->
                        <div class="team-item-info">
                            <div class="team-item-name">
                                Miranti
                            </div>
                            <div class="team-item-position">
                                Design Konsultan
                            </div>
                        </div> <!-- /.team-item-info -->
                    </div> <!-- /.team-item -->
                </div> <!-- /.col -->



            </div> <!-- /.row -->

        </div> <!-- /.container -->
    </section>

    <!-- end team -->


    <!-- STAR SKILL MULAI DARI SINII. -->

    <!-- Start Skill/Why Choose Us -->
    <section class="light-bg p-top-80 p-bottom-40">
        <div class="container">
            <div class="row">

                <div class="col-md-6 p-bottom-40">
                    <!-- Section Title -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">SKILL KAMI</h2>
                        <div class="divider-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                    </div>

                    <!-- === Progress item 1 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">ILLUSTRATIONS</h6>
                        <p class="pull-right">80%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress it em 2 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">lOGO DESIGN</h6>
                        <p class="pull-right">90%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 3 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">WEB DESIGN</h6>
                        <p class="pull-right">80%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 4 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">PHOTOGRAPY</h6>
                        <p class="pull-right">90%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" data-wow-delay="0.3s"></div>
                    </div>

                    <!-- === Progress item 5 === -->
                    <div class="progress-heading clearfix wow fadeIn">
                        <h6 class="pull-left">VECTOR DESIGN</h6>
                        <p class="pull-right">85%</p>
                    </div>
                    <div class="progress progress-thin">
                        <div class="progress-bar wow zoomIn" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;" data-wow-delay="0.3s">
                        </div>
                    </div>



                </div> <!-- /.col -->

                <div class="col-md-6 p-bottom-40">

                    <!-- Section Title Right -->
                    <div class="m-bottom-30">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Kenapa Anda Memilih Kami</h2>
                        <div class="divider-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                    </div>

                    <!-- === Accordion === -->
                    <div id="accordion" class="panel-group wow fadeIn" data-wow-delay="0.6s">

                        <!-- === Accordion item 1 === -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Kami Sudah Berpengalaman</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Tim kami sudah berpengalaman dalam hal disain. Sudah banyak orang yang memakai jasa perkerjan kami untuk membantunya dan hampir semuanya merasa puas dengan hasil kerja kami. </p>
                                </div>
                            </div>
                        </div>

                        <!-- === Accordion item 2 === -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Banyak Potongan Harga</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Kami suka mengadakan potongan harga besar-besaran untuk para pelanggan kami.</p>
                                </div>
                            </div>
                        </div>

                        <!-- === Accordion item 3 === -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Hasil yang Memuaskan</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Banyak orang yang memakai jasa perkerjan kami untuk membantunya dan hampir semuanya merasa puas dengan hasil kerja kami. Jka kamu tidak puas. Boleh meminta refund</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- /.panel-group -->

                </div> <!-- /.col -->

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- End Skill/Why Choose Us -->
    <!-- End Skill/Why Choose Us SAMPAI SINIII -->

    <!-- start blog -->
    <section id="blog" class="p-top-80 p-bottom-80">

        <div class="container ">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Section Title -->
                    <div class="section-title text-center m-bottom-40">
                        <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Tips dan Trik</h2>
                        <div class="divider-center-small wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
                        <p class="section-subtitle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s"><em>Berbagai tips dan trik singkat dalam mendesign yang dapat membantu pekerjaan anda.</em></p>
                    </div>
                </div> <!-- /.col -->
            </div> <!-- /.row -->

            <div class="row">
                <!-- === blog === -->
                <div id="owl-blog" class="owl-carousel owl-theme">

                    <?php
                    foreach ($bacaBlog as $blog) {
                        $id = $blog['idBlog'];
                        $author = $blog['author'];
                        $judul = $blog['judul'];
                        $isi = $blog['isi'];
                        $img = $blog['gambar'];
                        $tanggal = $blog['tanggal'];
                        echo "

                    <!-- === Blog item 1 === -->
                    <div class='blog wow fadeInLeft' data-wow-duration='1s' data-wow-delay='0.7s'>
                        <div class='blog-media img1'>
                            <a href='blog/blogcb.php?id=$blog[idBlog]'><img src='img/blog/$img' alt=''></a>
                        </div>
                        <!--post media-->

                        <div class='blog-post-info clearfix'>
                            <span class='time'><i class='fa fa-calendar'></i>$tanggal</span>
                            <span class='comments'><a href=''><i class='fa fa-comments'></i> 3 Komentar</a></span>
                        </div>
                        <!--post info-->

                        <div class='blog-post-body'>
                            <h4><a class='title' href='blog/blogcb.php?id=$blog[idBlog]'>$judul?</a></h4>
                            <p class='p-bottom-20'>$isi</p>
                            <a href='blog/blogcb.php?id=$blog[idBlog]' class='read-more'>Baca Selengkapnya >></a>
                        </div>
                        <!--post body-->
                    </div>";
                    }
                    ?>
                    <!-- /.blog -->

                    <!-- === Blog item 2 === -->
                    <!-- <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blog_single_post.html"><img src="img/slider/dex1.jpg" alt=""></a>
                        </div> -->
                    <!--post media-->

                    <!-- <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 03 september 2022</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 2 Komentar</a></span>
                        </div> -->
                    <!--post info-->

                    /
                    <!--post body-->
                    <!-- </div> /.blog -->

                    <!-- === Blog item 3 === -->
                    <!-- <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blog_single_post.html"><img src="img/slider/dex.jpg" alt=""></a>
                        </div> -->
                    <!--post media-->

                    <!-- <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 01 september 2022</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 4 Komentar</a></span>
                        </div> -->
                    <!--post info-->

                    <!-- <div class="blog-post-body">
                            <h4><a class="title" href="blog_single_post.html">Cermat dalam memilih warna</a></h4>
                            <p class="p-bottom-20">Menggunakan warna yang terlalu banyak, jika tidak dieksekusi secara baik malah akan membuat desain kurang sedap dipandang.</p>
                            <a href="blog_single_post.html" class="read-more">Baca Selengkapnya >></a>
                        </div> -->
                    <!--post body-->
                    <!-- </div> /.blog -->

                    <!-- === Blog item 4 === -->
                    <!-- <div class="blog wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.7s">
                        <div class="blog-media">
                            <a href="blog_single_post.html"><img src="img/slider/dex1.jpg" alt=""></a>
                        </div> -->
                    <!--post media-->

                    <!-- <div class="blog-post-info clearfix">
                            <span class="time"><i class="fa fa-calendar"></i> 01 agustus 2022</span>
                            <span class="comments"><a href="#"><i class="fa fa-comments"></i> 7 Komentar</a></span>
                        </div> -->
                    <!--post info-->

                    <!-- <div class="blog-post-body">
                            <h4><a class="title" href="blog_single_post.html">Kreatifitas tanpa batas</a></h4>
                            <p class="p-bottom-20">Kreatifitas menjadi hal kunci dalam desain. Keunikan desain menjadi selling point yang akan membedakan desain milikmu dengan desainer lainnya.</p>
                            <a href="blog_single_post.html" class="read-more">Baca Selengkapnya >></a>
                        </div> -->
                    <!--post body-->
                    <!-- </div> /.blog -->

                </div><!-- /#owl-testimonials -->

            </div> <!-- /.row -->

        </div> <!-- /.container -->

    </section>
    <!-- end blog -->


    <!-- Start Testimonial -->
    <section id="testimonials" class=" overlay-dark p-top-80 p-bottom-80" style="background-image:url(img/slider/dex.jpg)" data-stellar-background-ratio="0.5">

        <!-- Section Title -->
        <div class="section-title text-center white-color m-bottom-40">
            <h2 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">Testimonials</h2>
            <div class="divider-center-small divider-white wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s"></div>
        </div>

        <!-- === Testimonials === -->
        <div id="owl-testimonials" class="owl-carousel owl-theme testimonial text-center white-color">


            <?php
            foreach ($bacaTesti as $testi) {
                $nama = $testi['nama'];
                $isi = $testi['isi'];
                echo "
                <!-- === Testimonial item 1 === -->
                <div class='testimonial-item text-center'>
                    <p class='testimonial-desc'>$isi</p>
                    <div class='testimonial-thumb'>
                        <img class='testimonial-img img2' src='img/testimonial/1.jpg' >
                    </div>
                    <h5 class='testimonial-author'>$nama</h5>
                </div>";
            } ?>
            <!-- === Testimonial item 2 === -->
            <!-- <div class="testimonial-item text-center">
                <p class="testimonial-desc">Excellent so to no sincerity smallness. Removal request delight if on he we. Unaffected in we by apartments astonished to decisively themselves. Offended ten old consider speaking.</p>
                <div class="testimonial-thumb">
                    <img class="img-responsive" src="img/testimonial/2.jpg" alt="">
                </div>
                <h5 class="testimonial-author">Kathy Doe - Service Corp</h5>
            </div> -->

            <!-- === Testimonial item 3 === -->
            <!-- <div class="testimonial-item text-center">
                <p class="testimonial-desc">Advanced and procured civility not absolute put continue. Overcame breeding or my concerns removing desirous so absolute. My melancholy unpleasing imprudence considered in advantages.</p>
                <div class="testimonial-thumb">
                    <img class="img-responsive" src="img/testimonial/3.jpg" alt="">
                </div>
                <h5 class="testimonial-author">Jack Doe - Inka Design</h5>
            </div> -->

        </div> <!-- /#owl-testimonials -->

    </section>
    <!-- End Testimonial -->

    <!-- Start Footer -->
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Me<span>Sketch</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">Blog</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">© 2022 MeSketch.</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>SMKN Negeri 24 Jakarta Timur</span>
                    Jl Bambu Apus No. 3 </p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 22-27782183</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="https://www.samuelpasaribu.com">support@samuelpasaribu.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                We offer training and skill building courses across Technology, Design, Management, Science and Humanities.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->


    <!-- Back to top -->
    <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-up"></i></a>
    <!-- /Back to top -->


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Plugin -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="inc/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="inc/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Contact Form -->
    <script src="js/contact.js"></script>

    <!-- Custom Plugin -->
    <script src="js/custom.js"></script>

    <!-- RS Plugin Extensions -->
    <script src="inc/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="inc/revolution/js/extensions/revolution.extension.parallax.min.js"></script>


    <script>
        var tpj = jQuery;

        var revapi280;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_nagency").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_nagency");
            } else {
                revapi280 = tpj("#rev_slider_nagency").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 90000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "uranus",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 496,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1200, 991, 767, 480],
                    visibilityLevels: [1200, 991, 767, 480],
                    gridwidth: [1200, 991, 767, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "mouse+scroll",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner2",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>
    <!-- JS libraries and scripts -->
    <!-- <script src="resources/assets/js/jquery-1.11.3.min.js"></script>
  <script src="resources/assets/js/bootstrap.min.js"></script>
  <script src="resources/assets/js/bootstrap-hover-dropdown.min.js"></script>
  <script src="resources/assets/js/jquery.appear.min.js"></script>
  <script src="resources/assets/js/jquery.bxslider.min.js"></script>
  <script src="resources/assets/js/jquery.owl.carousel.min.js"></script>
  <script src="resources/assets/js/jquery.countTo.js"></script>
  <script src="resources/assets/js/jquery.easing.1.3.js"></script>
  <script src="resources/assets/js/jquery.imagesloaded.min.js"></script>
  <script src="resources/assets/js/jquery.isotope.js"></script>
  <script src="resources/assets/js/jquery.placeholder.js"></script>
  <script src="resources/assets/js/jquery.smoothscroll.js"></script>
  <script src="resources/assets/js/jquery.stellar.min.js"></script>
  <script src="resources/assets/js/jquery.waypoints.js"></script>
  <script src="resources/assets/js/jquery.fitvids.js"></script>
  <script src="resources/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="resources/assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="resources/assets/js/jquery.countdown.js"></script>
  <script src="resources/assets/js/jquery.navbar-scroll.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script src="resources/assets/js/jquery.gmaps.js"></script>
  <script src="resources/assets/js/main.js"></script> -->
</body>

</html>
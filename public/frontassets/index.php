<?php
	include "link.php";
     
?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="keywords" content="Covid 19" />

    <meta name="description" content="Appino - Responsive App Landing Page" />

    <meta name="author" content="iqonicthemes.in" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />



    <title>COVID - Aplikasi Tracing Covid Di kota Banda Aceh</title>



    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $host; ?>images/favicon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $host; ?>images/favicon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $host; ?>images/favicon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $host; ?>images/favicon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $host; ?>images/favicon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $host; ?>images/favicon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $host; ?>images/favicon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $host; ?>images/favicon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $host; ?>images/favicon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $host; ?>images/favicon/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $host; ?>images/favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $host; ?>images/favicon/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $host; ?>images/favicon/favicon-16x16.png">

    <link rel="manifest" href="<?php echo $host; ?>images/favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="<?php echo $host; ?>/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">



    <!-- Google Fonts -->

    <link rel="stylesheet" type="text/css"

        href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;Raleway:300,400,500,600,700,800,900">



    <!-- Bootstrap -->

    <link rel="stylesheet" href="<?php echo $host; ?>css/bootstrap.min.css">



    <!-- owl-carousel -->

    <link rel="stylesheet" type="text/css" href="<?php echo $host; ?>css/owl-carousel/owl.carousel.css" />



    <!-- Font Awesome -->

    <link rel="stylesheet" type="text/css" href="<?php echo $host; ?>css/font-awesome.css" />



    <!-- Magnific Popup -->

    <link rel="stylesheet" type="text/css" href="<?php echo $host; ?>css/magnific-popup/magnific-popup.css" />



    <!-- Animate -->

    <link rel="stylesheet" type="text/css" href="<?php echo $host; ?>css/animate.css" />



    <!-- Ionicons -->

    <link rel="stylesheet" href="<?php echo $host; ?>css/ionicons.min.css">



    <!-- Style -->

    <link rel="stylesheet" href="<?php echo $host; ?>css/style.css">



    <!-- Responsive -->

    <link rel="stylesheet" href="<?php echo $host; ?>css/responsive.css">



    <!-- custom style -->

    <link rel="stylesheet" href="<?php echo $host; ?>css/custom.css" />





    <!-- CSS Leaflet -->

    <link rel="stylesheet" href="<?php echo $host; ?>css/leaflet.css" />



    <!-- JS Leaflet -->

    <script src="<?php echo $host; ?>js/leaflet.js"></script>





    <style>

        #map-frame {

            width: 100%;

            margin: auto;

            padding: 10px;

            border: 5px solid #555;

        }



        #map {

            width: 100%;

            height: 450px;

        }

    </style>



</head>



<body>



    <!-- Header -->



    <header id="header-wrap" data-offset-top="55" style="background-color: #3949AB;">

        <div class="container">

            <div class="row">

                <div class="col-sm-12">

                    <nav class="navbar navbar-default">

                        <!-- Brand and toggle get grouped for better mobile display -->

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"

                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

                                <span class="sr-only">Toggle navigation</span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                                <span class="icon-bar"></span>

                            </button>

                            <a class="navbar-brand" href="javascript:void(0)">

                                <img src="<?php echo $host; ?>images/pemko.png" alt="logo">

                            </a>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right" id="top-menu">

                                <li class="active"><a href="<?php echo $host; ?>">Home</a></li>

                                <li><a href="<?php echo $host; ?>informasi">Informasi</a></li>

                                <li><a href="<?php echo $host; ?>layanankesehatan">Layanan Kesehatan</a></li>

                                <li><a href="<?php echo $host; ?>statistik">Statistik</a></li>

                                <li><a href="<?php echo $host; ?>qa">Q&A</a></li>

                                <li><a href="<?php echo $host; ?>qrtempat">Cetak QR Tempat</a></li>

                            </ul>

                        </div>

                        <!-- /.navbar-collapse -->

                    </nav>

                </div>

            </div>

        </div>

    </header>



    <!-- Header End -->







    <div class="main-content">



        <!-- Feature -->



        <section id="about-us" class="overview-block-ptb">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="heading-title">

                            <br>

                            <h2 class="title iq-tw-6">Banda Aceh Tracing COVID 19 </h2>



                            <div class="iq-info-box text-center iq-pt-50">



                                <h4 class="iq-tw-6 iq-mt-25 iq-mb-10">Nomor Darurat</h4>

                                <h5>Apabila dalam keadaan darurat, silahkan menghubungi : <br> Tim PSC 119 Kota Banda Aceh

                                </h5> <br>

                                <h5 ><i class="fa fa-phone"></i> 08116780119</h5>

                                <!--p>-Fri 8:00am - 8:00pm</p-->


                            </div>
		<hr>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col-sm-12 col-md-4">

                        <div class="iq-fancy-box text-left">

                            <img src="<?php echo $host; ?>images/1.jpg" width="300px" alt="#">

                            <h4 class="iq-tw-6">Mulai Hari Ini, Banda Aceh Terapkan Perwal 51/2020</h4>



                        </div>

                    </div>

                    <div class="col-sm-12 col-md-4 re-mt-30">

                        <div class="iq-fancy-box text-left">

                            <img src="<?php echo $host; ?>images/2.jpg" width="240px" alt="#">

                            <h4 class="iq-tw-6">Kabag Humas: Zikir Gemilang Akan Digelar dengan Menerapkan Prokes Ketat

                            </h4>



                        </div>

                    </div>

                    <div class="col-sm-12 col-md-4 re-mt-30">

                        <div class="iq-fancy-box text-left">

                            <img src="<?php echo $host; ?>images/3.jpg" width="330px" alt="#">

                            <h4 class="iq-tw-6">Forkopimda Minta BKM Terapkan Prokes Covid-19</h4>



                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- Feature END -->



















        <!-- Counter -->



        <div class="iq-ptb-70 iq-counter-box iq-bg iq-bg-fixed iq-over-black-80"

            style="background: url("<?php echo $host; ?>images/about/04.jpg);">

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-sm-3 col-xs-6 text-center">

                        <div class="counter"> <i class="ion-ios-person-outline iq-font-white" aria-hidden="true"></i>

                            <span class="timer iq-tw-6 iq-font-white" data-to="1540" data-speed="1000">1540</span>

                            <label class="iq-font-white">Jumlah Kasus Total Konfirmasi</label>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-6 text-center">

                        <div class="counter"> <i class="ion-ios-person-outline iq-font-white" aria-hidden="true"></i>

                            <span class="timer iq-tw-6 iq-font-white" data-to="2530" data-speed="1000">2530</span>

                            <label class="iq-font-white">Jumlah Kasus Total Konfirmasi dalam perawatan</label>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50">

                        <div class="counter"> <i class="ion-ios-person-outline iq-font-white" aria-hidden="true"></i>

                            <span class="timer iq-tw-6 iq-font-white" data-to="8120" data-speed="1000">8120</span>

                            <label class="iq-font-white">Jumlah Kasus Total Konfirmasi Sembuh</label>

                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-3 col-xs-6 text-center re7-mt-50">

                        <div class="counter"> <i class="ion-ios-person-outline iq-font-white"

                                aria-hidden="true"></i><span class="timer iq-tw-6 iq-font-white" data-to="1620"

                                data-speed="1000">1620</span>

                            <label class="iq-font-white">Jumlah Kasus Total Konfirmasi Meninggal</label>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Counter END -->





        <!-- Frequently Asked Questions -->



        <section class="overview-block-ptb white-bg">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="heading-title">

                            <h2 class="title iq-tw-6">Peta Sebaran Covid-19 di Kota Banda Aceh</h2>

                            <!-- <div class="divider"></div>

                            <p>If you got any query? Here you go! Don't hesitate to ask any Question! We are happy to

                                help with your questions. Here you go! Don't hesitate to ask any Question! We are happy

                                to help with your questions.</p> -->

                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div id="map-frame">

                            <div id="map"></div>

                        </div>

                    </div>

                    <div id="note">

                        <br>

                        <b>Keterangan:</b>

                        <br>



                        <img src="<?php echo $host; ?>images/success-icon.png" width="12" /> : Kecamatan 0 Positif Covid-19 (zona hijau)

                        <br>

                        <img src="<?php echo $host; ?>images/warning-icon.png" width="12" /> : Kecamatan < 10 Positif Covid-19 (zona Kuning)

                            <br>

                            <img src="<?php echo $host; ?>images/danger-icon.png" width="12" /> : Kecamatan > 10 Positif Covid-19 (zona

                            Merah) <br>

                            <img src="<?php echo $host; ?>images/hospital.png" width="12" /> : RS Rujukan COVID-19 Kota Banda Aceh <br>

                    </div>



                </div>

            </div>

        </section>









        <hr>

        <hr>



        <!-- Appino Great Feature -->


 <section class="overview-block-ptb white-bg">

            <div class="container">

                <div class="row">
				
				
					
					 <div class="col-sm-6 col-lg-3 col-md-3">

                        <div class="iq-fancy-box-02 text-center">

                            <div class="iq-icon">

                                <i aria-hidden="true" class="ion-ios-monitor-outline"></i>

                            </div>

                            <div class="fancy-content">

                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Informasi</h5>

                                <p>Informasi terkait protokol pada masa pandemi Covid 19

                                </p>

                                <!--span class="iq-big-title">01</span-->

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-3 col-md-3">

                        <div class="iq-fancy-box-02 text-center">

                            <div class="iq-icon">

                                <i aria-hidden="true" class="ion-ios-monitor-outline"></i>

                            </div>

                            <div class="fancy-content">

                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Layanan Kesehatan</h5>

                                <p>Daftar Rumah Sakit Rujukan dan Puskesmas

                                </p>

                                <!--span class="iq-big-title">01</span-->

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-3 col-md-3 re7-mt-50">

                        <div class="iq-fancy-box-02 text-center">

                            <div class="iq-icon">

                                <i aria-hidden="true" class="ion-ios-settings"></i>

                            </div>

                            <div class="fancy-content">

                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Statistik</h5>

                                <p>Informasi detail jumlah dan sebaran status Covid 19 di setiap kecamatan dan gampong dalam rentang waktu tertentu

                                </p>

                                <!--span class="iq-big-title">02</span-->

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6 col-lg-3 col-md-3 re-mt-30">

                        <div class="iq-fancy-box-02 text-center">

                            <div class="iq-icon">

                                <i aria-hidden="true" class="ion-social-googleplus-outline"></i>

                            </div>

                            <div class="fancy-content">

                                <h5 class="iq-tw-6 iq-pt-20 iq-pb-10">Q&A</h5>

                                <p>Informasi pengetahuan umum dan khusus mengenai Covid 19

                                </p>

                                <!--span class="iq-big-title">03</span-->

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- Appino Great Feature END -->



        <!-- Clients -->



        <div class="overview-block-ptb iq-bg iq-bg-fixed iq-over-black-80">

            <div class="container">
		<h4>Didukung oleh:</h4>
		<br>
                <div class="row">

                    <div class="col-lg-12 col-md-12">

                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="true"

                            data-dots="false" data-items="5" data-items-laptop="4" data-items-tab="3"

                            data-items-mobile="2" data-items-mobile-sm="1" data-margin="15">

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/01.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/02.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/03.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/04.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/05.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/06.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/07.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/08.png"

                                    alt="#"></div>

                            <div class="item"> <img class="img-responsive center-block" src="<?php echo $host; ?>images/clients/gray/09.png"

                                    alt="#"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Clients END -->

    </div>

    <div class="footer">





        <!-- Address -->



        <!-- <section class="iq-our-info white-bg overview-block-ptb">

            <div class="container">

                <div class="row">



                    <div class="col-sm-12">

                        <div class="iq-info-box text-center iq-pt-50">

                            <div class="info-icon green-bg"><i class="ion-ios-telephone-outline" aria-hidden="true"></i>

                            </div>

                            <h4 class="iq-tw-6 iq-mt-25 iq-mb-15">Nomor Darurat</h4>

                            <h5>Apabila dalam keadaan darurat, silahkan menghubungi : <br> Command Center Banda Aceh

                            </h5> <br>

                            <span class="lead iq-tw-6">+0123 456 789</span>

                            <p>Mon-Fri 8:00am - 8:00pm</p>

                        </div>

                    </div>



                    <div class="col-sm-12">

                        <ul class="info-share">

                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>

                            <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </section> -->



        <!-- Address END -->









        <!-- Footer -->



        <footer class="iq-footer white-bg text-center">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="footer-copyright iq-ptb-20">© Copyright 2020 Pemerintah Kota Banda Aceh</div>

                    </div>

                </div>

            </div>

        </footer>



        <!-- Footer END -->



    </div>



    <!-- back-to-top -->



    <div id="back-to-top">

        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>

    </div>



    <!-- back-to-top End -->










    <!-- jQuery -->

    <script src="<?php echo $host; ?>js/jquery.min.js"></script>



    <!-- bootstrap -->

    <script src="<?php echo $host; ?>js/bootstrap.min.js"></script>



    <!-- owl-carousel -->

    <script src="<?php echo $host; ?>js/owl-carousel/owl.carousel.min.js"></script>



    <!-- Counter -->

    <script src="<?php echo $host; ?>js/counter/jquery.countTo.js"></script>



    <!-- Jquery Appear -->

    <script src="<?php echo $host; ?>js/jquery.appear.js"></script>



    <!-- Magnific Popup -->

    <script src="<?php echo $host; ?>js/magnific-popup/jquery.magnific-popup.min.js"></script>



    <!-- Retina -->

    <script src="<?php echo $host; ?>js/retina.min.js"></script>



    <!-- wow -->

    <script src="<?php echo $host; ?>js/wow.min.js"></script>



    <!-- Countdown -->

    <script src="<?php echo $host; ?>js/jquery.countdown.min.js"></script>



    <!-- Custom -->

    <script src="<?php echo $host; ?>js/custom.js"></script>



    <!-- Data JSON -->

    <script type="text/javascript" src="<?php echo $host; ?>data.json"></script>



    <!-- Leaftlet build script -->

    <script type="text/javascript" src="<?php echo $host; ?>js/map_script.js"></script>





</body>



</html>
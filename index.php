<?php
session_start();
//initilize the page
require_once("inc/config.php");


$header = file_get_contents('header.php',TRUE);
$footer = file_get_contents('footer.php',TRUE);
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
            <!-- Favicon -->
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <!--Bootstrap Framework Version 3.3.7--> 
        <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">

        <!--Font Awesome Version 4.6.3 --> 
        <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">

        <!-- Medical Icons -->
        <link href="css/medical-icons.css" type="text/css" rel="stylesheet">

        <!-- Stylesheets --> 
        <link href="css/vendors.css" type="text/css" rel="stylesheet">
        <link href="css/style.css" type="text/css" rel="stylesheet" id="style">
        <link href="css/components.css" type="text/css" rel="stylesheet" id="components">

        <!--Slider Revolution -->
        <link href="slider-revolution/css/settings.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="slider-revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="slider-revolution/css/navigation.css">

        <!--Google Fonts--> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Volkhov:400,400i" rel="stylesheet">

        <!-- Respond.js and HTML shiv provide HTML5 support in older browsers like IE9 and 8 -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php echo $header; ?>
        <!-- Slider Revolution -->
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="slider" class="rev_slider fullwidthbanner" data-version="5.0.7">    
                <ul>	
                    <!-- Slide 1 -->
                    <li data-index="rs-129"
                        data-transition="parallaxvertical"
                        data-slotamount="default"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default"  
                        data-thumb=""  
                        data-rotate="0"  
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off"  
                        data-title="A STUDY ON HAPPINESS" 
                        data-description="Nurturing the most awesome minds.">

                        <!-- MAIN IMAGE -->
                        <img src="images/dummy.jpg" data-lazyload="images/slider-2.jpg" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <!-- Small Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color2" 
                            id="layer-1-small-text" 
                            data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']" 
                            data-width="none"
                            data-fontsize="['24', '24', '22', '16']"
                            data-height="28"
                            data-color="['#1696e7']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            style="z-index: 10; white-space: nowrap; font-weight:400;">เราดูแลคุณ.
                        </div>

                        <!-- Main Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                            id="slide-1-main-text" 
                            data-x="['left','left','left','left']" data-hoffset="['50','50','50','30']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']" 
                            data-fontsize="['46','46','46','32']"
                            data-lineheight="['55','55','55','35']"
                            data-color="['#fff']"
                            data-width="['600','600','600','420']"
                            data-height="120"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            style="z-index: 11; min-width: 600px; max-width: 600px; font-weight:400; white-space: normal; text-shadow:0px 2px 5px #000; text-transform:capitalize; text-align:left;">จากคลินิก สู่ โรงพยาบาล ด้วยมาตรฐานสากล.
                        </div>

                        <!-- Button -->
                        <a href="about.html" class="tp-caption btn btn-primary rs-parallaxlevel-0 hidden-xs tp-resizeme" 
                            id="slide-1-button-1" 
                            data-x="['left','left','left','left']" data-hoffset="['53','53','53','30']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;" 
                            data-mask_out="x:0;y:0;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-responsive="on"
                            style="z-index: 12;">READ MORE 
                        </a>

                        <!-- Button -->
                        <a href="pricing-tables.html" class="tp-caption btn btn-black rs-parallaxlevel-0 hidden-xs tp-resizeme" 
                            id="slide-1-button-2" 
                            data-x="['left','left','left','left']" data-hoffset="['210','210','210','210']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;" 
                            data-mask_out="x:0;y:0;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-responsive="on"
                            style="z-index: 12;">View Plans 
                        </a>
                    </li>

                    <!-- Slide 2 -->
                    <li data-index="rs-2"
                        data-transition="parallaxvertical"
                        data-slotamount="default"  
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default"  
                        data-thumb=""  
                        data-rotate="0"  
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off"  
                        data-title="A STUDY ON HAPPINESS" 
                        data-description="Nurturing the most awesome minds.">
                        <!-- MAIN IMAGE -->
                        <img src="images/dummy.jpg" data-lazyload="images/slider-1.jpg" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                        <!-- Small Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color2" 
                            id="layer-2-small-text" 
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-120','-120','-120','-120']" 
                            data-width="none"
                            data-fontsize="['24', '24', '22', '16']"
                            data-height="28"
                             data-color="['#1696e7']"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            style="z-index: 10; white-space: nowrap; font-weight:400; text-align:right">การรักษาขั้นสูงที่เหมาะสม.
                        </div>                            

                        <!-- Main Text -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" 
                            id="slide-2-main-text" 
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']" 
                            data-fontsize="['46','46','46','32']"
                            data-lineheight="['55','55','55','35']"
                            data-color="['#fff']"
                            data-width="['600','600','600','420']"
                            data-height="120"
                            data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                            data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            style="z-index: 11; min-width: 600px; max-width: 600px; font-weight:400; white-space: normal; text-shadow:0px 2px 5px #000; text-transform:capitalize; text-align:right;">นำพาเทคโนโลยีการแพทย์ สู่ชุมชน.
                        </div>

                        <!-- Button -->
                        <a href="about.html" class="tp-caption btn btn-primary rs-parallaxlevel-0 hidden-xs" 
                            id="slide-2-button-1" 
                            data-x="['right','right','right','right']" data-hoffset="['50','50','50','50']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;" 
                            data-mask_out="x:0;y:0;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-responsive="on"
                            style="z-index: 12;">READ MORE 
                        </a>

                        <!-- Button -->
                        <a href="pricing-tables.html" class="tp-caption btn btn-black rs-parallaxlevel-0 hidden-xs" 
                            id="slide-2-button-2" 
                            data-x="['right','right','right','right']" data-hoffset="['210','210','210','210']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']" 
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                            data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                            data-mask_in="x:0px;y:0px;" 
                            data-mask_out="x:0;y:0;" 
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on" 
                            data-responsive="on"
                            style="z-index: 12;">View Plans 
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Revolution Slider Ends -->
        
        
        <div class="bgcolor1 pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="iconbox-4">
                            <i class="med-icon icon-i-anesthesia"></i>
                            <br><br>
                            <h4 class="heading">Best Patient Care Provided</h4>
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <br>
                            <a href="why-us.html" class="btn btn-black btn-sm">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="iconbox-4">
                            <i class="med-icon icon-i-dental"></i>
                            <br><br>
                            <h4 class="heading">100+ Doctors On Panel</h4>
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <br>
                            <a href="why-us.html" class="btn btn-black btn-sm">Read More</a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="iconbox-4">
                            <i class="med-icon icon-i-cardiology"></i>
                            <br><br>
                            <h4 class="heading">Most Advanced MRI Machines</h4>
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            <br>
                            <a href="why-us.html" class="btn btn-black btn-sm">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="container mt-80">
            <div class="row">
                <div class="col-sm-7">
                    <h2 class="heading"> <span class="color1">Excellence</span> is the word.</h2>
                    <p class="justify">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <div class="row mt-40">
                        <div class="col-sm-6">
                            <h4>Cardiac Department</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Research &amp; Development</h4>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.</p>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <div class="col-sm-6">
                            <h4>World Research Centres</h4>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Intensive Care Given </h4>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="youtube" data-video-id="IeSW2Gg1qIY" style="height: 500px;">           <!-- Replace video id with your video id -->
                        <!--<i class="fa fa-play btn-play"></i>
                    </div>
                </div>
            </div>
        </div>-->
        
        <div class="container mt-80">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-block">
                        <h2 class="heading"> <span class="color1">แพทย์</span>ของเรา</h2>
                        <p class="sub-heading">ทีมแพทย์ ของเรา รักษาพยาบาล ชุมชนมังกร แพรกษา</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="doctor-box-1">
                        <img src="images/doc-2.png" class="img-responsive" alt="">
                        <div class="doctor-details">
                            <h5 class="doctor-name">Mr. Roberto Blackwell</h5>
                            <span class="doctor-desig">Managing Director</span>
                        </div>
                        <div class="doctor-social">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <br/>
                            <a href="doctor-single-sidebar.html" class="btn btn-primary btn-sm">View profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="doctor-box-1">
                        <img src="images/doc-1.png" class="img-responsive" alt="">
                        <div class="doctor-details">
                            <h5 class="doctor-name">Ms. Everett Holder</h5>
                            <span class="doctor-desig">Head Of Department</span>
                        </div>
                        <div class="doctor-social">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <br/>
                            <a href="doctor-single-sidebar.html" class="btn btn-primary btn-sm">View profile</a>
                        </div>                    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="doctor-box-1">
                        <img src="images/doc-3.png" class="img-responsive" alt="">
                        <div class="doctor-details">
                            <h5 class="doctor-name">Ms. Mike Hendricks</h5>
                            <span class="doctor-desig">Senior Gynae</span>
                        </div>
                        <div class="doctor-social">
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <br/>
                            <a href="doctor-single-sidebar.html" class="btn btn-primary btn-sm">View profile</a>
                        </div>                   
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="app-download-dark bgcolor1 pt-60 pb-60 mt-80" style="background-image:url(images/download-app.png)">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-5">
                        <h2 class="heading inverse">Download the Medwise App today!</h2>
                        <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <br>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your Mobile Number to get App Download Link">
                                <span class="input-group-btn">
                                    <button class="btn btn-black" type="button"><i class="fa fa-arrow-right"></i></button>
                                </span>
                            </div>
                        </form>
                        <br>
                        <ul class="app-links">
                            <li>
                                <a href="#" class="btn btn-app">
                                    <span class="icon">
                                        <i class="fa fa-apple"></i>
                                    </span>
                                    <span class="text">
                                        Get App
                                        <span class="sub-text">iOS Store</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-app">
                                    <span class="icon">
                                        <i class="fa fa-android"></i>
                                    </span>
                                    <span class="text">
                                        Get App
                                        <span class="sub-text">iOS Store</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-app">
                                    <span class="icon">
                                        <i class="fa fa-windows"></i>
                                    </span>
                                    <span class="text">
                                        Get App
                                        <span class="sub-text">iOS Store</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="container mt-80">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-block">
                        <h2 class="heading">เครื่อง <span class="color1">X-Ray</span> ที่ทันสมัย</h2>
                        <p class="sub-heading">โรงพยาบาล อรวรรณ นำเครื่องX-Ray ที่ทันสมัย.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="department-box-2">
                        <div class="head">
                            <i class="med-icon icon-i-anesthesia"></i>
                            <h3 class="heading">Radiology and Urology</h3>
                        </div>
                        <div class="body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            <br>
                            <a href="department-single-sidebar.html" class="btn btn-primary btn-sm">Know More</a>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="department-box-2">
                        <div class="head">
                            <i class="med-icon icon-i-cardiology"></i>
                            <h3 class="heading">Cardiology and Transplant</h3>
                        </div>
                        <div class="body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            <br>
                            <a href="department-single-sidebar.html" class="btn btn-primary btn-sm">Know More</a>
                        </div>    
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="department-box-2">
                        <div class="head">
                            <i class="med-icon icon-i-dental"></i>
                            <h3 class="heading">Dental Care and Hygiene</h3>
                        </div>
                        <div class="body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                            <br>
                            <a href="department-single-sidebar.html" class="btn btn-primary btn-sm">Know More</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="bgcolor2 pt-60 pb-60 mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 mt-20">
                        <div class="carousel slide" id="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#carousel"></li>
                                <li data-slide-to="1" data-target="#carousel"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="images/850-450-normal-1.jpg" alt="First slide">
                                </div>
                                <div class="item">
                                    <img src="images/850-450-normal-2.jpg" alt="Second slide">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" data-slide="prev" href="#carousel">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right carousel-control" data-slide="next" href="#carousel">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 mt-20">
                        <h3 class="heading">สิ่งที่เราดูแล.</h3>
                        <hr class="hr-1 left">
                        <p class="lead">Even the all-powerful Pointing has no control about the blind texts.</p>
                        <ul class="list-styled">
                            <li>One day however a small line of blind text by the name of Lorem Ipsum.</li>
                            <li>A small river named Duden flows by their place and supplies it with the necessary regelialia</li>
                            <li>One day however a small line of blind text by the name of Lorem Ipsum.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-60 pb-60 subscribe parallax" style="background-image:url('images/1920-600-dark.jpg')" data-speed="1.5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="heading inverse text-center">รับจดหมาย ข่าวสารทาง email . <span class="color1">สมัครได้เลย วันนี้!</span></h3>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-sm-6 col-sm-offset-3 mt-20">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Subscribe</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-80">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-block">
                        <h2 class="heading">New <span class="color1">Trending</span> Offers</h2>
                        <p class="sub-heading">Behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer-box">
                        <div class="offer-header">
                            <h4 class="heading">50% Off</h4>
                            <span>on Full Body Checkup </span>
                        </div>
                        <div class="offer-body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <a href="book-appointment-form.html" class="btn btn-primary btn-sm">Avail Offer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer-box">
                        <div class="offer-header">
                            <h4 class="heading"> Free BMI</h4>
                            <span>on Full Body Checkup </span>
                        </div>
                        <div class="offer-body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <a href="book-appointment-form.html" class="btn btn-primary btn-sm">Avail Offer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer-box">
                        <div class="offer-header">
                            <h4 class="heading">10% Cashback</h4>
                            <span>on Full Body Checkup </span>
                        </div>
                        <div class="offer-body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <a href="book-appointment-form.html" class="btn btn-primary btn-sm">Avail Offer</a>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-4">
                    <div class="offer-box">
                        <div class="offer-header">
                            <h4 class="heading">10% Cashback</h4>
                            <span>on Full Body Checkup </span>
                        </div>
                        <div class="offer-body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <a href="book-appointment-form.html" class="btn btn-primary btn-sm">Avail Offer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer-box">
                        <div class="offer-header">
                            <h4 class="heading">50% Off</h4>
                            <span>on Full Body Checkup </span>
                        </div>
                        <div class="offer-body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <a href="book-appointment-form.html" class="btn btn-primary btn-sm">Avail Offer</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="offer-box">
                        <div class="offer-header">
                            <h4 class="heading"> Free BMI</h4>
                            <span>on Full Body Checkup </span>
                        </div>
                        <div class="offer-body">
                            <p>Behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <a href="book-appointment-form.html" class="btn btn-primary btn-sm">Avail Offer</a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="mt-80 parallax" style="background-image:url('images/1920-1200-normal.jpg')" data-speed="10">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-6 no-gutter">
                        <div class="quick-appointment-form">
                            <h3 class="heading thin font-2 inverse font30">การนัดพบแพทย์</h3>
                            <p class="text-muted">ช่วยกรอกข้อมูล เบื้องต้นของท่าน เพื่อให้เราจัดเตรียมความพร้อม เพื่อดูแลท่าน.</p>
                            <br/>
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="ชื่อ">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="นามสกุล">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="เบอร์โทรศัพท์">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="number" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control date-select" type="text" placeholder="วัน เดือน ปี เกิด">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select>
                                                <option>Select Appointment Slot</option>
                                                <option>9:00 p.m. - 12:00 p.m.</option>
                                                <option>12:00 p.m. - 4:00 p.m.</option>
                                                <option>4:00 p.m. - 8:00 p.m.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="ข้อความ"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-black" type="submit"><i class="fa fa-paper-plane"></i> บันทึก นัดพบแพทย์</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <?php echo $footer; ?>
        <div id="back"><i class="fa fa-angle-up"></i></div>
        <!-- Modal -->
        <div class="modal fade modal-popup" id="modal1" data-open-onload="true" data-open-delay="1500" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="background-image:url('images/modal-background.jpg'); background-size:cover">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 pt-20 pb-20 text-center">
                                        <h4 class="heading font34 inverse">Get the best of health tips straight in your inbox!</h4>
                                        <hr class="hr-2">
                                        <p class="font22 text-center">100k people have already subscribed. You'll love it too!</p>
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Enter your Email id">
                                            </div>
                                            <button class="btn btn-black" type="button"><i class="fa fa-paper-plane"></i> Yes, Let's get started!</button>
                                            <button class="btn btn-primary btn-sm" data-dismiss="modal" type="button"> I hate offers!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JQuery Version 3.1.0 -->
        <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap Version 3.3.7 -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

        <!--Slider Revolution version 5.0-->
        <script type="text/javascript" src="slider-revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="slider-revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Include only when working on Local system. Not required on server -->
        <script type="text/javascript" src="slider-revolution/js/extensions/revolution.extension.parallax.min.js"></script>    
        <script type="text/javascript" src="slider-revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript" src="slider-revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="slider-revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="slider-revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>    

        <!-- Owl Carousel 2.0.0 -->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>

        <!-- Bootstrap Select (Dropdown Styling) -->
        <script src="js/bootstrap-select.min.js" type="text/javascript"></script>

        <!-- jQuery UI (Date Picker) -->
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>

        <!-- Custom JS -->
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>

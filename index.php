<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Home | MySchool</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/sl-slide.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <?php
        include('header.php');
        ?>
        <!--Slider-->
        <section id="slide-show">
            <div id="slider" class="sl-slider-wrapper">
                <div class="sl-slider">
                    <!--Slider Item1-->

            <!-- <img class="pull-right" width="fill_parent" src="images/sample/slider/1.jpg" alt="" /> -->


                    <div class="sl-slide item1" >
                        <!-- <div class="sl-slide-inner">
                            <div class="container"> -->
                        <img class="pull-right" style="max-width:100%; width:100%;height:auto; opacity:0.7;" src="images/sample/slider/1.jpg" alt="" />
                        <!-- </div>
                    </div> -->
                    </div>
                    <!--/Slider Item1-->

                    <!--Slider Item2-->
                    <div class="sl-slide item2" >
                        <!-- <div class="sl-slide-inner">
                            <div class="container">
                        -->        <img class="pull-right" style="max-width:100%; width:100%;height:auto; opacity:0.7;" src="images/sample/slider/2.jpg" alt="" />

                        <!-- </div>
                    </div> -->
                    </div>
                    <!--Slider Item2-->

                    <!--Slider Item3-->
                    <div class="sl-slide item3" >
                        <!-- <div class="sl-slide-inner"> -->
                        <!-- <div class="container"> -->
                        <img class="pull-right" style="max-width:100%; width:100%;height:auto; opacity:0.7;" src="images/sample/slider/4.jpg" alt="" />

                        <!-- </div> -->
                        <!-- </div> -->
                    </div>
                    <!--Slider Item3-->

                </div>
                <!--/Slider Items-->

                <!--Slider Next Prev button-->
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev"><i class="icon-angle-left"></i></span>
                    <span class="nav-arrow-next"><i class="icon-angle-right"></i></span> 
                </nav>
                <!--/Slider Next Prev button-->

            </div>
            <!-- /slider-wrapper -->           
        </section>


        <section id="services">
            <div class="container">
                <div class="center gap">
                    <h3>A Better Future With Data</h3>
                    <p class="lead">To ensure you have a great search experience on MySchool, We are constantly churning numbers and algorithms to bring out new features and tools for schools.</p>
                </div>

                <div class="row-fluid">
                    <div class="span4">
                        <div class="media">
                            <div class="pull-left">
                                <i class="icon-globe icon-medium"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">School Rating</h4>
                                <p>A number that indicates the overall experience of living in your selected property.</p>
                            </div>
                        </div>
                    </div>            

                    <div class="span4">
                        <div class="media">
                            <div class="pull-left">
                                <i class="icon-thumbs-up-alt icon-medium"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Analytics Maps</h4>
                                <p>Optimize for your parameters for choice.</p>
                            </div>
                        </div>
                    </div>            

                    <div class="span4">
                        <div class="media">
                            <div class="pull-left">
                                <i class="icon-leaf icon-medium icon-rounded"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">School Listing</h4>
                                <p>See the schools with the parameters you never see before.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap"></div>
            </div>
        </section>
        <section id="clients" class="main">
            <div class="container">
                <div class="row-fluid">
                    <div class="span2">
                        <div class="clearfix">
                            <h4 class="pull-left">Technology PARTNERS</h4>
                            <div class="pull-right">
                                <a class="prev" href="#myCarousel" data-slide="prev"><i class="icon-angle-left icon-large"></i></a> <a class="next" href="#myCarousel" data-slide="next"><i class="icon-angle-right icon-large"></i></a>
                            </div>
                        </div>
                        <p>We are very Thankful to IBM, Data.gov.in, 91SpringBoard for giving us opportunities.</p>
                    </div>
                    <div class="span10">
                        <div id="myCarousel" class="carousel slide clients">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <div class="row-fluid">
                                        <ul class="thumbnails">
                                            <li class="span3"><a href="#"><img src="images/ibm.jpg"></a></li>
                                            <li class="span3"><a href="#"><img src="images/data.png"></a></li>
                                            <li class="span3"><a href="#"><img src="images/91.png"></a></li>
                                            
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!-- /Carousel items -->

                        </div>
                    </div>
                </div>
            </div>
        </section>





        <?php
        include('footer.php');
        ?>
        <!--  Login form -->
        <div class="modal hide fade in" id="loginForm" aria-hidden="false">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
                <h4>Login Form</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-inline" action="index.html" method="post" id="form-login">
                    <input type="text" class="input-small" placeholder="Email">
                    <input type="password" class="input-small" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <a href="#">Forgot your password?</a>
            </div>
            <!--/Modal Body-->
        </div>
        <!--  /Login form -->

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <!-- Required javascript files for Slider -->
        <script src="js/jquery.ba-cond.min.js"></script>
        <script src="js/jquery.slitslider.js"></script>
        <!-- /Required javascript files for Slider -->

        <!-- SL Slider -->
        <script type="text/javascript">
            $(function () {
                var Page = (function () {

                    var $navArrows = $('#nav-arrows'),
                            slitslider = $('#slider').slitslider({
                        autoplay: true
                    }),
                            init = function () {
                                initEvents();
                            },
                            initEvents = function () {
                                $navArrows.children(':last').on('click', function () {
                                    slitslider.next();
                                    return false;
                                });

                                $navArrows.children(':first').on('click', function () {
                                    slitslider.previous();
                                    return false;
                                });
                            };

                    return {init: init};

                })();

                Page.init();
            });
        </script>
        <!-- /SL Slider -->
    </body>
</html>
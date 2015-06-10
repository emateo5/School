<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login | School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/sl-slide.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <?php
        include('header.php');
        ?>


        <section class="title">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h1>Registration</h1>
                    </div>
                    <div class="span6">
                        <ul class="breadcrumb pull-right">
                            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                            <li><a href="#">Pages</a> <span class="divider">/</span></li>
                            <li class="active">Registration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title -->       


        <section id="registration-page" class="container">
            <form class="center form-horizontal" action="/add_school_submit.php" method="POST">
                <fieldset class="registration-form">


                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Select State: </label>
                        <div class="controls">
                            <select  style="min-height: 30px;"name="states" id="states"><option value="0">Select State</option><option value="35">ANDAMAN &amp; NICOBAR ISLANDS</option><option value="28">ANDHRA PRADESH</option><option value="12">ARUNACHAL PRADESH</option><option value="18">ASSAM</option><option value="10">BIHAR</option><option value="04">CHANDIGARH</option><option value="22">CHHATTISGARH</option><option value="26">DADRA &amp; NAGAR HAVELI</option><option value="25">DAMAN &amp; DIU</option><option value="07">DELHI</option><option value="30">GOA</option><option value="24">GUJARAT</option><option value="06">HARYANA</option><option value="02">HIMACHAL PRADESH</option><option value="01">JAMMU &amp; KASHMIR</option><option value="20">JHARKHAND</option><option value="29">KARNATAKA</option><option value="32">KERALA</option><option value="31">LAKSHADWEEP</option><option value="23">MADHYA PRADESH</option><option value="27">MAHARASHTRA</option><option value="14">MANIPUR</option><option value="17">MEGHALAYA</option><option value="15">MIZORAM</option><option value="13">NAGALAND</option><option value="21">ORISSA</option><option value="34">PONDICHERRY</option><option value="03">PUNJAB</option><option value="08">RAJASTHAN</option><option value="11">SIKKIM</option><option value="33">TAMIL NADU</option><option value="16">TRIPURA</option><option value="09">UTTAR PRADESH</option><option value="05">UTTARANCHAL</option><option value="19">WEST BENGAL</option></select>


                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Enter District: </label>
                        <div class="controls">
                            <input type="text" name="district" id="district" style="min-height:30px;" placeholder="Enter District"></input>


                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Enter School Name: </label>
                        <div class="controls">
                            <input type="text" name="school" id="school" style="min-height:30px;" placeholder="Enter School Name"></input>


                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Enter Category: </label>
                        <div class="controls">
                            <input type="text" name="category" id="category" style="min-height:30px;" placeholder="Enter Category"></input>


                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Enter Area: </label>
                        <div class="controls">
                            <input type="text" name="area" id="area" style="min-height:30px;" placeholder="Enter Area"></input>


                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Enter Pin Code: </label>
                        <div class="controls">
                            <input type="text" name="pin" id="pin" style="min-height:30px;" placeholder="Enter Pin Code"></input>


                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Enter your name: </label>
                        <div class="controls">
                            <input type="text" name="name" id="name" style="min-height:30px;" placeholder="Enter your name"></input>


                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Enter email id: </label>
                        <div class="controls">
                            <input type="text" name="email" id="email" style="min-height:30px;" placeholder="Enter email id"></input>


                        </div>
                    </div>

    



                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success btn-large btn-block">Request to Admin</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </section>
        <!-- /#registration-page -->

        

        <!--Footer-->
        <?php
        include('footer.php');
        ?>
        <!--/Footer-->

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

        <script src="../js/vendor/jquery-1.9.1.min.js"></script>
        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

    </body>
</html>

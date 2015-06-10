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
        <title>School Directory | Nova</title>
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

        <!--Header-->
        <?php
            include('header.php');
        ?>
        <!-- /header -->


        <section class="title">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h1>School Directory</h1>
                    </div>
                    <div class="span6">
                        <ul class="breadcrumb pull-right">
                            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                            <li><a href="#">Pages</a> <span class="divider">/</span></li>
                            <li class="active">Blog Item</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title --> 

        <section id="about-us" class="container">
            <div class="row-fluid">

                <aside class="span3">
                    <div class="widget search">
                        <h3>State</h3>
                        <a href="#"><h5>Tamil Nadu</h5></a>
                    </div>

                    <div class="widget search">
                        <h3>District</h3>
                        <select id="district" onchange="get_villages()">
                            <option></option>
                            <?php
                            $sql = "select distinct(district) from schools order by district";
                            $district = mysql_query($sql) or die(mysql_error());
                            while ($row = mysql_fetch_array($district)) {
                                echo "<option>" . $row['district'] . "</option>";
                            }
                            ?>
                        </select>

                        <h3>Village</h3>
                        <select id="village" onchange="get_schools()">

                        </select>

                        <h3>Category of School</h3>
                        <select id="category" onchange="get_schools()">
                            <option></option>
                            <?php
                            $sql = "select distinct(category_of_school) from schools order by category_of_school";
                            $category_of_school = mysql_query($sql) or die(mysql_error());
                            while ($row = mysql_fetch_array($category_of_school)) {
                                echo "<option>" . $row['category_of_school'] . "</option>";
                            }
                            ?>
                        </select>

                        <h3>School Medium</h3>
                        <select id="medium" onchange="get_schools()">
                            <option></option>
                            <?php
                            $sql = "select distinct(school_medium) from schools order by school_medium";
                            $school_medium = mysql_query($sql) or die(mysql_error());
                            while ($row = mysql_fetch_array($school_medium)) {
                                echo "<option>" . $row['school_medium'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <!-- /.search -->


                </aside>

                <div class="span9">
                    <div id="schools">

                    </div>
                </div>

            </div>

        </section>

        

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

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script>
                            function get_villages() {
                                var district = $('#district').find(":selected").text();

                                document.getElementById("village").innerHTML = "<option></option>";

                                if (district.length > 0) {
                                    var xmlhttp;
                                    if (window.XMLHttpRequest) {
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function () {
                                        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                                            var res = xmlhttp.responseText;
                                            document.getElementById("village").innerHTML = res;
                                        }
                                    };
                                    xmlhttp.open("GET", "get_district.php?district=" + district, false);
                                    xmlhttp.send();
                                }
                                get_schools();
                            }

                            function get_schools() {
                                var district = $('#district').find(":selected").text();
                                var village = $('#village').find(":selected").text();
                                var category = $('#category').find(":selected").text();
                                var medium = $('#medium').find(":selected").text();

                                document.getElementById("schools").innerHTML = "<b>No School Found...</b>";


                                var xmlhttp;
                                if (window.XMLHttpRequest) {
                                    xmlhttp = new XMLHttpRequest();
                                } else {
                                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                }
                                xmlhttp.onreadystatechange = function () {
                                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                                        var res = xmlhttp.responseText;
                                        document.getElementById("schools").innerHTML = res;
                                    }
                                };
                                xmlhttp.open("GET", "get_school.php?district=" + district + "&village=" + village + "&category=" + category + "&medium=" + medium, false);
                                xmlhttp.send();

                            }

                            get_schools();


        </script>
    </body>
</html>

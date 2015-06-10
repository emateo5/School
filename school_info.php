<?php
require_once 'config.php';
$school_id = $_GET['id'];
$sql = "select * from schools where school_id = '" . $school_id . "' limit 1";
$result = mysql_query($sql) or die(mysql_error());
$school_count = mysql_num_rows($result);
if ($school_count !== 0) {
    $school = mysql_fetch_array($result);
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blog Item | Nova</title>
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
                        <h1>
                            <?php
                            if ($school_count !== 0) {
                                echo $school['school_name'];
                            }
                            ?>
                            <h3> 
                                <?php
                                if ($school_count !== 0) {
                                    echo $school['district'] . ", Tamil Nadu";
                                }
                                ?>
                            </h3>

                        </h1>
                    </div>
                    <div class="span6">
                        <ul class="breadcrumb pull-right">
                            <li><a href="/index.php">Home</a> <span class="divider">/</span></li>
                            <li><a href="/school_directory.php">School Directory</a> <span class="divider">/</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title --> 

        <section id="about-us" class="container">
            <div class="row-fluid">

                <aside class="span3">


                    <div class="box">
                        <p><img src="/images/school.jpg" alt="" ></p>
                        <center>
                            <a class="btn btn-social" style="margin: 0px !important; padding: 0px !important;"href="#"><img src="/images/link.jpg" width="30px"/></a>
                            <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> </center>
                    </div>
                    <!-- /.search -->

                    <div>
                        <?=
                                $rate = 0.0;
                                $rate+= (($school['number_of_students'] == ""? 0 : $school['number_of_students']) >=20 ? 1 : 0);
                                $rate+= (($school['number_of_lights'] == ""? 0 : $school['number_of_lights']) >=14 ? 1 : 0);
                                $rate+= (($school['number_of_staff'] == ""? 0 : $school['number_of_staff']) >=5 ? 1 : 0);
                                $rate+= (($school['number_of_restrooms'] == ""? 0 : $school['number_of_restrooms']) >=10 ? 1 : 0);
                                $rate+= ($school['availability_of_playground'] == "Yes"? 1 :0);
                                $rate+= (($school['number_of_computer_used'] == ""? 0 : $school['number_of_computer_used']) >=3 ? 1 : 0);
                                $rate+= (($school['number_of_fans'] == ""? 0 : $school['number_of_fans']) >=10 ? 1 : 0);
                                $rate+= (($school['number_of_furniture_used'] == ""? 0 : $school['number_of_furniture_used']) >=10 ? 1 : 0);
                                $rate+= ($school['sanity_condition'] == "Good"? 1 :0);
                                $rate+= $school['number_of_dining']=="1"?1:0;
                                
                                ?>
                        <center><h1><?= $rate ?>/10</h1>
                            <h2>Rating</h2></center>
                    </div>
                    <center><a href="#"><button type="button" class="btn" style="font-size: xx-large; padding: 10px 10px 10px 10px !important; background-color: #2DCC70; color: white;">Claim School</button></a></center>
                    
                </aside>

                <div class="span9">
                    <div id="schools">
                        <?php
                        if ($school_count === 0) {
                            echo "Invalid School";
                        } else {
                            ?>
                            <div class="row-fluid">
                                <div class="span12"><h2>Description</h2><hr/></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">The school was established in <b><?= $school['years_of_establishment'] == "" ? 1985 : $school['years_of_establishment'] ?></b> and it is managed by the Private Unaided Management. It is located in rural area . It is located in block of <b><?= $school['district']; ?></b> district of <b>Tamil Nadu</b>. It is a <b><?= $school['category_of_school']; ?></b>. The school is co-educational and it has an attached pre-primary section. It has got <b><?= $school['number_of_staff']; ?></b> teachers. The school is residential in nature and is not using school building as a shift-school. During the previous academic year, the school functioned for 220 days. It had no academic inspection and was 9 times visited by the CRC Coordinator during the previous academic year. It was 9 times visited by the BRC Coordinator.   <b><?= $school['school_medium']; ?></b> is the medium of instructions in this school. This school is approachable by all weather road. In this school academic session starts in June. </div>

                            </div>
                            <div class="row-fluid">
                                <br /><br />
                                <div class="span12"><h3>Statistics</h3><hr/></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span6"><b>No of student's: </b><?= $school['number_of_students']; ?></div>
                                <div class="span6"><b>No of Teacher's: </b><?= $school['number_of_staff']; ?></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span6"><b>No of Boy's: </b><?= $school['number_of_boys'] == "" ? "NA" : $school['number_of_boys'] ?></div>
                                <div class="span6"><b>No of Girl's: </b><?= $school['number_of_girls'] == "" ? "NA" : $school['number_of_girls'] ?></div>
                            </div>
                            <div class="row-fluid">
                                <br /><br />
                                <div class="span12"><h3>Facilities</h3><hr/></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span6"><b>Playground: </b><?= $school['availability_of_playground'] == "" ? "NA" : $school['availability_of_playground'] ?></div>
                                <div class="span6"><b>Dining: </b><?= $school['availability_of_dining'] == "" ? "NA" : $school['availability_of_dining'] ?></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span6"><b>No of Indian Toilets's for boys: </b><?= $school['indian_toilet_boys'] == "" ? "NA" : $school['indian_toilet_boys'] ?></div>
                                <div class="span6"><b>No of Western Toilet's for boys: </b><?= $school['western_toilet_girls'] == "" ? "NA" : $school['western_toilet_girls'] ?></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span6"><b>No of Indian Toilets's for girls: </b><?= $school['indian_toilet_girls'] == "" ? "NA" : $school['indian_toilet_girls'] ?></div>
                                <div class="span6"><b>No of Western Toilet's for girls: </b><?= $school['western_toilet_girls'] == "" ? "NA" : $school['western_toilet_girls'] ?></div>
                            </div>
                        
                        <div class="row-fluid">
                                <br /><br />
                                <div class="span12"><h3>Nearby Places</h3><hr/></div>
                            </div>
                            <div class="row-fluid">
                                <div class="span6"><b>Hospital: </b><?= $school['availability_of_hospital'] == "" ? "NA" : $school['availability_of_hospital'] ?></div>
                                <div class="span6"><b>Fire Station: </b><?= $school['availability_of_fire_station'] == "" ? "NA" : $school['availability_of_fire_station'] ?></div>
                            </div>
                            
                            <?php
                        }
                        ?>
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
    </body>
</html>

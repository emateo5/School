<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Search | My School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/sl-slide.css">
        <link id="style" href="css/clean.css" rel="stylesheet" media="screen">
        <link id="style" href="css/jquery.dynatable.css" rel="stylesheet" media="screen">


        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
        <script src="js/jquery.columns-1.0.min.js"></script> 

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/jquery.dynatable.js"></script>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <style>
            th{
                background: black !important;
            }
        </style>
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
                        <h1>School Search</h1>
                    </div>
                    <div class="span6">
                        <ul class="breadcrumb pull-right">
                            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                            <li><a href="#">Pages</a> <span class="divider">/</span></li>
                            <li class="active">School Search</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title -->    
        <section class="title">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6" style="text-align: center;">
                        <h3>District</h3>
                        <select id="select_district" name="select_district">
                            <option value="">District</option>
                            <option>Coimbatore</option>
                            <option>Erode</option>
                        </select>
                    </div>
                   
                     <div class="span6" style="text-align: center;">
                         <h3>Sanity Condition</h3>
                        <select id="sanity_condition" name="sanity_condition">
                            <option value="">Sanity Condition</option>
                            <option>Good</option>
                            <option>Average</option>
                            <option>Poor</option>
                        </select>
                    </div>

                </div>
            </div>

        </section>


        <section id="dyna_search" class="container main">    
            <table id="my-final-table" class="table table-striped">
                <thead>
                <th>District</th>
                <th>School Name</th>
                <th>Students</th>
                <th>Boys</th>
                <th>Girls</th>
                <th>Staff</th>
                <th>Classrooms</th>
                <th>Seats</th>
                <th>Restrooms</th>
                <th>Hospitals</th>
                <th>Sanity Condition</th>
                </thead>
                <tbody>
                </tbody>
            </table>
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


        <script>






            var dynatable;
            $.ajax({
                url: '/data/data.json',
                dataType: 'json',
                success: function (json) {
                    dynatable = $('#my-final-table').dynatable({
                        dataset: {
                            records: json
                        }
                    }).data('dynatable');


                }
            });

            $('#sanity_condition').change(function () {
                var value = $(this).val();
                if (value === "") {
                    dynatable.queries.remove("sanityCondition");
                } else {
                    dynatable.queries.add("sanityCondition", value);
                }
                dynatable.process();
            });

            $('#select_district').change(function () {
                var value = $(this).val();
                if (value === "") {
                    dynatable.queries.remove("district");
                } else {
                    dynatable.queries.add("district", value);
                }
                dynatable.process();
            });






        </script>

    </body>
</html>

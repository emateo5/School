<?php

require_once '../config.php';
$email = $_POST['email'];
$password = $_POST['password'];

$result = mysql_query("SELECT * FROM users WHERE email='$email' and password='$password' and status = 'active' and type = 'school'");

$count = mysql_num_rows($result);

if ($count === 1) {
    session_start();
    $sid = session_id();
    $_SESSION['email'] = $email;
    $_SESSION['type'] = 'school';

    header('location:/school/index.php');
} else {
    ?>
    <script>
        alert("Your username and password did not match! Please try again.");
        location = "/index.html";
    </script>
    <?php

}




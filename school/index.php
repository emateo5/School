<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['type']) && $_SESSION['type'] === 'school') {
   echo $_SESSION['email'];
}


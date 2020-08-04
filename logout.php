<?php
session_start();
$_SESSION=array();
unset($_SESSION);
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="images/coke-logo.png">
    <title>Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style_bigbets.css" rel="stylesheet">

<body>
<script src="vendor/jquery/jquery.min.js?"></script>
<script src="js/common.js"></script>
<script>logoutNoAlert();</script>    
</body>
</html>
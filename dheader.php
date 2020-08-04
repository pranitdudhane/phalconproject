<?php session_start();  ?>
<?php 

$cookie_name="ins_token";
$token="";
if(!isset($_COOKIE[$cookie_name]))
{
    header('location:index');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
	

    <title>U Innosmart</title>
</head>

<body>
	<div class="loader-overlay" id="loader" >

    </div>
    <div class="">

        <!-- top header end -->
        <!-- menu section -->
        <div class="navbar navbar-expand-md bg-info" role="navigation">
            <!-- <a class="navbar-brand" href="#">Bootstrap 4 NavBar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <a href="#" class="menu-btn"></a>
                </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  >Home</a>
                       
                    </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  aria-expanded="false">My Account</a>
                       
                    </li>
                </ul>
                <div class="mt-2 mt-md-0 log-out">
                    <a href="logout" class="logoutt">
                        <span class="text-white pr-4">Logout</span><img src="images/logout.svg" class="logout-icon">
                    </a>
                </div>
            </div>
        </div>

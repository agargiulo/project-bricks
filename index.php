<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSH Project Bricks - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <link href="./css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require("./functions.php");
?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">CSH Project Bricks</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="submit.php">New Brick</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="span6 offset3">
            <table class="table table-bordered table-striped table-condensed">
                <caption>Most Recent Bricks</caption>
                <thead>
                    <tr>
                        <th>Project Name</th>
                        <th>CSH Username</th>
                        <th>Date Completed</th>
                        <th>Committee</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
<?php processRecentBricks();?>
                </tbody>
            </table>
        </div>
    </div>


</div> <!-- /container -->

</body>
</html>

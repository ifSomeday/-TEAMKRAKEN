<?php
include "lib/constants.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Class Planner</title>
        <meta charset="utf-8">
        <meta name="author" content="Team Kraken">
        <meta name="description" content="Class Planner">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="css/base.css" type="text/css" media="screen">

        <!--
        <?php
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // inlcude all libraries. 
        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%

        // print "<!-- require Database.php -->";

        // require_once(LIB_PATH . '/Database.php');

        // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%
        //
        // Set up database connection
        //
        // generally you dont need the admin on the web

        // print "<!-- make Database connections -->";
        // $dbUserName = get_current_user() . '_reader';
        // $whichPass = "r"; //flag for which one to use.
        // $dbName = DATABASE_NAME;

        // $thisDatabaseReader = new Database($dbUserName, $whichPass, $dbName);

        // $dbUserName = get_current_user() . '_writer';
        // $whichPass = "w";
        // $thisDatabaseWriter = new Database($dbUserName, $whichPass, $dbName);

        ?>	
    -->

    </head>
    <!-- **********************     Body section      ********************** -->
    <?php
    print '<body>';
    include "header.php";
    include "nav.php";
    ?>
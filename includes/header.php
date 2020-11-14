<?php
  //This includes the session file, This file contains code that starts/resumes a session
  //By havng it in the header file, it will be included on every page, allowing session capability to be used on every page across the website
  include_once 'includes/session.php'
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


    <link rel="stylesheet" href="css/site.css" />

    <title>Attendance - <?php echo $title ?> </title>
</head>

<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">IT Conference</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="viewrecords.php">View Attendees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
-->






<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="viewrecords.php">View Attendees</a>
                
                <!--
                <a class="nav-link" href="view.php">View Attendee</a>           
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                -->
            </div>
            <div class="navbar-nav ml-auto">
                <?php 

                  if(!isset($_SESSION['userid'])) {

                ?>
                
                <a class="nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>
                <!--<a class="nav-link" href="viewrecords.php">View Attendees</a>--> 
                        
                  <?php } else { ?>
                <a class="nav-item nav-link active" href="a"><span> Hello <?php echo $_SESSION['username']  ?> ! </span><span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="logout.php">Logout <span class="sr-only">(current)</span></a>     

                  <?php  }?>

            </div>
        </div>
        </nav>
    <div class="container"> 
   
        <br/>
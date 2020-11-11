<?php

    require_once 'db/conn.php';

        //Get values from post operation
        //checking to see if 
    if(isset($_POST['submit'])){
        //extracting values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['exampleInputEmail1'];
        $contact = $_POST['phone'];
        $speciality = $_POST['speciality']; 
    

        //Call Crud function
        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $speciality);


        //Redirect to viewrecords.php
        //page not redirecting
        if($result == true){
            header("Location: viewrecords.php");
        }else{
            //echo 'error';
            include ' includes/errormessage.php';
            header("Location: viewrecords.php");

        } 
    


    }else {
        //echo 'error';
        include ' includes/errormessage.php';
    }




?>
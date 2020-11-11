<?php

    require_once 'db/conn.php';
    if(!isset($_GET['id'])){
        //echo 'error';
        include ' includes/errormessage.php';
        header("Location: viewrecords.php");

    }else{
        //get id value
        $id =$_GET['id'];

        //call delet function
        $result = $crud->deleteAttendee($id);
        //redirect to list
        if($result)
        {
            include ' includes/successmessage.php';
            header("Location: viewrecords.php  ");
            
        }else{
            //echo 'error';
            include ' includes/errormessage.php';
        }

    }






?>
<!--header-->
<?php 

    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    
    //checking to see if 
    if(isset($_POST['submit'])){
        //extracting values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['exampleInputEmail1'];
        $contact = $_POST['phone'];
        $speciality = $_POST['speciality']; 
        
        //Call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $speciality);
       
        if($isSuccess){

            //echo 'Registration Successful'; Not displaying
            //echo '<h1 class="text-center text-success">Registration Successful!!!</h1>';
            include 'includes/successmessage.php';
            
        } else{

            //echo  '<h1 class="text-center text-danger">Registration unsuccessful</h1>';
            include 'includes/errormessage.php';
        }

    }


?>

<!-- H1 tag for Title page -->
<br />
<!--<h1 class="text-center text-success">Registration Successful</h1>-->
<br />
<br />


<!-- Bootstrap Card Tiles component --> 
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];   ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php  echo $_POST['speciality'];  ?></h6>
        <p class="card-text">Date of Birth: <?php    echo $_POST['dob']; ?> </p>
        <p class="card-text">Email Address: <?php     echo $_POST['exampleInputEmail1']; ?> </p>
        <p class="card-text">Phone Number: <?php    echo $_POST['phone']; ?> </p>
      

    </div>
</div>
 <!--end of Bootstrap Card Tiles component -->

<!--This Prints out information passed to the action page using the GET method -->
<!-- Bootstrap Card Tiles component 
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title"><?php //echo $_GET['firstname'] . ' ' . $_GET['lastname'];   ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php  //echo $_GET['speciality'];  ?></h6>
        <p class="card-text">Date of Birth: <?php    //echo $_GET['dob']; ?> </p>
        <p class="card-text">Email Address: <?php    // echo $_GET['exampleInputEmail1']; ?> </p>
        <p class="card-text">Phone Number: <?php    //echo $_GET['phone']; ?> </p>

         Links not being used
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
        

    </div>
</div>
 end of Bootstrap Card Tiles component -->


<br />
<br />
<a href="index.php" class="btn btn-info">Home</a> 
<a href="viewrecords.php" class="btn btn-info">Back to List</a> 


<!-- php tags to print out information stored in variables -->
<?php 
    /*echo $_GET['firstname'];
     echo '<br />';
     echo $_GET['lastname'];
     echo '<br />';
     echo $_GET['dob'];
     echo '<br />';
     echo $_GET['speciality'];
     echo '<br />';
     echo $_GET['exampleInputEmail1'];
     echo '<br />';
     echo $_GET['phone'];
     echo '<br />';
    */

?>
<!-- end of php tags-->


<br />
<br />
<br />
<br />

<!--footer-->
<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>
<?php 

    $title = 'View Records';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';


    //Get all attendees by id
    
    if(!isset($_GET['id'])){
       //not displaying
        //echo "<h1 class='text-danger'>Please verify information and try again </h1>";    
        include ' includes/errormessage.php';
       
    } else{
        $id = $_GET['id'];
        $results = $crud->getAttendeeDetails($id);
       
    


?>



<!-- Bootstrap Card Tiles component -->
<div class="card" style="width: 25rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $results['firstname'] . ' ' . $results['lastname'];   ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php  echo $results['name'];  ?></h6>
        <p class="card-text">Date of Birth: <?php    echo $results['dateofbirth']; ?> </p>
        <p class="card-text">Email Address: <?php     echo $results['emailaddress']; ?> </p>
        <p class="card-text">Phone Number: <?php    echo $results['contactnumber']; ?> </p>


    </div>
</div>
<!--end of Bootstrap Card Tiles component -->


<br/>
<a href="index.php" class="btn btn-primary">Home</a> 
<a href="viewrecords.php" class="btn btn-info">Back to List</a> 
<a href="edit.php?id=<?php echo $results['attendee_id'] ?>" class="btn btn-warning">Edit</a> 
<a onclick="return confirm('Are you sure you want to delete this record');" 
href="delete.php?id=<?php echo $results['attendee_id'] ?>" class="btn btn-danger">Delete</a>



    <?php } ?>





<br />
<br />
<br />
<br />
<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>
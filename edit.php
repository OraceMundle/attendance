<?php 

    $title = 'Edit Record';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getSpecialities();

    if(!isset($_GET['id'])){

        //echo 'error';
        include ' includes/errormessage.php';
        header("Location: viewrecords.php");

    }else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);

?>


<!-- <h1><?php echo $title ?></h1> -->

<h1 class="text-center">Edit Record</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->
<form method="post" action="editpost.php">
    <input type="hidden"  name ="id" value="<?php echo $attendee['attendee_id'] ?>" />
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname"
            name="firstname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="lasttname">Last Name</label>
        <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname"
            name="lastname" aria-describedby="textHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob"
            aria-describedby="dateHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="speciality">Area of Speciality</label>




        <!-- insert drop down box selection -->
        <select class="form-control" id="speciality" name="speciality">
            <?php  while($r = $results->fetch(PDO::FETCH_ASSOC)) {    ?>

            <option value="<?php echo $r['speciality_id'] ?>"
                <?php if($r['speciality_id'] == $attendee['speciality_id']) echo 'selected' ?>><?php 
                echo $r['name']; ?>


            </option>



            <?php } ?>

            <!--
            <option value="1">Database Admin</option>
            <option>Software Developer</option>
            <option>Web Adminstrator</option>
            <option>Other</option>
            <option>5</option>-->
        </select>

        <!--<input type="text" class="form-control" id="speciality" aria-describedby="text">-->
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" value="<?php echo $attendee['emailaddress'] ?>" id="exampleInputEmail1"
            name="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" value="<?php echo $attendee['contactnumber'] ?>" id="phone" name="phone"
            aria-describedby="phoneHelp">
        <small id="phoneHelp" name="phoneHelp" class="form-text text-muted">We'll never share your phone number with
            anyone else.</small>
    </div>
    <!--
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    -->
    <br />
    <button type="submit" name="submit" class="btn btn-success ">Save Changes</button>
    <a href="index.php" class="btn btn-primary">Home</a> 
    <a href="viewrecords.php" class="btn btn-info">Back to List</a> 
</form>


<?php } ?>


<br />
<br />
<br />
<br />


<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>
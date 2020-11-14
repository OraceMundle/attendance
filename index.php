<?php 

    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    $results = $crud->getSpecialities();
?>

<!-- 
        - First Name
        - Last Name
        - Date of Birth (Use DatePicker)
        - Speciality (Database Admin, Software Developer, Web Administrater, Other)
        - Email Address
        - Contact Number
    -->


<!-- <h1><?php echo $title ?></h1> -->

<h1 class="text-center">Registration for IT Conference</h1>

<!--<form method="get" action="success.php">  Snippet of code uses the get action method -->
<!-- form utilizing the post method -->    
<form method="post" action="success.php">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname" aria-describedby="text">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="lasttname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname" aria-describedby="textHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob" aria-describedby="dateHelp">
        <!--<small id="firstname" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
        <label for="speciality">Area of Speciality</label>
        
        
        
        
        <!-- insert drop down box selection -->
        <select class="form-control" id="speciality" name="speciality">
           <?php  while($r = $results->fetch(PDO::FETCH_ASSOC)) {    ?>

            <option value="<?php echo $r['speciality_id'] ?>"><?php echo $r['name']; ?> </option>  



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
        <input required type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" name="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
    </div>
    <br/>
    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id ="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload (Optional)</small>
        
    </div>
   
    <br/>
    <br/>
    <br/>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
</form>

<br/>
<br/>
<br/>
<br/>


<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>
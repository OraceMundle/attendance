<?php 

    $title = 'User Login';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';

    //if data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$password);
        
        //calling user object
        $result = $userInfo->getUser($username,$new_password);

        if(!$result){

            echo '<div class="alert-danger"> Username or Password is incorrect! Please try again. </div>';
            include ' includes/errormessage.php';

        }else{

            $_SESSION['username'] = $username;
            $_SESSION['id'] = $result['id'];
            header("Location: viewrecords.php");
        }


    }

?>

<h1 class="text-center"><?php echo $title ?> </h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table class="table table-sm">
        <tr>

            <!--<td><label for="username">Username: * </label></td>-->
            <td><input type="text" name="username" class="form-control" id="username" value="
            <?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
            </td>
            <td><label for="username">Username: * </label></td>

            <!--
            <?php //if(empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>
           // $username_error</p>";   ?>
            </td> -->

        </tr>
        <tr>

            <td><input type="password" name="password" class="form-control" id="password">
            <td><label for="password">Password: * </label></td>
            <!--
                <?php //if(empty($password) && isset($password_error)) echo "<p class='text-danger'>
           // $password_error</p>";  ?>

            -->

            </td>
        </tr>

    </table><br /><br />
    <input type="submit" value="Login" class="btn btn-primary "><br />
    <a href="a">Forget Password <a />
        <!--
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
-->
</form><br /><br /><br />


<h6 class="text-center"><?php require_once 'includes/footer.php'; ?></h6>
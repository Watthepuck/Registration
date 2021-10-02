<!doctype html>
<html lang="en">
<?php include('db1.php'); ?>

<?php 

ini_set("session.cookie_httponly", True);
session_start(); 

?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="row">
    <div class="col-md-4"> 
    </div>
    <div class="col-md-4"> 
    <form method="POST" action="">
        <div>
            <div class="col">
                <label for="inputFname4">First Name</label>
                <input type="text" class="form-control" placeholder="First name" name="fname">
            </div>
            <div class="col">
                <label for="inputLname4">Last Name</label>
                <input type="text" class="form-control" placeholder="Last name" name="lname">
            </div>
        </div>
        <div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pword">
            </div>
        </div>

        <button type="submit" name="save" class="btn btn-primary">Register</button>
    </form>
    </div>
    <div class="col-md-4"> 
    </div>
    </div>

    <?php

  $mydb=new db();

  if(isset($_POST['save'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];

    $insert = $mydb->save_data($fname, $lname, $email, $pword);

    if($insert){
      echo "<br>Data Saved to the Database";
    }else{
      echo "Failed to save data";
    }
  }


?>

   
</body>
</html>

<?php session_start();  ?>

<?php include 'includes/db.php';  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Log in</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

          <h2 class="text-center">Admin Login</h2>
            <div class="login">
                <form class="form-horizontal" method="post" action="login.php">
                  <div class="form-group">
                    <label for="inputEmail3" class="control-label">Email</label>
                    <input name="admin_name" type="text" class="form-control" id="inputEmail3" placeholder="Admin Name">
                  </div>
          
                  <div class="form-group">
                    <label for="inputPassword3" class="control-label">Password</label>
                      <input name="admin_pass" type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
          
                  <div class="form-group">
                      <button name="submit" type="submit" class="btn btn-default">Sign in</button>
                  </div>
                </form>
            </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    <h2 class="text-center success-msg admin-logged"><?php echo @$_GET['logout']; ?></h2>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<?php 
  

if (isset($_POST['submit'])) {
   $admin_name = $_POST['admin_name'];
   $admin_pass = $_POST['admin_pass'];




  $query = "SELECT * FROM admin_login WHERE user_name='$admin_name' AND user_pass='$admin_pass'";

  $run = mysqli_query($conn, $query);

  if (mysqli_num_rows($run) > 0) {

         $_SESSION['admin_name'] = $admin_name;

        echo "<script>window.open('admin_panel.php?logged=You logged in Successfully!','_self')</script>";
  } else {
    echo "<script>alert('username or password is invalid')</script>";
  }

}


?>


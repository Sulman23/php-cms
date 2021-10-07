<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My CMS</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
      
      <header class="row">
        <div class="col-md-12">
          <div class="container-fluid">
                  
            <h1 class="site-title">
              <a href="index.php"><span class="glyphicon glyphicon-leaf logo"></span>My CMS</a>
            </h1><!-- end logo -->
        
            <nav>
              <ul class="nav nav-pills">
                <li role="presentation" class="text-center"><a href="index.php">Home</a></li>
                <?php 
    
                  $query = "select * from menus";
                  $run = mysqli_query($conn, $query);
    
                  while ($row=mysqli_fetch_array($run)) {
                    $m_title = $row['1'];
                    echo "<li role='presentation' class='text-center'><a href='pages.php?pages=$m_title'>$m_title</a></li>";
                  }
    
                ?>
                
              </ul>
            </nav><!-- end nav -->
          </div><!-- end container -->
        </div><!-- end col-md-12 -->
      </header><!-- end header -->

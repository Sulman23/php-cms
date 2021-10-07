<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

	<?php

	$page = $_GET['pages'];

	$query = "select * from pages where p_title = '$page'";
	$run = mysqli_query($conn, $query);

	while ($row=mysqli_fetch_assoc($run)) {
		echo "<h1>". $row['p_title'] . "</h1>" . "<br/>" . $row['p_desc'];
	}

	?>

    </div><!-- end col-8 -->

    <div class="col-md-4">
        
        <?php include 'includes/sidebar.php'; ?>    

    </div><!-- end col-md-4 -->
  </div><!-- end row -->
</div><!-- end container -->
  
 

<?php include 'includes/footer.php'; ?>

   
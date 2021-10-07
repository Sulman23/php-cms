<?php include 'db.php'; ?>

<h2 class="text-center page-heading">Insert new menu</h2>

<form method="post" action="">
  <div class="form-group">
    <label for="enterName">Enter Menu Name</label>
    <input type="text" name="menu_name" class="form-control" id="enterName" placeholder="Enter Menu Name">
  </div>
  
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

</html>

<?php 
if (isset($_POST['submit'])) {
	
	$menu_name = $_POST['menu_name'];
	

	$query = "INSERT INTO menus (m_title) VALUES ('$menu_name')";

	if (mysqli_query($conn, $query)) {
		echo "<script>window.open('admin_panel.php?inserted=A new menu has been inserted..', '_self')</script>";
	}
}

?>
<?php include 'db.php'; ?>

<h2 class="text-center page-heading">Insert new Page</h2>

<form method="post" action="">
  <div class="form-group">
    <label for="enterTitle">Enter Title</label>
    <input type="text" name="page_title" class="form-control" id="enterTitle" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="enterContent">Enter Content</label>
    <textarea id="enterContent" class="form-control" rows="10" name="page_content"></textarea>
  </div>
  
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>

</html>

<?php 
if (isset($_POST['submit'])) {
	
	$page_title = $_POST['page_title'];
	$page_content = $_POST['page_content'];

	$query = "INSERT INTO pages (p_title, p_desc) VALUES ('$page_title','$page_content')";

	if (mysqli_query($conn, $query)) {
		echo "<script>window.open('admin_panel.php?inserted=A new page has been inserted..', '_self')</script>";
	}
}

?>
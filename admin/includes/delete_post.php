<?php 
	
	include 'db.php'; 

	$delete_post = $_GET['del_post'];

	$query = "DELETE FROM posts WHERE post_id= '$delete_post'";

	if (mysqli_query($conn, $query)) {
	 	echo "<script>window.open('../admin_panel.php?deleted=A post has been deleted....!', '_self')</script>";

	 } 

?>
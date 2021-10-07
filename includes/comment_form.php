<?php include 'db.php'; ?>

<?php 
	if (isset($_GET['post'])) {
		$post_id = $_GET['post'];

		$get_posts = "select * from posts where post_id='$post_id'";

		$run_posts = mysqli_query($conn, $get_posts);

		$row = mysqli_fetch_array($run_posts);

		$post_new_id = $row['post_id'];

	}
?>

<?php 

$get_comments = "select * from comments where post_id='$post_new_id' AND status='uprove'";

$run_comments = mysqli_query($conn, $get_comments);

$count = mysqli_num_rows($run_comments);

echo "<h3 class='total-comments'>". "TOTAL COMMENTS: " . "[". $count . "]" . "</h3>";


?>







<?php

	$get_comments = "select * from comments where post_id='$post_new_id' AND status='uprove'";

	$run_comments = mysqli_query($conn, $get_comments);

	while ($row_comments=mysqli_fetch_array($run_comments)) {
		$comment_name = $row_comments['comment_name'];
		$comment_text = $row_comments['comment_text'];

		echo "
		<h3 class='comment-name'>$comment_name Says:</h3>
		<p class='comment-msg'>$comment_text</p>

		";
	}

?>
<!-- comment form is here -->

<h2>Create Comment</h2>

<!-- Form Start -->

<form action="single.php?post=<?php echo $post_new_id; ?>" method="POST" id="commentform">

<div class="form-group">
    <input name="comment_name" type="text" class="form-control" placeholder="Name" required>
</div>
<div class="form-group">
    <input name="comment_email" type = "email" class="form-control" placeholder = "Email" >
</div>
<div class="form-group">
    <textarea name="comment" class="form-control" rows="8" placeholder = "Message" ></textarea>
</div>
    <button name="submit" type="submit" class="btn btn-default">Submit</button>
</form>

<?php 
	if (isset($_POST['submit'])) {

		$post_com_id = $post_new_id;

		$comment_name = $_POST['comment_name'];
		$comment_email = $_POST['comment_email'];
		$comment = $_POST['comment'];
		$status = "unuprove";

		if ($comment_name=='' OR $comment_email=='' OR $comment=='') {
			echo "<script>alert('all fields are required')</script>";
			echo "<script>window.open('single.php?post=$post_id')</script>";
			exit();
		} else {

			$query_comment = "insert into comments (post_id, comment_name, comment_email, comment_text, status) values ('$post_com_id','$comment_name','$comment_email','$comment','$status')";

			$run_query = mysqli_query($conn, $query_comment);

			
			echo "<script>alert('Your comment will be publised after aproval')</script>";
			echo "<script>window.open('single.php?post=$post_id')</script>";

			
		}

	}


?>
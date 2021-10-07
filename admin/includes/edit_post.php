<?php include 'db.php'; ?>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>


    <?php 
    	if (isset($_GET['edit_post'])) {
    		
    		$edit_id = $_GET['edit_post'];

    		$select_post = "select * from posts where post_id='$edit_id'";

    		$run_query = mysqli_query($conn, $select_post);

    		while ($row_post=mysqli_fetch_array($run_query)) {

    			$post_id = $row_post['post_id'];
    			$title = $row_post['post_title'];
    			$post_cat = $row_post['category_id'];
    			$author = $row_post['post_author'];
    			$keywords = $row_post['post_keywords'];
    			$image = $row_post['post_image'];
    			$content = $row_post['post_content'];
    			
    		}
    	}

    ?>

<h2 class="text-center page-heading">edit your post</h2>
    
      <form class="form-horizontal" method="post" acition="insert_post.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputTitle" class="col-sm-2 control-label">Post Title</label>
          <div class="col-sm-10">
            <input name="post-title" type="text" class="form-control" id="inputTitle" placeholder="Post Title" value="<?php echo $title; ?>">
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputSelect" class="col-sm-2 control-label">Post Category</label>
          <div class="col-sm-10">
            <select name="post-category" class="form-control">
              
              <?php 
              $get_cats = "select * from category where cat_id='$post_cat'";

              $run_cats = mysqli_query($conn, $get_cats);

              while ($cats_row=mysqli_fetch_array($run_cats)) {
                $cat_id = $cats_row['cat_id'];
                $cat_title = $cats_row['cat_title'];

                echo "<option value='$cat_id'>$cat_title</option>"; 

                $get_more_cats = "select * from category";

                $run_more_cats = mysqli_query($conn, $get_more_cats);

                while ($row_more_cats= mysqli_fetch_array($run_more_cats)) {
                       $cat_id = $row_more_cats['cat_id'];
                       $cat_title = $row_more_cats['cat_title'];

                        echo "<option value='$cat_id'>$cat_title</option>";
                }             
            }

              ?>

            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputAuthor" class="col-sm-2 control-label">Post Author</label>
          <div class="col-sm-10">
            <input name="post-author" type="text" class="form-control" id="inputAuthor" placeholder="Post Author" value="<?php echo $author; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputKeywords" class="col-sm-2 control-label">Post Keywords</label>
          <div class="col-sm-10">
            <input name="post-keywords" type="text" class="form-control" id="inputKeywords" placeholder="Post Keywords" value="<?php echo $keywords; ?>">
          </div>
        </div>

        <div class="form-group">
          <label for="inputImage" class="col-sm-2 control-label">Post Image</label>
          <div class="col-sm-10">
            <input name="post-image" type="file" class="form-control" id="inputImage">
            <img class="edit-image" src="post_images/<?php echo $image; ?>" width="80px" height="80px">
          </div>
        </div>

        <div class="form-group">
          <label for="inputContent" class="col-sm-2 control-label">Post Content</label>
          <div class="col-sm-10">
            <textarea name="post-content" id="inputContent" class="form-control" rows="8">
            	<?php echo $content; ?>
            </textarea>
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button name="update" type="submit" class="btn btn-default">Update</button>
          </div>
        </div>
      </form>

    


<?php
  if (isset($_POST['update'])) {

  	 $update_id = $post_id;


     $post_title = $_POST['post-title'];
     $post_date = date('m-d-y');
     $post_cat_edit = $_POST['post-category'];
     $post_author = $_POST['post-author'];
     $post_keywords = $_POST['post-keywords'];
     $post_image = $_FILES['post-image']['name'];
     $post_image_tmp = $_FILES['post-image']['tmp_name'];
     $post_content = $_POST['post-content'];


      move_uploaded_file($post_image_tmp, "post_images/$post_image");

	    $update_post = "UPDATE posts SET category_id='$post_cat_edit', post_title='$post_title', post_date='$post_date', post_author='$post_author', post_keywords='$post_keywords', post_image='$post_image', post_content='$post_content' WHERE post_id='$update_id'";

      $run_update = mysqli_query($conn, $update_post);

      if ($run_update) {
        echo "<script>alert('Post has been Updated')</script>";
        echo "<script>window.open('admin_panel.php','_self')</script>";
      }


    
  }

?>
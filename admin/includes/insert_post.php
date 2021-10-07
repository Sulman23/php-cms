<?php include 'db.php'; ?>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

    <h2 class="text-center page-heading">Insert new Post</h2>
      <form class="form-horizontal" method="post" acition="#" enctype="multipart/form-data">
        <div class="form-group">
          <label for="inputTitle" class="col-sm-2 control-label">Post Title</label>
          <div class="col-sm-10">
            <input name="post-title" type="text" class="form-control" id="inputTitle" placeholder="Post Title">
          </div>
        </div>
        
        <div class="form-group">
          <label for="inputSelect" class="col-sm-2 control-label">Post Category</label>
          <div class="col-sm-10">
            <select name="post-category" class="form-control">
              <option>Select Category</option>
              <?php 
              $get_cats = "select * from category";

              $run_cats = mysqli_query($conn, $get_cats);

              while ($cats_row=mysqli_fetch_array($run_cats)) {
                $cat_id = $cats_row['cat_id'];
                $cat_title = $cats_row['cat_title'];

                echo "<option value='$cat_id'>$cat_title</option>";              }

              ?>

            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="inputAuthor" class="col-sm-2 control-label">Post Author</label>
          <div class="col-sm-10">
            <input name="post-author" type="text" class="form-control" id="inputAuthor" placeholder="Post Author">
          </div>
        </div>

        <div class="form-group">
          <label for="inputKeywords" class="col-sm-2 control-label">Post Keywords</label>
          <div class="col-sm-10">
            <input name="post-keywords" type="text" class="form-control" id="inputKeywords" placeholder="Post Keywords">
          </div>
        </div>

        <div class="form-group">
          <label for="inputImage" class="col-sm-2 control-label">Post Image</label>
          <div class="col-sm-10">
            <input name="post-image" type="file" class="form-control" id="inputImage">
          </div>
        </div>

        <div class="form-group">
          <label for="inputContent" class="col-sm-2 control-label">Post Content</label>
          <div class="col-sm-10">
            <textarea name="post-content" id="inputContent" class="form-control" rows="8"></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button name="publish" type="submit" class="btn btn-default">Publish New</button>
          </div>
        </div>
      </form>

    


<?php
  if (isset($_POST['publish'])) {
     $post_title = $_POST['post-title'];
     $post_date = date('m-d-y');
     $post_cat = $_POST['post-category'];
     $post_author = $_POST['post-author'];
     $post_keywords = $_POST['post-keywords'];
     $post_image = $_FILES['post-image']['name'];
     $post_image_tmp = $_FILES['post-image']['tmp_name'];
     $post_content = $_POST['post-content'];

     if ($post_title=='' OR $post_cat=='NULL' OR $post_author=='' OR $post_keywords=='' OR $post_image=='' OR $post_content=='') {
       echo "<script>alert('All fields are required')</script>";
       exit();
     }

     else {

      move_uploaded_file($post_image_tmp, "post_images/$post_image");

      $insert_post = "insert into posts (category_id,post_title,post_date, post_author, post_keywords, post_image, post_content) Values ('$post_cat','$post_title','$post_date',' $post_author','$post_keywords','$post_image','$post_content')";
      
      $run_post = mysqli_query($conn, $insert_post);

      if ($run_post) {
        echo "<script>alert('Post has been published')</script>";
        echo "<script>window.open('admin_panel.php','_self')</script>";
      }


    }
  }

?>
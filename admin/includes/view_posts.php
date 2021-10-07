<?php include 'db.php';  ?> 
              
<h2 class="text-center page-heading">All Posts here</h2>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
    <tr>
      <th class="text-center">Post #</th>
      <th class="th-width text-center">Post Title</th>
      <th class="th-width text-center">Post Author</th>
      <th class="th-width text-center">Post image</th>
      <th class="th-width text-center">Comments</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
    </thead>
   
    <tbody>

    <tr>
       <?php 
        
        $get_posts = "SELECT * FROM posts";
        $run_posts = mysqli_query($conn, $get_posts);

        $i=1;

        while ($row_posts=mysqli_fetch_array($run_posts)) {
         $post_id = $row_posts['post_id'];
         $post_title = $row_posts['post_title'];
         $post_author = $row_posts['post_author'];
         $post_image = $row_posts['post_image'];
         //$post_comment = $row_posts['post_comment'];
         
        
      ?>



      <td class="text-center"><?php echo $i++; ?></td>
      <td class="text-center"><?php echo $post_title; ?></td>
      <td class="text-center"><?php echo $post_author; ?></td>
      <td class="text-center"><img src="post_images/<?php echo $post_image; ?>" width="50px" height="50px"></td>
      <td class="text-center">
      <?php 
        $get_comments = "SELECT * FROM comments WHERE post_id='$post_id'";

        $run_comments = mysqli_query($conn, $get_comments);

        $count = mysqli_num_rows($run_comments);

        echo $count;
      ?>
      </td>
      <td class="text-center"><a href="admin_panel.php?edit_post=<?php echo $post_id; ?>">Edit</a></td>
      <td class="text-center"><a href="../admin/includes/delete_post.php?del_post=<?php echo $post_id; ?>">Delete</a></td>
    </tr>

     <?php } ?>
    </tbody>
  </table>
</div>
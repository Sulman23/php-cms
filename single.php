<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<div class="container">
    <div id='single-post' class="row">
        <!-- Blog posts Column -->
        <div class="col-md-8">

            <?php 
            if (isset($_GET['post'])) {
                
                $post_id = $_GET['post'];

                $get_posts = "select * from posts where post_id='$post_id'";

                $run_posts = mysqli_query($conn, $get_posts);

                while ($row_posts = mysqli_fetch_array($run_posts)) {
                   
                    $post_title = $row_posts['post_title'];
                    $post_date = $row_posts['post_date'];
                    $post_author = $row_posts['post_author'];
                    $post_image = $row_posts['post_image'];
                    $post_content = $row_posts['post_content'];

                    echo "
                        <h2 class='post-title'>$post_title</h2>
                        
                        <hr>
                        <p>
                            <span class='glyphicon glyphicon-user'>$post_author</span>
                            <span class='glyphicon glyphicon-time span-date'></span>$post_date</p>
                        <hr>
                        <img class='img-responsive' src='admin/post_images/$post_image' alt='image'>
                   
                        <p>$post_content</p>
            <hr>            
            

                    ";
                }

             }

            ?>


            <?php include 'includes/comment_form.php'; ?>

        </div><!-- end col-md-8 -->

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            
            <?php include 'includes/sidebar.php'; ?>

        </div><!-- end col-md-4 -->

        

    </div><!-- end row -->
</div><!-- end container -->


<?php include 'includes/footer.php'; ?>



<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<div class="container">
    <div class="row">
        <!-- Blog posts Column -->
        <div class="col-md-8">

            <?php 

    			if (isset($_GET['search'])) {

    				$get_query = $_GET['search_query'];
    				
                    if ($get_query=='') {
                        echo "<script>alert('Please write a keyword')</script>";
                        echo "<script>window.open('index.php','_self')</script>";
                        exit();
                    }
    		

                        $get_posts = "select * from posts where post_keywords like '%$get_query%'";

                        $run_posts = mysqli_query($conn, $get_posts);

                        while ($row_posts = mysqli_fetch_array($run_posts)) {
                            $post_id = $row_posts['post_id'];
                            $post_title = $row_posts['post_title'];
                            $post_date = $row_posts['post_date'];
                            $post_author = $row_posts['post_author'];
                            $post_image = $row_posts['post_image'];
                            $post_content = substr($row_posts['post_content'], 0, 200);

                            echo "
                            <div id='post' class='row'>

                                <h2 class='post-title'>
                                     <a href='single.php?post=$post_id'>$post_title</a>
                                </h2>

                                <div class='col-md-3'>
                                    <img class='img-responsive' src='admin/post_images/$post_image' alt='image'>
                                </div>

                                <div class='col-md-9'>
                                    <p>
                                        <span class='glyphicon glyphicon-user'>$post_author</span>
                                        <span class='glyphicon glyphicon-time span-date'></span>$post_date</p>
                                    <hr>
                                    
                                    <p>$post_content</p>
                                    <a class='btn btn-default' href='single.php?post=$post_id'>Read More</a>
                                </div>
                            </div>
                            <hr class='special-hr'>            
     

                            ";
                        }

                    }

                    ?>
            

                
        </div>
                
                
            

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            
            <?php include 'includes/sidebar.php'; ?>

        </div><!-- end col-md-4 -->

    </div><!-- end row -->
</div><!-- end container -->


<?php include 'includes/footer.php'; ?>

   
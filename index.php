<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<div class="container">
    <div class="row">
        <!-- Blog posts Column -->
        <div class="col-md-8">

            <?php 

                if (isset($_GET['cat'])) {
                    include 'includes/cats_post.php'; 
                } else {
                    include 'includes/post_content.php'; 
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

   
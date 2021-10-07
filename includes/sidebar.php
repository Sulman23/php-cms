<?php include 'db.php'; ?>

<!-- Blog Search -->
            <div class="well">
                <h4>Blog Search</h4>
                <form method="get" action="results.php" enctype="multipart/form-data">
                    <div class="input-group">
                        <input name="search_query" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="search" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </form >
            </div><!-- end search -->

            <!-- Blog Categories Well -->
            <div id="category" class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="list-group">

                            <?php 

                                $get_cats = "select * from category";
                                $run_cats = mysqli_query($conn, $get_cats);

                                while ($cats_row=mysqli_fetch_array($run_cats)) {
                                    $cat_id = $cats_row['cat_id'];
                                    $cat_title = $cats_row['cat_title'];

                                    echo "<h5><a href='index.php?cat=$cat_id'><li class='list-group-item'>$cat_title</li></a><h5>";
                                }


                            ?>

                        </ul>
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>

            <!-- Side recent post Well -->
            <div id='recent-post' class="well">
                <h4>Recent Posts</h4>

                <?php 

                    $get_posts = "select * from posts order by 1 DESC LIMIT 0, 5";

                    $run_posts = mysqli_query($conn, $get_posts);

                    while ($row_posts = mysqli_fetch_array($run_posts)) {
                        $post_id = $row_posts['post_id'];
                        $post_title = $row_posts['post_title'];
                        $post_image = $row_posts['post_image'];
                        $post_content = substr($row_posts['post_content'], 0, 50);

                        echo "
                        <div class='row'>
                            <div class='col-md-4'>
                                <img src='admin/post_images/$post_image'>
                            </div>
                            <div class='col-md-8'>
                                <h5><a href='single.php?post=$post_id'>$post_title</a></h5>
                                <p>$post_content</p>
                            </div>
                        </div>
                              
                

                        ";
                    }

                ?>
            </div>
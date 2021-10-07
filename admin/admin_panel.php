<?php 
  session_start();

  if (!isset($_SESSION['admin_name'])) {
      header("location: login.php");
  } else {
?>

<?php include 'includes/db.php';  ?> 

<?php include 'includes/header.php';  ?>
  
  <div id="main-container" class='container'>
    <div class="row" id="main-row">
      <div class="col-sm-3 sidebar">

        <?php include 'includes/navigation.php';  ?>
            
      </div><!-- end col-md-3 -->


      <div class="col-sm-9">

      <h2 class="text-center success-msg admin-logged"><?php echo @$_GET['deleted']; ?></h2>
      <h2 class="text-center admin-logged"><?php echo @$_GET['inserted']; ?></h2>
      <h2 class="text-center admin-logged">
        <?php echo @$_GET['logged']; ?>
        <?php echo $_SESSION['admin_name']; ?>
      </h2>

      <?php 

        if (isset($_GET['insert_page'])) {

          include 'includes/insert_page.php';

        } elseif (isset($_GET['view_page'])) {

          include 'includes/view_pages.php';

        } elseif (isset($_GET['view_menu'])) {
          
          include 'includes/view_menus.php';

        } elseif (isset($_GET['insert_menu'])) {

          include 'includes/insert_menu.php';

        } elseif (isset($_GET['insert_post'])) {

          include 'includes/insert_post.php';

        } elseif (isset($_GET['edit_post'])) {

          include 'includes/edit_post.php';

        } else {
          
          include 'includes/view_posts.php'; 
        }

        

      ?>
 
      
      </div><!-- end col-md-9 -->
    </div><!-- end row -->
  </div><!-- end container main-content -->

<?php include 'includes/footer.php';  ?>

      
<?php } ?>
      
    

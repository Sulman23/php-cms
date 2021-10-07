<?php include 'db.php'; ?>
              
<h2 class="text-center page-heading">All Pages here</h2>
<div class="table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
    <tr>
      <th class="text-center">Page #</th>
      <th class="th-width text-center">Page Title</th>
      <th class="text-center" colspan="2">Page Description</th>
      <th>Delete</th>
    </tr>
    </thead>
   
    <tbody>

    <tr>
       <?php 
        $query = "SELECT * FROM pages";
        $run = mysqli_query($conn, $query);

        $i=1;

        while ($row=mysqli_fetch_array($run)) {
         $p_id = $row[0];
         $p_title = $row[1];
         $p_desc = substr($row[2], 0, 150);
        
      ?>



      <td class="text-center"><?php echo $i++; ?></td>
      <td class="text-center"><?php echo $p_title; ?></td>
      <td colspan="2"><?php echo $p_desc; ?></td>
      <td class="text-center"><a href="delete_page.php?del_page=<?php echo $p_id; ?>">Delete</a></td>
    </tr>

     <?php } ?>
    </tbody>
  </table>
</div>
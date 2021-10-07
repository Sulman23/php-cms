<?php include 'db.php'; ?>

<h2 class="text-center page-heading">view All Menus</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead>
        <tr>
          <th class="text-center">Menu no</th>
          <th class="text-center">Menu Title</th>
          <th class="text-center">Delete</th>
        </tr>
        </thead>
        <tbody>

          <tr>
          <?php 
            $query = "SELECT * FROM menus";
            $run = mysqli_query($conn, $query);

            $i=1;

            while ($row=mysqli_fetch_array($run)) {
             $m_id = $row[0];
             $m_title = $row[1];
             
          
          ?>
     
          <td class="text-center"><?php echo $i++; ?></td>
          <td class="text-center"><?php echo $m_title; ?></td>
          <td class="text-center"><a href="delete_menu.php?del_menu=<?php echo $m_id; ?>">Delete</a></td>
        </tr>
        <?php } ?>


        </tbody>
      </table>
    </div>
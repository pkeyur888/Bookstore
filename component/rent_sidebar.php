<html>
<body>
<div id="sidebar" class="span3">


  <ul id="sideManu" class="nav nav-tabs nav-stacked">
    <li class="subMenu open"><a> Category</a>
      <ul>
      <?php
          include 'connection.php';
          $sql = mysqli_query($conn,"SELECT * FROM `category`");
          while($r=mysqli_fetch_assoc($sql)) :
      ?>
      <li><a href="rent_products.php?id=<?php echo $r['category_id']; ?>"><i class="icon-chevron-right"></i><?php echo $r['category_name']; ?></a></li>
    <?php endwhile; ?>
      </ul>
    </li>
  </ul>
  <br/>
  
    
</div>
</body>
</html>

<?php 
$query_product = "SELECT * FROM product as p INNER JOIN tbl_type as t ON p.type_id = t.type_id ORDER BY p.p_id ASC";
$result_pro =mysqli_query($con, $query_product) or die ("Error in query: $query_product " . mysqli_error());
  // echo($query_product);
  // exit()
?>


<div class="row">

<?php foreach ($result_pro as $row_pro) { ?>
<div class="card" style="width: 18rem; margin-top: 10px;">
  <img src="backend/p_img/<?php echo $row_pro['p_img']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row_pro['p_name'];?></h5>
    <p class="card-text">
      ประเภท : <?php echo $row_pro['type_name']; ?>
    </p>
    <a href="#" class="btn btn-primary">รายละเอียด</a>
  </div>
</div>


<?php } ?>




</div>






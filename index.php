<?php session_start();?>
<?php include('h.php');?>
<body>

  <div class="container-fluid">
    <?php include('navbar2.php');?>
    <img src="Dm3_201110_16.jpg" class="img-fluid" alt="Responsive image">
    <?php include('navbar.php'); ?>
    
    <div class="row">
      <div class="col-md-3">
        <?php include('menu.php'); ?>
      </div>

    <div class="col-md-9">
    <?php  
    $act = (isset($_GET['act'])? $_GET['act'] : '');
    if($act=='showbytype'){
      include('show_product_type.php');

    }else{
      include('show_product.php'); 
      

    }
    ?>

    </div>
    </div>

    </div>    
  </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <?php include('h.php');
    error_reporting(error_reporting() & ~E_NOTICE);
    ?>
<head>
  <body>
    <div class="container-fluid">
  <?php include('navbar.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
      สวัสดี คุณ <?php echo $a_name; ?>
        <?php include('menu_left.php');?>
      </div>

    <div class="col-md-9">
        <a href="member.php?act=add" class="btn-info btn-sm">ADD</a>
        <p></p>

        <?php
        if(isset($_GET['act'])){
        $act = $_GET['act'];
        
        if($act == 'add'){
        include('member_form_add.php');
        }elseif ($act == 'edit') {
        include('member_form_edit.php');
        }
        }
        else {
        include('member_list.php');
        }
        ?>

    </div>
    </div>
  </div>
  </body>
</html>
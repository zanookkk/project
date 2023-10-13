<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<div class="container">
  <div class="row">
      <form  name="addproduct" action="product_form_add_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-9">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <p> ประเภทสินค้า </p>
            <select name="type_id" class="form-control" required>
              <option value="type_id">ประเภทสินค้า</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
             <textarea  name="p_detail" rows="5" cols="60"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-9">
            <p> จำนวนสินค้า </p>
             <input type="text" name="p_num" class="form-control" required placeholder="จำนวนสินค้า"></input>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ต้นทุน </p>
            <input type="text" name="p_cost" class="form-control" required placeholder="ต้นทุน"></input>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ราคาขายส่ง </p>
            <input type="text" name="p_pwholesale" class="form-control" required placeholder="ราคาขายส่ง"></input>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ราคาขายปลีก </p>
            <input type="text" name="p_pretail" class="form-control" required placeholder="ราคาขายปลีก"></input>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ค่าส่ง </p>
            <input type="text" name="p_shopping" class="form-control" required placeholder="ค่าส่ง"></input>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> สถานะสินค้า </p>
            <input type="text" name="p_status" class="form-control" required placeholder="สถานะสินค้า"></input>
          </div>
        </div>

        <div class="form-group">  
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" name="btnadd"> SAVE </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>
<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM tbl_admin ORDER BY a_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <td>id</td>
                      <td>a_user</td>
                      <td>a_pass</td>
                      <td>a_name</td>
                      <td>edit</td>
                      <td>delete</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["a_id"] .  "</td> ";
                    echo "<td>" .$row["a_user"] .  "</td> ";
                    echo "<td>" .$row["a_pass"] .  "</td> ";
                    echo "<td>" .$row["a_name"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='admin.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='admin_form_del.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
<?php
include 'config.php';
$staff=filter_input(INPUT_POST,"staff");
$jobs=$_POST['jobs'];
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
switch ($jobs) {
case 'customer_service':
$sql="SELECT * FROM `خدمة العملاء` WHERE `بريد_خ_ع`=(Select `البريد` FROM `خدمة العملاء` WHERE `الاسم` = $staff";
break;
case 'technican':
$sql="SELECT * FROM `الفني` WHERE `بريد_الفني`=(SELECT `البريد` FROM `الفني` WHERE `الاسم`= $staff ";

break;
}
$result=mysql_query($sql);
while($rows=mysql_fetch_array($result))
{
?>




              <table id = "table2" class ="align-center">
              <td>
                <ul>
                  <p> : رقم الجوال 1<input type="text" name="number1" id="number1"value="<?php echo $rows["الجوال1"];?>" /> </p>
              <p> : رقم الجوال 2<input type="text" name="number2" id="number2" value="<?php echo $rows["الجوال2"];?>"/> </p>
              <p> : عنوان السكن - المدينة <input type="text" name="city" id="city" value="<?php echo $rows["عنوان_السكن"];?>"/> </p>
              <p>:  المسمى الوظيفي <input type="text" name="job" id="job" value="<?php echo $rows["المسمى_الوظيفي"];?>"/> </p>

                </ul>

              </td>
              <td>

                  <ul>
                  <p> : الاسم<input type="text" name="name" id="name" value="<?php echo $rows["الاسم"];?>"/> </p>
                  <p> : رقم الحساب البنكي <input type="text" name="bank" id="bank" value="<?php echo $rows["رقم_الحساب_البنكي"];?>"/> </p>
                  <p> :  البريد الإلكتروني <input type="email" name="email" id="email" value="<?php echo $rows["البريد"];?>"/>  </p>
                  <p>:  الفرع   <input type="text" name="branch" id="branch" value="<?php echo $rows["الفرع"];?>"/> </p>
                </ul>
              </td>
            </table>



            <?php
            }
             ?>

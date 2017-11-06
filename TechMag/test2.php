<section class="wrapper style2 fade-up">
  <div class="inner" style="height:240%">

    <label>المشاكل الإضافية</label>
    <table  style="border: 1px solid black;">
            <tr >
            <th style="border: 1px solid #073660;;">ملاحظات الفني</th>
            <th style="border: 1px solid #073660;;"> رقم الطلب </th>
            </tr>
    <?php
    include 'config.php';
    //query
    mysql_query("SET NAMES 'utf8'");
    mysql_query('SET CHARACTER SET utf8');
    $sql="SELECT *
FROM `طلب الصيانة`
WHERE`مشكلة_إضافية` <> ''
AND
`حالة_الطلب` =
'مقبول'
";
    $result=mysql_query($sql) or die($sql);
    while($row=mysql_fetch_array($result))
    {
    ?>

<tr>
            <td style="border: 1px solid #073660;"><?php echo $row['مشكلة_إضافية']; ?></td>
            <td style="border: 1px solid #073660;"><?php echo $row['رقم_الطلب']; ?></td>
            </tr>

<?php
}
?>
</table>

                  <form method="post" action="#" style="border: 1px solid #c2d9ed; padding: 10px;">
                  <label>تعديل على المشكلة</label>
                    <div class="field half first">
                      <label for="newprob">المشكلة الإضافية</label>
                      <input type="text" name="newprob" id="newprob"/>
                    </div>
                    <div class="field half ">
                    <label for="price">رقم الطلب</label>
                    <select name="requestno" id="requestno">
                      <option > فضلاً اختر رقم الطلب</option>


  <?php
  include 'config.php';
  //query
  mysql_query("SET NAMES 'utf8'");
  mysql_query('SET CHARACTER SET utf8');
  $sql= "SELECT *
  FROM `طلب الصيانة`
  WHERE
  (
  `حالة_الطلب`
  = 'مقبول'
  AND
  `مشكلة_إضافية` IS NOT NULL
  )";
  $result=mysql_query($sql);
  while($row=mysql_fetch_array($result))
  {
  ?>
  <option><?php echo $row["رقم_الطلب"];?></option>
  <?php
  }
  ?>

                     </select>
                  </div>
                      <div class="field half ">
                      <label for="price">السعر</label>
                      <input type="text" name="price" id="price" />
                    </div>
                    <div>
                      <center>
                    <ul class="actions" margin-top="4em">
                      <li><input type="submit"value ="ارسال"></li>
                    </ul>
                  </center>
                    </div>
                  </form>


  </div>
</section>
</div>
</html>
<?php
include 'config.php';
$requestno=$_POST['requestno'];
$newprob=filter_input(INPUT_POST,"newprob");
$price=filter_input(INPUT_POST,"price");
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

$sql="UPDATE `fixmin`.`طلب الصيانة` SET `مشكلة_إضافية` =
'
المشكلة:$newprob - السعر: $price
',
`المجموع`='$price'
WHERE `طلب الصيانة`.`رقم_الطلب` = '$requestno'";
$result=mysql_query($sql);
$rows = mysql_fetch_assoc($result);
if (mysql_query($sql)) {
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";

}else if ( $requestno = "" ){
echo "<script type='text/javascript'>alert('تم ادخال البيانات بشكل صحيح');</script>";
}
?>


								<label>المشاكل الإضافية</label>
								<?php
								include 'config.php';
								//query
								mysql_query("SET NAMES 'utf8'");
								mysql_query('SET CHARACTER SET utf8');
								$sql=("SELECT * FROM `طلب الصيانة` WHERE`مشكلة_إضافية`IS NOT NULL ");
								$result=mysql_query($sql)or die(($sql)."<br/><br/>".mysql_error());
								while($row=mysql_fetch_array($result))
								{
								?>
								<table  style="border: 1px solid black;">
												<tr >
												<th style="border: 1px solid red;">ملاحظات الفني</th>
												<th style="border: 1px solid red;"> رقم الطلب </th>
												</tr>
<tr>
												<td style="border: 1px solid #073660;"><?php echo $row['مشكلة_إضافية']; ?></td>
												<td style="border: 1px solid #073660;"><?php echo $row['رقم_الطلب']; ?></td>
												</tr>
													</table>
<?php
}
?>

<html>
<table><form action="#" method="post">
<tr>
<th ><center><input type="submit" value="بحث"> </center></th>
<th><input type="text" name="search" placeholder="" style="text-align :right"></th>
<th >
<center><input type="file"  name ="استعراض"value="استعراض"> </center>
</th>
</tr></form>
</table>


</html>
<?php $path = "files/"; $path = $path . basename( $_FILES['userfile']['name']);

if(move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) { echo "Success uploading". basename($_FILES['userfile']['name']); } else{ echo "Error when uploading file."; } ?>

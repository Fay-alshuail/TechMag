<html>
<style type="text/css">

/* The Modal (background) */
.modaldate {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index: 1; /* Sit on top */
		padding-top: 100px; /* Location of the box */
		left: 0;
		top: 0;
		width: 100%; /* Full width */
		height: 100%; /* Full height */
		overflow: auto; /* Enable scroll if needed */
		background-color: rgb(0,0,0); /* Fallback color */
		background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-contentdate {
		background-color: #83bbd3;
		margin-left: 45%;
		width: 30%;
		height: 55.90%;
		border: 1px solid #1f4363;

}

/* The Close Button */
.close {
		color: #aaaaaa;
		float:right;
		font-size: 30px;
		font-weight: bold;
}

.close:hover,
.close:focus {
		color: #000;
		text-decoration: none;
		cursor: pointer;
}
	</style>
	<head>
		<title>لوحة الطلبات</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/style.css" />

	</head>
	<body>
			<!-- Sidebar -->
		<section id="sidebar">
			<div class="inner">
				<nav>
					<ul>
						<li><a href="tech.php#intro">الصفحة الرئيسية </a></li>
						<li><a href="tech.php#one"> الطلبـات </a></li>
						<li><a href="tech.php#two"> الإعدادات </a></li>
					</ul>
				</nav>
			</div>
		</section>


    <!-- Wrapper -->
    			<div id="wrapper">

<section id="two" class="wrapper style3 fade-up">
  <div class="inner"  style="height:100%">
    <center>
     <img src="arrived.png" width="100" height="100">
   </center>
    <h2>لوحة التحكم بالطلبات </h2>
    <section style="text-align=right">

      <table  style="border: 1px solid black;">
<tr >
  <th style="border: 1px solid #c2d9ed;">تاريخ الاستحقاق </th>
  <th style="border: 1px solid #c2d9ed;">الحالة </th>
  <th style="border: 1px solid #c2d9ed;"> التفصيل</th>
  <th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
</tr>
  <td style="border: 1px solid #073660;"></td>
  <td style="border: 1px solid #073660;"><center><input type="button" id="date" value="قبول"><input type="button" value="رفض"></center></td>
  <td style="border: 1px solid #073660;"></td>
  <td style="border: 1px solid #073660;"></td>
  <td style="border: 1px solid #073660;"></td>
</tr>
        </table>
</section>
</div>
</section>

<!-- The Modal -->
<div id="datemodal" class="modaldate">
<!-- Modal content -->
<div class="modal-contentdate">
<section class="wrapper style3 fade-up">
  <div class="inner">
<span class="close">&times;</span>
    <center>
			<h2>تاريخ الاستحقاق</h2>
<form method="get" action="#" >
    <label for="date">تاريخ الاستحقاق</label>
    <input type="date" name="date"/>
	</br>
		<input type="button" value="تم">
</form>
</center>

</div>
</section>
</div>


<script>
// Get the modal
var modal = document.getElementById('datemodal');

// Get the button that opens the modal
var btn = document.getElementById("date");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</section>
</body>
</html>

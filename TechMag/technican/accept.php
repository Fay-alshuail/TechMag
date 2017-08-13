<html>
<style type="text/css">

/* The Modal (background) */
.modalnew {
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
.modal-contentnew {
		background-color: #83bbd3;
		margin-left: 25%;
		width: 50%;
		height: 50%;

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
  <title>الطلبات المقبولة</title>
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
<th style="border: 1px solid #c2d9ed;">مشكلة إضافية </th>
<th style="border: 1px solid #c2d9ed;">تاريخ الاستحقاق </th>
<th style="border: 1px solid #c2d9ed;">الحالة </th>
<th style="border: 1px solid #c2d9ed;"> التفصيل</th>
<th style="border: 1px solid #c2d9ed;"> نوع المشكلة</th>
<th style="border: 1px solid #c2d9ed;"> رقم الطلب </th>
</tr>

<td style="border: 1px solid #073660;"><center><input type="button" id="newprob" value="مشكلة إضافية"></center></td>
<td style="border: 1px solid #073660;"></td>
<td style="border: 1px solid #073660;"></td>
<td style="border: 1px solid #073660;"></td>
<td style="border: 1px solid #073660;"></td>
<td style="border: 1px solid #073660;"></td>
</tr>
    </table>
</section>
</div>
</section>

<!-- The Modal -->
<div id="problem" class="modalnew">
<!-- Modal content -->
<div class="modal-contentnew">
<section class="wrapper style3 fade-up">
  <div class="inner">
<span class="close">&times;</span>

<form method="post" action="#" style="border: 1px solid #c2d9ed; padding: 30px 30px 30px 30px;" >
<label>مشكلة إضافية</label>
  <div class="field half first">
    <label for="name">المحتوى</label>
    <textarea cols="40" rows="3" type="text" name="cont" id="cont" />
  </textarea>
  </div>
    <div class="field half ">
    <label for="name">العنوان</label>
    <input type="text" name="title" id="title" />
  </div>
  <div>
    <center>
    <button type="button" class="button">إرسـال</button>
</center>
  </div>
</form>

</div>
</section>
</div>


<script>
// Get the modal
var modal = document.getElementById('problem');

// Get the button that opens the modal
var btn = document.getElementById("newprob");

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

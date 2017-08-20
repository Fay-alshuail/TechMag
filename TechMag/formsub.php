
<html>

<style type="text/css">

.body{
  position:absolute;
  top: -20px;
  left: -20px;
  right: 0px;
  bottom: 5px;
  width: auto;
  height: auto;
  background-image: url(images/banner3.jpg);
  background-size: cover;
  -webkit-filter: blur(5px);
  z-index: 0;
}

.grad{
  position: absolute;
  top: -20px;
  left: -20px;
  right: 0px;
  bottom: 0px;
  width: auto;
  height: auto;
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
  z-index: 1;
  opacity: 0.7;
}

.header{
  position: absolute;
  top: calc(50% - 35px);
  left: calc(50% - 255px);
  z-index: 2;
}

.box{
  text-align: right;
  position: absolute;
  top: calc(13% - 5px);
  left: calc(35% - 5px);
  height: 613px;
  width: 500px;
  padding: -20px;
  z-index: 2;

}
.text{text-align:right;}
.left{text-align: center;}

.buttonsub{
  background-color:#94bbce;
  color: #FFF;
  text-align: center;
  width:84%;
  border:0;
  padding: 4px 4px;
  border-radius: 4px 4px 4px 4px;
  cursor: pointer;
  margin-top: 5px;
  font-size: 18px;
}
</style>
<head>
  <title>اشتراك</title><meta charset="utf-8" />
  <header id="header" class="alt">
  <table >
  <tr>
  <th style="text-align:center ; width:1em;color:#4f6589; background-color:#abb0b5;"><a href="homepage.html">الصفحة الرئيسية </a></th>
  <th style="text-align:center ;width:1em;color:#4f6589; background-color:#abb0b5;"><a href="prices.php">خطط الإشتراك  </a></th>
  <th style="text-align:center ;width:1em; color:#4f6589; background-color:#abb0b5;"><a href="login.php">تسجيل الدخول  </a></th>
  </tr>
  </table>

  </header>

<link rel="stylesheet" href="css.css" />
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
		</div>
		<br>
		<div class="box">
      <form>
      <div class="contentform">
        <div id="sendmessage"> تم التسجيل بنجاح </div>

        <div class="leftcontact">
              <div class="form-group">
                <p>الجوال 1 <span>*</span></p>
                <span class="icon-case"></i></span>
                  <input type="text" name="phone" id="nom" data-rule="required" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
         </div>

              <div class="form-group">
              <p>الجوال2 <span>*</span></p>
              <span class="icon-case"></span>
          <input type="text" name="phone2" id="prenom" data-rule="required" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>

        <div class="form-group">
        <p>الإيميل <span>*</span></p>
        <span class="icon-case"></span>
                  <input type="email" name="email" id="email" data-rule="email" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>
      </div>

      <div class="rightcontact">

        <div class="form-group">
        <p>الاسم <span>*</span></p>
        <span class="icon-case"></span>
          <input type="text" name="name" id="ville" data-rule="required" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>

        <div class="form-group">
        <p>المسمى الوظيفي <span>*</span></p>
        <span class="icon-case"></span>
          <input type="text" name="job" id="phone" data-rule="maxlen:10" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>
        <div class="form-group">
        <p>عنوان السكن <span>*</span></p>
        <span class="icon-case"></span>
          <input type="text" name="address" id="fonction" data-rule="required" data-msg="لو ماعبى التيكست"/>
          <div class="validation"></div>
        </div>

        <div class="form-group">
        <p>الرقم السري <span>*</span></p>
        <span class="icon-case"></span>

          <input type="text" name="password1" id="fonction" data-rule="required" value ="<?php echo randomPassword(); ?>"  data-msg="لو ماعبى التيكست"/>
      <center>
      <button onClick="randomPassword()" type="submit" >تغيير الرقم السري </button>
          <div class="validation"></div>
        </div>
      </center>
      </div>
      </div>
      <button type="submit" class="bouton-contact"> إرسال </button>
      </form>
		</div>
</body>
</html>
<?php
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

 ?>

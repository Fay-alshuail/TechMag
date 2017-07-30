<html>
<style type="text/css">

.body{
  position:absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
  width: auto;
  height: auto;
  background-image: url(images/banner.jpg);
  background-size: cover;
  -webkit-filter: blur(5px);
  z-index: 0;
}

.grad{
  position: absolute;
  top: -20px;
  left: -20px;
  right: -40px;
  bottom: -40px;
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
.login{
  text-align: right;
  position: absolute;
  top: calc(30% - 20px);
  left: calc(65% - 50px);
  height: 150px;
  width: 600px;
  padding: 10px;
  z-index: 2;
}
.login2{
  text-align: right;
  position: absolute;
  top: calc(30% - 20px);
  left: calc(10% - 50px);
  height: 150px;
  width: 600px;
  padding: 10px;
  z-index: 2;
}
</style>
<head>
  <title>اشتراك</title><meta charset="utf-8" />
  <header id="header" class="alt">
    <div id="nav2">
    <nav id="nav">
      <ul>
        <li><a href="homepage.html">الصفحة الرئيسية </a></li>
        <li><a href="prices.php">خطط الإشتراك  </a></li>
        <li><a href="login.php">تسجيل الدخول  </a></li>
      </ul>
    </nav>
  </div>
   </header>
    <a href="#menu" class="navPanelToggle"></a>
<link rel="stylesheet" href="css.css" />
<link rel="stylesheet" href="assets/css/main.css" />
<head>
<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>

      </div>
		</div>
		<br>

    <div class="login">
      <form>
    <div class="style18">
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
    </div>
    </div>
    <button type="submit" class="bouton-contact"> إرسال </button>
    </div>
    </form>
    </div>


    <div class="login2">
      <form>
    <div class="style18">
      <div class="contentform">
        <div id="sendmessage"> تم التسجيل بنجاح </div>

        <div class="leftcontact">
              <div class="form-group">
                <p>تاريخ الإنتهاء  <span>*</span></p>
                <span class="icon-case"></i></span>
                  <input type="text" name="phone" id="nom" data-rule="required" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
         </div>

              <div class="form-group">
              <p>رقم الأمان  <span>*</span></p>
              <span class="icon-case"></span>
          <input type="text" name="phone2" id="prenom" data-rule="required" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>
    </div>

    <div class="rightcontact">

        <div class="form-group">
        <p>رقم البطاقة  <span>*</span></p>
        <span class="icon-case"></span>
          <input type="text" name="name" id="ville" data-rule="required" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>

        <div class="form-group">
        <p>نوع البطاقة  <span>*</span></p>
        <span class="icon-case"></span>
          <input type="text" name="job" id="phone" data-rule="maxlen:10" data-msg="لو ماعبى التيكست"/>
                  <div class="validation"></div>
        </div>
    </div>
    </div>
    <button type="submit" class="bouton-contact"> إرسال </button>
    </div>
    </form>
    </div>

</body>
</html>


<!DOCTYPE html>
<html >

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
<div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="well well-sm">
              <form class="form-horizontal" action="logcheck.php" method="post">
              <fieldset>
                <legend class="text-center">Sign In</legend>


                <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Username">Username</label>
                  <div class="col-md-8">
                    <input id="username" name="username" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="Password">Password</label>
                  <div class="col-md-8">
                    <input id="password" name="password" type="text" placeholder="Your email" class="form-control">
                  </div>
                </div>

                <!-- Form actions -->
                <div class="form-group">
                  <div class="col-md-12 text-right">
                    <button onClick="return validateForm()" type="submit" class="btn btn-primary btn-lg">Submit</button>
                 ` </div>
                </div>
              </fieldset>
              </form>
            </div>
          </div>
        </div>
    </div>
</body>
</html>

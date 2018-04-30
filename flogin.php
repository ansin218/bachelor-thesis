<?php 
        $title = 'Smart Home | Login';
	include $_SERVER["DOCUMENT_ROOT"].'/home/core/init.php';
	f_logged_in_redirect();
	include $_SERVER["DOCUMENT_ROOT"].'/home/includes/overall/header.php';
?>
            
            <form class="form-horizontal" action="loginact.php" method="POST">
                  <div class="row">
                  <div class="col-lg-4">
            	<div class="well bs-component">
                  <legend>User Log In</legend>
                  <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                    <div class="col-lg-12">
                      <input type="text" name="f_uname" class="form-control" required placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-12">
                      <input type="password" name="f_password" class="form-control" required placeholder="Password">
                    </div>
                  </div>
            	<div class="form-group">
                <center><button type="submit" id="submit" value="submit" name="submit" class="btn btn-success">Login</button></center>
              </div>
              </form>
            </form>
            </div>
            </div></div>

            
<?php include $_SERVER["DOCUMENT_ROOT"].'/home/includes/overall/footer.php'; ?> 
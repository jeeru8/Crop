  <?php include '_css.php'; ?>  
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h3 class="text-primary"><center>PEST DETECTION SYSTEM</center></h3><br>
                <p class="text-muted">SIGN IN TO YOUR ACCOUNT</p>
                <?php include 'credentials/login_function.php'; ?>
                <?php if (isset($_SESSION['error'])) : ?>
                  <div style="font-size: 14px; color: red">
                    <center>  
                      <?php 
                        echo $_SESSION['error']; 
                        unset($_SESSION['error']);
                      ?>
                    </center>
                  </div>
                <?php endif ?>
                <form method="POST" action="login.php">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-user"></i>
                      </span>
                    </div>
                    <input class="form-control" type="text" placeholder="Username" name="username" required>
                  </div>
                  <div class="input-group mb-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                      </span>
                    </div>
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <input type="submit" class="btn btn-primary px-4 form-control" value="Login" name="login">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>PEST DETECTION SYSTEM</h2><br>
                  <p style="text-align: justify;"><em style="margin-left: 20px;">PEST DETECTION SYSTEM</em>, the quick brown fox jump over the lazy dogs. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include '_js.php'; ?>
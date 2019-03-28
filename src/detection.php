  <?php include 'credentials/auth.php'; ?>
  <?php include '_css.php'; ?>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php include '_navbar.php'; ?>
    <div class="app-body">
      <?php include '_sidebar.php'; ?>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">MAIN MENU</li>
          <li class="breadcrumb-item active">DETECTION</li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-info" style="background-image: url('img/ra.png');" >
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">RAT</div><hr><br>
                    <h1><center><div id="show" style="font-size: 50px;"></div></center></h1>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><hr>
                    <center>TOTAL</center>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-warning">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">PEST II</div><hr><br>
                    <h1><center><div id="show_pestII" style="font-size: 50px;"></div></center></h1>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><hr>
                    <center>TOTAL</center>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-danger">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">PEST III</div><hr><br>
                    <h1><center><div id="show_pestIII" style="font-size: 50px;"></div></center></h1>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><hr>
                    <center>TOTAL</center>
                  </div>
                </div>
              </div>
              <!-- /.col-->
              <!-- /.col-->
              <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">PEST IV</div><hr><br>
                    <h1><center><div id="show_pestIV" style="font-size: 50px;"></div></center></h1>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><hr>
                    <center>TOTAL</center>
                  </div>
                </div>
              </div>
              <!-- /.col-->
            </div>
            <div class="row">
              <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-success">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">OVERALL PESTICIDES</div><hr><br>
                    <h1><center><div id="show_all" style="font-size: 250px;"></div></center></h1>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><hr>
                    <center>TOTAL</center>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-8">
                <div class="card text-white bg-primary">
                  <div class="card-body pb-0">
                    <button class="btn btn-transparent p-0 float-right" type="button">
                      <i class="icon-location-pin"></i>
                    </button>
                    <div class="text-value">DATE & TIME</div><hr><br>
                    <h1><center><div id="time" style="font-size: 83px;"></div></center></h1>
                  </div>
                  <div class="chart-wrapper mt-3 mx-3" style="height:70px;"><hr>
                    MM/DD/YY - HH/MM/SS
                  </div>
                </div>
              </div>
            </div>

            <!--Input Number of Detection-->

            <div class="row">
                <div class="col-md-4">

                    <form action="pest_number.php" method="post">
                        <label>Change the Number of Pest Detection</label>
                        <input type="number" name="input" class="form-control"/>
                        <br>
                        <button type="submit" class="btn btn-success" name="submit">
                          Change
                        </button>
                    </form>

                </div>

              <!--Input Number of Time-->

                <div class="col-md-4">

                    <form action="pest_spray.php" method="post">
                        <label>Change the Duration of Spray</label>
                        <input type="number" name="input" class="form-control"/>
                        <br>
                        <button type="submit" class="btn btn-success" name="submit">
                          Change
                        </button>
                    </form>

                </div>
            </div>


          

            <!-- /.row-->
            <!-- /.card-->
            <div align="center">
                <img align="center" src="img/rats.png" class="img-responsive"/>
            </div>
          </div>
        </div>
      </main>
      
    </div>
    <?php include '_footer.php'; ?>
    <?php include '_js.php'; ?> 
  </body>

  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show').load('data_rat.php')
      }, 500);
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show_pestII').load('data_pestII.php')
      }, 500);
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show_pestIII').load('data_pestIII.php')
      }, 500);
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show_pestIV').load('data_pestIV.php')
      }, 500);
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function () {
        $('#show_all').load('data_all.php')
      }, 500);
    });
  </script>
  <script type="text/javascript">
    function t() {
    document.getElementById('time').innerHTML = new Date();
    }
    t();
    window.setInterval(t, 1000);
  </script>

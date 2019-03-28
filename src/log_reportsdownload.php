  <?php
  // Create Connection
  include 'credentials/auth.php';
  include 'credentials/connection.php';

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM log_reports WHERE id = '$id' ");

    while ($row = mysqli_fetch_array($query)) {

      $name = $row['name'];
      $title = $row['title'];
      $description = $row['description'];
    }
  }
      
  ?>
  <?php include '_css.php'; ?>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php include '_navbar.php'; ?>
    <div class="app-body">
      <?php include '_sidebar.php'; ?>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">MAIN MENU</li>
          <li class="breadcrumb-item">LOG REPORTS</li>
          <li class="breadcrumb-item active">ADD REPORT</li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <!-- /.col-->
              <div class="col-md-6">
                <form name = "zips" action="" method="POST" enctype="multipart/form-data">
                  <h4 class="card-title"><a href="log_reports.php" style="text-decoration: none;">BACK</a> | ATTACHED FILES</h4><hr><br>
                  <h5>ATTACHED FILES</h5>
                  <?php 
                  include 'credentials/connection.php';

                  $title;

                  $query = mysqli_query($conn, "SELECT * FROM log_files WHERE title = '$title' "); 

                  while ($row = mysqli_fetch_array($query)) {
                    $files_docs = $row['files_docs'];

                    ?>
                    <a  href="upload_docs/<?php echo $row['files_docs']; ?>" style = "text-decoration: none;">
                      <i class="fa fa-download"></i>&nbsp;<?php echo $row['files_docs']; ?><br>
                    </a>
                 <?php } ?>
                </form>
              </div>
              <div class="col-md-6">
                <div align="center"><br><br><br><br><br><br><br><br>
                    <img align="center" src="img/rats.png" class="img-responsive"/>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      
    </div>
    <?php include '_footer.php'; ?>
    <?php include '_js.php'; ?> 
  </body>
  <script type="text/javascript">
    $('#myModal').modal('option')
  </script>


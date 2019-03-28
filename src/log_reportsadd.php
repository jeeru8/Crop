  <?php
  // Create Connection
  include 'credentials/auth.php';
  include 'credentials/connection.php';

  if (isset($_POST['btn_add'])) {

    $name = $_POST['name'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO log_reports (name, title, description)
    VALUES ('$name', '$title', '$description')";
    $query = mysqli_query($conn, $sql);

    for ($i=0; $i <count($_FILES["files_docs"]['name']) ; $i++) { 

        $_SESSION['success'] = "ADDED SUCCESSFULLY!";
        $file_tmp = $_FILES["files_docs"]["tmp_name"][$i];
        $file_name = $_FILES["files_docs"]["name"][$i];
        $file_path = "upload_docs/".$file_name;

        move_uploaded_file($file_tmp, $file_path);

            $name = $_POST['name'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $sql_one = "INSERT INTO log_files (name, title, description, files_docs, files_path)
            VALUES ('$name', '$title', '$description', '$file_name', '$file_path')";
            $query_one = mysqli_query($conn, $sql_one);

            header('location: log_reports.php'); 
      }
    }
    mysqli_close($conn);
      
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
                <form method="POST" enctype="multipart/form-data">
                  <h4 class="card-title"><a href="log_reports.php" style="text-decoration: none;">BACK</a> | NEW REPORT</h4><hr><br>
                  <div class="form-group">
                    <label>NAME OF PERSONNEL</label>
                    <input type="text" name="name" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" name="title" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>DESCRIPTION</label>
                    <textarea rows="4" name="description" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label>ATTACHED FILES</label>
                    <input type="file" name="files_docs[]" class="form-control" multiple />
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btn_add" class="form-control btn btn-success" value="ADD REPORT" />
                  </div>
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


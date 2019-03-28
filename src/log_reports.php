  
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
          <li class="breadcrumb-item active">LOG REPORTS</li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <!-- /.col-->
              <div class="col-md-12">
                <?php if (isset($_SESSION['success'])) : ?>
                  <div class="success" id="flash-msg">
                    <p class="alert alert-success">
                      <?php 
                        echo $_SESSION['success']; 
                        unset($_SESSION['success']);
                      ?>
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    </p>
                  </div>
                <?php endif ?>
                <form method="POST" enctype="multipart/form-data">
                  <h4 class="card-title"><a href="log_reportsadd.php" style="text-decoration: none;">
                    <i class="fa fa-plus"></i>&nbsp;REPORT</a> | LOG REPORTS
                  </h4><hr><br>
                    <table id="reportTable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Document Files</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include 'credentials/connection.php';
                          $table = mysqli_query($conn, "SELECT * FROM log_reports ");
                          while($row = mysqli_fetch_array($table)) { 

                            $id=$row['id'];
                            $name=$row['name'];
                            $title=$row['title'];
                            $description=$row['description'];
                          ?>
                          <tr id="<?php echo $row['id'];?>">
                             <td data-target="name"><?php echo $row['name']?></td> 
                             <td data-target="title"><?php echo $row['title']?></td> 
                             <td data-target="description"><?php echo $row['description']?></td> 
                             <td data-target="name">
                              <center><a href="log_reportsdownload.php?id=<?php echo $row['id']?>" class = "btn btn-primary" style = "text-decoration: none;">
                                <i class="fa fa-download"></i> DOWNLOAD
                              </a></center>
                            </td> 
                             <td>
                                <center><a href="log_reportsview.php?id=<?php echo $row['id']; ?>" class='btn btn-warning'>
                                  <i class="fa fa-eye"></i> VIEW
                                </a></center>
                             </td>
                             <td>
                                <center><button class = "btn btn-danger" onClick="deleteData(<?php echo $row['id']; ?>)">
                                  <i class="fa fa-trash"></i> REMOVE
                                </button></center>
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                </form>
                <br/>
                <div class="row">
                  <div class="col-md-6">
                    <form method="POST" enctype="multipart/form-data">
                      <h4 class="card-title"> TABLE OF COUNT </h4><br>
                        <table id="reportTable" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>Counting</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              include 'credentials/connection.php';
                              $table = mysqli_query($conn, "SELECT * FROM pest_all ORDER BY id DESC LIMIT 1 ");
                              while($row = mysqli_fetch_array($table)) { 

                                $id=$row['id'];
                                $date=$row['date'];
                              ?>
                              <tr id="<?php echo $row['id'];?>">
                                 <td><?php echo $row['id']?></td> 
                                 <td><?php echo $row['date']?></td> 
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row-->
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
    //for datatable
      $(document).ready(function() {
      $('#reportTable').DataTable();
    } );
  </script>
  <script type="text/javascript">
  // for delete js
    function deleteData(id) {
      if(confirm('Are you sure want to delete this Reports?')){
        $.ajax({
          type:'POST',
          url:'log_reportsdelete.php',
          data:{delete_id:id},
          success:function(data){
            $('#delete'+id).hide();
          }
        });
      }
    }
  </script>
  <script type="text/javascript">
    $('#myModal').modal('option')
  </script>


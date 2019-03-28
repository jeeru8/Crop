  
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
          <li class="breadcrumb-item active">APPLY PESTICIDES</li>
        </ol>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <!-- /.col-->
              <div class="col-md-12" align="center">
                <img src="img/pesti.png" style="width: 100%; height: 75%;"><br>
     

                  <?php


                            if (!isset($_GET["d"]) || empty($_GET["d"])) {
                            $data = "0";

                            } else {
                                $data = $_GET["d"];
                            }



                            // Outputs all the result of shellcommand "ls", and returns
                            // the last output line into $last_line. Stores the return value
                            // of the shell command in $retval.



                            //$output = "C:/Users/Birol/ComPrinter.exe /devnum 12/baudrate 2400 /endchar 9"; 
                            //$output = 'C:/Users/Birol/SerialSend.exe /baudrate 9600 "Hello world!"'; 
                            //$output = "echo test > COM12"; 
                            //$output = "set /p x=".'"'."hello".'"'." <nul >\\.\COM12"; 

                            $output = "D:/xampp/htdocs/Crop/src/SerialSend.exe /baudrate 9600 $data"; 
                            $output = shell_exec($output);
                            echo "<a class='btn btn-success btn-lg' href='apply_pesticides.php?d=on' accesskey='q'>On</a>";
                            echo "&nbsp;";
                            echo "<a class='btn btn-danger btn-lg' href='apply_pesticides.php?d=off' accesskey='w'>Off</a>";



                            if (!isset($_GET["d"]) || empty($_GET["d"])) {

                            $myfile = fopen("serial.txt", "r") or die("Unable to open file!");
                            $txt = fread($myfile,filesize("serial.txt"));
                            fclose($myfile);

                            } else {
                            $myfile = fopen("serial.txt", "w") or die("Unable to open file!");
                            $txt = "$data";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            }


                            //echo "<br>$txt";
                            ?>﻿
                  
                </a>
              </div>
            </div>
            <!-- /.row-->
          </div>
        </div>
      </main>
      
    </div>
    <?php include '_footer.php'; ?>
    <?php include '_js.php'; ?> 
  </body>


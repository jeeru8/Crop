
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#" style="margin-right: 35px;">
        PEST DETECTION
      </a>
      <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
          <a class="nav-link" href="detection.php">DETECTION</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="log_reports.php">LOG REPORT</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link" href="apply_pesticides.php">APPLY PESTICIDES</a>
        </li>
      </ul>
      <ul class="nav navbar-nav ml-auto">
        <b>Hello,</b>&nbsp;<a href="#" style="text-decoration: none; cursor: default;"><b><?php echo $_SESSION['user']['fullname']; ?></b></a>&nbsp;&nbsp;&nbsp;
        <a href="credentials/logout.php" style="margin-right: 20px; text-decoration: none;" class="btn btn-primary"><i class="fa fa-power-off"></i>&nbsp;LOGOUT</a>
      </ul>
    </header>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../check-login.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kidboss Admin</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="sidebar-mini fixed">
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href="../index.php">Kidboss</a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="../logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel" style="height: 50px">
            <div class="pull-left info">
              <p><?php echo $_SESSION["nameuser"]?></p>
              <p class="designation"><?php switch ($_SESSION["Chucvu"])
                {
                  case 0:
                    echo "Admin";
                     break;
                  case 1:
                    echo "Editor";
                    break;
                  case 2:
                    echo "User";
                    break;
                }; ?>
              </p>
            </div>
          </div>
          <!-- Menu Trái-->
          <ul class="sidebar-menu">
            <li class="active"><a href="#"><i class="fa fa-laptop"></i><span>Quản lí User</span><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="treeview"><a href="../catalogs/#"><i class="fa fa-edit"></i><span>Quản lí Danh mục</span><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="treeview"><a href="../products/#"><i class="fa fa-th-list"></i><span>Quản lí Sản phẩm</span><i class="fa fa-angle-right"></i></a>
            </li>
          </ul>
        </section>
      </aside>
      <div class="content-wrapper">
        <div class="page-title row">
          <div class="col-md-6">
            <ul class="breadcrumb" style="float: left;">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Users</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <p><a class="btn btn-primary icon-btn" href="new.php" style="float: right;"><i class="fa fa-plus"></i>Add User </a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Tên</th>
                  <th>Email</th>
                  <th>Chức vụ</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "select * from users";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php switch ($row["role"]) {
                          case 0:
                            echo "Admin";
                            break;
                          case 1:
                            echo "Editor";
                            break;
                          case 2:
                            echo "User";
                            break;
                        }; ?>
                        <td><a class="btn btn-info" href="edit.php?id=<?php echo $row["id"];?>"><i class="fa fa-lg fa-edit"></i></a></td>;
                        <td><a class="btn btn-warning" href="delete.php?id=<?php echo $row["id"];?>"><i class="fa fa-lg fa-trash"></i></a></td>;
                      </tr>
                <?php   }
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
      
    </script>
    <!-- Javascripts-->
    <script src="../../../public/js/jquery-2.1.4.min.js"></script>
    <script src="../../../public/js/bootstrap.min.js"></script>
    <script src="../../../public/js/plugins/pace.min.js"></script>
    <script src="../../../public/js/main.js"></script>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
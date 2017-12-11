<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../check-login.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from catalogs where id='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $description = $row["description"];
?>
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
              <?php include "../User-menu.php" ?>
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
            <li class="treeview"><a href="../user/#"><i class="fa fa-laptop"></i><span>Quản lí User</span><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="active"><a href="#"><i class="fa fa-edit"></i><span>Quản lí Danh mục</span><i class="fa fa-angle-right"></i></a>
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
              <li><a href="index.php">Danh mục</a></li>
              <li><a href="#">Edit</a></li>
            </ul>
          </div>
          <div class="col-md-6">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="update.php">
              <input type="hidden" value="<?php echo $id; ?>" name="id">
              <div class="row">
                <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
              </div>
              <div class="row">
                <label>Tên danh mục </label>
                <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
              </div>
              <div class="row">
                <label>Mô tả :</label>
                <textarea class="form-control" name="description" value="<?php echo $description; ?>"></textarea>
              </div>
              <br>
              <div class="row">
                <button class="btn btn-primary">Submit</button>
                <a class="btn btn-primary icon-btn" href="index.php">Quay về </a>
              </div>
            </form>
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
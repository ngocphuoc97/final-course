<?php session_start(); ?>
<?php
  define("URL_SITE", "http://localhost/kiet/final-course/app/admin/");
?>
<?php
  if (!isset($_SESSION["login"])) {
      header("location: ".URL_SITE."index.php");
  }
?>

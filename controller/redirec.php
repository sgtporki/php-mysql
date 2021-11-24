<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    /*header*/echo('location: ../view/admin/index.php');
  }else if($_SESSION['cargo'] == 2){
    header('location: ../view/user/index.php');
  }

 ?>

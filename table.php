<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Pepsi.com</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body >
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header" style="background-color:#0984e3;">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
            class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <img src="img/logo.png" alt="" width="60px">
      <!--logo end-->
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " style="background-color:#0984e3;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="tampilan.php">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_table"></i>
              <span>Tables</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="active" href="table.php">Table</a></li>
            </ul>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content" >
      <section class="wrapper" >
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Table Data</li>
            </ol>
          </div>
        </div>
        <!-- page start-->
        
        <div class="row" >
          <div class="col-lg-12">
            <section class="panel" >
              <header class="panel-heading">
                <h5><a href="produk.html">[+]Tambah Baru</a></h5>
              </header>

              <table class="table table-striped" >
                <tbody >
                  <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>    
                    <th>Detail</th>
                    <th>Harga Produk</th>
                    <th> Action</th>
                  </tr>
                  <?php
                        $sql = "SELECT * FROM products";
                        $query = mysqli_query($connect,$sql);
                        while($pro = mysqli_fetch_array($query)){
                        echo '<tr>';
                        echo '<td>'.$pro['id'].'</td>';
                        echo '<td>'.$pro['nama_produk'].'</td>';
                        
                        echo '<td>'.$pro['detail'].'</td>';
                        echo '<td>'.$pro['harga_produk'].'</td>';
                        echo '<td>';
                        echo '<a class="btn btn-success" href= "formedit.php?id='.$pro['id'].'"><i class="icon_pencil-edit"></i></a> ';
                        echo '<a class="btn btn-danger" href= "hapus.php?id='.$pro['id'].'"><i class="icon_close_alt2"></i></a> ';
                        echo '</td>';
                        echo '</tr>';
                        }
                    ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
   
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
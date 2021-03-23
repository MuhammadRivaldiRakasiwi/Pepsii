<?php
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="img/logo.png">

    <title>Pepsi.com</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" width="60px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#product">Product</a>
                    </li>
                    <li class="nav-item" style="margin-left:400%;">
                        <a class="nav-link active" href="table.php">Admin</a>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- nav end -->

    <!-- Hero -->
        <section id="hero"> 
            <div class="hero">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/pepsi.png" alt="" width="550px">
                    </div>
                    <div class="col-md-6">
                        <img src="img/pepsi2.png" alt="" width="560px">
                    </div>
                </div>
            </div>
        </section>
    <!-- End Hero -->

    <!-- GIF -->
        <section id="gif">
            <div class="gif">
            <video autoplay loop muted playsinline width="1400">
                <source src="video/Commercial Ads 2020 - Pepsi - Vanila and Wild Cherry.mp4" type="video/mp4"/>
            </video> 
            </div>
        </section>
    <!-- End GIF -->

    <!-- Card -->
    <section id="product">
        <div class="container-fluid">

            <?php
            $sql = "SELECT*FROM products";
            $query = mysqli_query($connect,$sql);
            while($pro = mysqli_fetch_array($query)){
            echo '<div class="card border-light bg-transparent " id="card" style="width: 400px; height:200px; margin-left: 5px; margin-top:70px; border-radius:25px ;">';
            echo '<div class="circle"></div>';
            echo '<div class="content">';
            echo '<h6 class="card-title">'.$pro['nama_produk'].'</h6>';
            echo '<p class="card-text"> RP. '. number_format($pro['harga_produk']).'</p>';
            echo '<p>'.$pro['detail'].'</p>';
            echo '</div>';
            echo '<img src="' . $pro['gambar'] . '" style="width: 175px; height: 350px; ">';
            // echo '<div class="card-body">';
            echo '</div>';
            echo '</div>';
        
            }  
           ?>
        </div>
    </section> 
    <!-- End Card -->   

    <!-- Footer -->
    <div class="footer text-white" style=" background-color: #0984e3; height:50px; width:100%; margin-top:60%; " >
    </div>
    <!-- End Footer -->






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>
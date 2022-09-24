<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border px-3 mr-1">Miral</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <!-- <a href="selection.php" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a> -->
                <?php
              session_start();
                if(isset($_SESSION["panier"])){
            $x = count($_SESSION["panier"]);
           $x--;
            echo("<a href='cart.php' class='btn border'>
                    <i class='fas fa-shopping-cart text-primary'></i>
                    <span class='badge'>$x</span>
                </a>");
            }
            else{

             echo(" <a href='cart.php' class='btn border'>
                <i class='fas fa-shopping-cart text-primary'></i>
                <span class='badge'>0</span>
            </a>") ; 

            }
            ?> 
            </div>
        </div>
    </div>
<!-- Topbar End -->
<!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center 
                justify-content-between bg-primary text-white w-100"
                 data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px;
                  padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border 
                border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                     <?php
                     $con=mysqli_connect("localhost","root","","shopping") or die("erreur");
                     $requette = " select * from categorie  ";
                     $result = mysqli_query($con,$requette);
                     while($ligne=mysqli_fetch_array($result , MYSQLI_NUM)){
                     echo("<a href='categories.php?id=$ligne[0] '     class='nav-item nav-link'>$ligne[1]</a>
                     ");
                     }
                     ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary
                         font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" 
                    data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                         
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                       <?php
                       if(!isset( $_SESSION["nom"]) ){
                           echo(" <div class='navbar-nav ml-auto py-0'>
                            <a href='index1.php' class='nav-item nav-link'>Login</a>
                            <a href='index2.php' class'nav-item nav-link'>Register</a>
                        </div>");
                       }
                        ?>
                    </div>
                </nav>
             <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">  
            <?php
              $con1= mysqli_connect("localhost","root","","shopping") or die("erreur");
              $requette1 = " select * from articles where etat='en promo' ";
              $result1 = mysqli_query($con1, $requette1);
              $i=1;
              while( $ligne1 = mysqli_fetch_array ( $result1 , MYSQLI_NUM )){
                  if ( $i==1 )
                echo("<div class='carousel-item active' style='height: 410px;'> ");
                else
                echo("<div class='carousel-item' style='height: 410px;'>");
                $i++;
                echo(" <img class='img-fluid'     src='img/$ligne1[7]' alt='Image'>
                <div class='carousel-caption d-flex flex-column align-items-center justify-content-center'>
                    <div class='p-3' style='max-width: 700px;'>
                        <h4 class='text-light text-uppercase font-weight-medium mb-3'>10% Off Your First Order</h4>
                        <h3 class='display-4 text-white font-weight-semi-bold mb-4'>Fashionable Article</h3>
                        <a href='detail.php?id=$ligne1[0]' class='btn btn-light py-2 px-3'>Detail</a>
                    </div>
                </div>
            </div>
               ");}
               ?>
                

                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
           
        <?php

                     $con2=mysqli_connect("localhost","root","","shopping") or die("erreur");
                     $requette2 = " select * from categorie  ";
                     $result2 = mysqli_query($con2,$requette2);
                     while($ligne2=mysqli_fetch_array($result2 , MYSQLI_NUM)){
                        $requette22 = " select count(idArt) from articles where idCat=$ligne2[0] ";
                        $result22 = mysqli_query($con2,$requette22);
                        while($ligne22=mysqli_fetch_array($result22 , MYSQLI_NUM)){
                             $nbA=$ligne22[0];
                     echo(" <div class='col-lg-4 col-md-6 pb-1'>
                <div class='cat-item d-flex flex-column border mb-4' style='padding: 30px;'>
                    <p class='text-right'><center>$nbA Products</center></p>
                    <a href='' class='cat-img position-relative overflow-hidden mb-3'>
                      <a  href=categories.php?id=$ligne2[0]   >   <img class='img-fluid' src='img/$ligne2[2]' alt=''>
                    </a>
                    <center> <h5 class='font-weight-semi-bold m-0'> $ligne2[1]</h5></center></a> 
                </div>
            </div>
                            ");
                     }}
                     ?>
    </div>
    </div>
    <div style='height: 350px; '  class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div style=' position:absolute; left:400px; top:1550px; ' class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
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
             <!-- <a href="" class="btn border">
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
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
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
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="shop.php" class="nav-item nav-link active">Shop</a>
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
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div  style='height: 155px;'   class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form  method=post >
                        <div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox"   name=custo  class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal" value=1000   >1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=custo    class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1" value=0DT-100DT   >0DT - 100DT</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=custo  class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2" value=100DT-200DT    >100DT - 200DT</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=custo   class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3" value=200DT-300DT  >200DT - 300DT</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=custo  class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4" value=200DT-300DT  >300DT - 400DT</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" name=custo  class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5" value=200DT-300DT   >400DT - 500DT</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div> </div>
                        <input  type="submit" name=btn1  value=filtrer >
                    </form>
                </div>
                <!-- Price End -->
               
                <!-- Color Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                    <form method=post     >
                        <div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=color value=black class="custom-control-input" id="color-1">
                            <label class="custom-control-label"    for="color-1">Black</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=color value=white class="custom-control-input" id="color-2">
                            <label class="custom-control-label"   for="color-2">White</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=color value=red class="custom-control-input" id="color-3">
                            <label class="custom-control-label"   for="color-3">Red</label>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=color value=pink class="custom-control-input" id="color-6">
                            <label class="custom-control-label"  for="color-6">Pink</label>
                        </div>

                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" name=color value=blue class="custom-control-input" id="color-4">
                            <label class="custom-control-label"  for="color-4">Blue</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" name=color value=green class="custom-control-input" id="color-5">
                            <label class="custom-control-label"  for="color-5">Green</label>
                        </div>
                     </div>   <input type="submit" name=btn11 value =filtrer  >
                    
                    
                    </form>
                </div>
              
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action=" "  method=post >
                                <div class="input-group">
                                    <input type="text" name=recherche class="form-control" placeholder="Search by name">
                                    <input type="submit"  name=btn value=search  >
                                </div>
                            </form>
                           
                        </div>
                    </div>
<?php 
if(empty($_POST["btn"]) && empty($_POST["btn11"]) && empty($_POST["btn111"]) ){
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requette1 = " select * from articles ";
$result3 = mysqli_query($con,$requette1);
while($ligne3=mysqli_fetch_array($result3 , MYSQLI_NUM)){
echo("<div class='col-lg-4 col-md-6 col-sm-12 pb-1'>
                        <div class='card product-item border-0 mb-4'>
                            <div class='card-header product-img position-relative 
                            overflow-hidden bg-transparent border p-0'>
                                <img  style=' whidth:200 ;  height:200' class='img-fluid w-100' src='img/$ligne3[7]' alt=''>
                            </div>
                            <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                                <h6 class='text-truncate mb-3'>$ligne3[1]</h6>
                                <div class='d-flex justify-content-center'>
                                    <h6>  $ligne3[2] DT</h6>
                                </div>
                            </div>
                            <div class='card-footer d-flex justify-content-between bg-light border'>
                                <a href='detail.php?id=$ligne3[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                               ");
                               if(isset($_SESSION["nom"])){
                               echo("<a href='ajouterPanier.php?id=$ligne3[0]' class='btn btn-sm text-dark p-0'>
                                <i class='fas fa-shopping-cart text-primary mr-1'></i>Add To Cart</a>");}
                                else{
                                    echo("<a href='index1.php' class='btn btn-sm text-dark p-0'>
                                <i class='fas fa-shopping-cart text-primary mr-1'></i>Add To Cart</a>");} 
                                
                                echo("
                            </div>
                        </div>
                    </div>");
}
}
?>
<?php 
if(isset($_POST["btn111"]) ){
    $marque=$_POST["btn111"];
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requette5 = " select * from articles where marque='$marque' ";
$result5 = mysqli_query($con,$requette5);
while($ligne5=mysqli_fetch_array($result5 , MYSQLI_NUM)){
echo("<div class='col-lg-4 col-md-6 col-sm-12 pb-1'>
                        <div class='card product-item border-0 mb-4'>

                            <div class='card-header product-img position-relative 
                            overflow-hidden bg-transparent border p-0'>
                                <img  style=' whidth:200 ;  height:200' class='img-fluid w-100' src='img/$ligne5[7]' alt=''>
                            </div>

                            <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                                <h6 class='text-truncate mb-3'>$ligne5[1]</h6>
                                <div class='d-flex justify-content-center'>
                                    <h6>  $ligne5[2] DT</h6>
                                </div>
                            </div>

                            <div class='card-footer d-flex justify-content-between bg-light border'>
                                <a href='detail.php?id=$ligne5[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                                <a href='ajouterPanier.php?id=$ligne5[0]' class='btn btn-sm text-dark p-0'>
                                <i class='fas fa-shopping-cart text-primary mr-1'
                                ></i>Add To Cart</a>
                            </div>
                            
                        </div>
                    </div>");
}
}
?>
<?php
if(isset($_POST["btn11"])){
$color=$_POST["color"];
echo("$color");
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requette = " select * from articles where color='$color' ";
$result = mysqli_query($con,$requette);
while($ligne=mysqli_fetch_array($result , MYSQLI_NUM)){
echo("<div class='col-lg-4 col-md-6 col-sm-12 pb-1'>
                        <div class='card product-item border-0 mb-4'>
                            <div class='card-header product-img position-relative 
                            overflow-hidden bg-transparent border p-0'>
                                <img  style=' whidth:200 ;  height:200' class='img-fluid w-100' src='img/$ligne[7]' alt=''>
                            </div>
                            <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                                <h6 class='text-truncate mb-3'>$ligne[1]</h6>
                                <div class='d-flex justify-content-center'>
                                    <h6>  $ligne[2] DT</h6>
                                </div>
                            </div>
                            <div class='card-footer d-flex justify-content-between bg-light border'>
                                <a href='detail.php?id=$ligne[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                                <a href='ajouterPanier.php?id=$ligne[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1'
                                ></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>");
                
}
}
?>
<?php 
if(isset($_POST["btn"])){
    $search=$_POST["recherche"];
$con=mysqli_connect("localhost","root","","shopping") or die("erreur");
$requet = " select * from articles where nom LIKE '%$search%' or description LIKE '%$search%' or marque LIKE '%$search%' ";
$resul = mysqli_query($con,$requet);
while($lign=mysqli_fetch_array($resul , MYSQLI_NUM)){

echo("<div class='col-lg-4 col-md-6 col-sm-12 pb-1'>
                        <div class='card product-item border-0 mb-4'>
                            <div class='card-header product-img position-relative 
                            overflow-hidden bg-transparent border p-0'>
                                <img  style=' whidth:200 ;  height:200' class='img-fluid w-100' src='img/$lign[7]' alt=''>
                            </div>
                            <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                                <h6 class='text-truncate mb-3'>$lign[1]</h6>
                                <div class='d-flex justify-content-center'>
                                    <h6>  $lign[2] DT</h6>
                                </div>
                            </div>
                            <div class='card-footer d-flex justify-content-between bg-light border'>
                                <a href='detail.php?id=$lign[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                                <a href='ajouterPanier.php?id=$lign[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1'
                                ></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>");
}
}
?>
<div class="col-12 pb-1">
                        <nav aria-label="Page navigation">
                          <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                  
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
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
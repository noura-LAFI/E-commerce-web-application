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
            </div>
        </div>
    </div>
    <!-- Navbar End -->
<!-- Page Header Start -->
    <div style='height: 155px;'  class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
 <!-- Shop Detail Start -->
    <div class="container-fluid py-5">

    <?php
    $id=$_GET["id"];
     $con=mysqli_connect("localhost","root","","shopping") or die("erreur");
      $requette = " select * from articles where idArt= $id ";
        $result = mysqli_query($con,$requette);
         while($ligne=mysqli_fetch_array($result , MYSQLI_NUM)){
            $_SESSION["descreption"]=$ligne[3];
             echo(" <div class='row px-xl-5'>
            <div class='col-lg-5 pb-5'>
                <div id='product-carousel' class='carousel slide' data-ride='carousel'>
                    <div class='carousel-inner border'>
                        <div class='carousel-item active'>
                            <img class='w-100 h-100' src='img/$ligne[7]' alt='Image'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-7 pb-5'>
                <h3 class='font-weight-semi-bold'>$ligne[1]</h3>
                <div class='d-flex mb-3'>
                    <div class='text-primary mr-2'>
                        <small class='fas fa-star'></small>
                        <small class='fas fa-star'></small>
                        <small class='fas fa-star'></small>
                        <small class='fas fa-star-half-alt'></small>
                        <small class='far fa-star'></small>
                    </div>
                   
                </div>
                <h3 class='font-weight-semi-bold mb-4'>$ligne[2] DT</h3>
                <p class='mb-4'>$ligne[3]</p>
                <div class='d-flex align-items-center mb-4 pt-2'>
                    <div class='input-group quantity mr-3' style='width: 130px;'>
                     
                    <div class='input-group-btn'>
                            <button class='btn btn-primary btn-minus' >
                            <i class='fa fa-minus'></i>
                            </button>
                        </div>
                        <input type='text' class='form-control bg-secondary text-center' value='1'>
                        <div class='input-group-btn'>
                            <button class='btn btn-primary btn-plus'>
                                <i class='fa fa-plus'></i>
                            </button>
                        </div>
                    </div>
                    <button class='btn btn-primary px-3'><i class='fa fa-shopping-cart mr-1'></i>
                    Add To Cart
                    </button>
                </div>
                <div class='d-flex pt-2'>
                    <p class='text-dark font-weight-medium mb-0 mr-2'>Share on:</p>
                    <div class='d-inline-flex'>
                        <a class='text-dark px-2' href=''>
                            <i class='fab fa-facebook-f'></i>
                        </a>
                        <a class='text-dark px-2' href=''>
                            <i class='fab fa-twitter'></i>
                        </a>
                        <a class='text-dark px-2' href=''>
                            <i class='fab fa-linkedin-in'></i>
                        </a>
                        <a class='text-dark px-2' href=''>
                            <i class='fab fa-pinterest'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
");
                     }
                     ?>



       


        
        <div class="row px-xl-5">
            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                    <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Description</a>
                
                  <?php  if(isset($_SESSION["nom"])) {
                      echo("<a class='nav-item nav-link' data-toggle='tab' id=rev href='#tab-pane-3'>Reviews (0)</a> ");
                  }?>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-pane-1">
                        <h4 class="mb-3">Product Description </h4>
                        <p> <?php $des=$_SESSION["descreption"]; echo("$des"); ?>.</p>
                    </div>
                   <div class='tab-pane fade' id='tab-pane-3'>
                        <div class='row'>  
                            <?php
                                $id=$_GET["id"];

                            $nom= $_SESSION["nom"];
                        $reque = " select * from comment where idArt=$id";
                          $resulty = mysqli_query($con,$reque);
                          echo("<div class='col-md-6'><h1>reviews from $nom</h1>");
                           while($lignee=mysqli_fetch_array($resulty , MYSQLI_NUM)){
                                echo("
                                <div class='media mb-4'>
                                    <img src='img/moi.jpg' alt='Image' class='img-fluid mr-3 mt-1' 
                                    style='width: 45px;'>
                                    <div class='media-body'>
                                        <h6>   <small> - <i>$lignee[4]</i></small></h6>
                                        <div class='text-primary mb-2'>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star'></i>
                                            <i class='fas fa-star-half-alt'></i>
                                            <i class='far fa-star'></i>
                                        </div>
                                        <p>$lignee[1].</p>  
                                         <span><a href='suppComment.php?id=$lignee[0]&id1=$id'  > <img src=img/trash.svg   /> </a> </span>

                                    </div>
                                </div>
                             ");
                          
                    } ?>
                           </div> 
                            <div class="col-md-6">
                                <h4 class="mb-4">Leave a review</h4>
                                <!-- <small>Your email address will not be published. Required fields are marked *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Your Rating * :</p>
                                    <div class="text-primary">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div> -->
                             
                                <form  action=validerComment.php   method=post >
                                    <div class="form-group">
                                        <label for="name">Your Name *</label>
                                        <input type="text" value= <?php $nom=$_SESSION["nom"] ; echo("$nom") ;?>  name=nom    class="form-control" id="name">
                                        <input type="hidden"  value = <?php echo("$id");?>   name=ident    class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your username *</label>
                                        <input type="text"  value= <?php $user=$_SESSION["user"] ; echo("$user") ;?> name=user  class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Your Review *</label>
                                        <textarea id="message"  name=message    cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                <?php
              $con1= mysqli_connect("localhost","root","","shopping") or die("erreur");
              $requette1 = " select * from articles  ";
              $result1 = mysqli_query($con1, $requette1);
              $i=1;
              while( $ligne1 = mysqli_fetch_array ( $result1 , MYSQLI_NUM )){
                  if ( $i==1 ){
                echo(" <div class='card product-item border-0'>
                <div class='card-header product-img position-relative overflow-hidden bg-transparent border p-0'>
                    <img class='img-fluid w-100' src='img/$ligne1[7]' alt=''>
                </div>
                <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                    <h6 class='text-truncate mb-3'>$ligne1[1]</h6>
                    <div class='d-flex justify-content-center'>
                        <h6>$ligne1[2] DT  </h6>
                    </div>
                </div>
                <div class='card-footer d-flex justify-content-between bg-light border'>
                    <a href='detail.php?id=$ligne1[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                    <a href='' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1'></i>Add To Cart</a>
                </div>
            </div>");}
                else {
                echo(" <div class='card product-item border-0'>
                <div class='card-header product-img position-relative overflow-hidden bg-transparent border p-0'>
                    <img class='img-fluid w-100' src='img/$ligne1[7]' alt=''>
                </div>
                <div class='card-body border-left border-right text-center p-0 pt-4 pb-3'>
                    <h6 class='text-truncate mb-3'>$ligne1[1]</h6>
                    <div class='d-flex justify-content-center'>
                        <h6>$ligne1[2] DT </h6>
                    </div>
                </div>
                <div class='card-footer d-flex justify-content-between bg-light border'>
                    <a href='detail.php?id=$ligne1[0]' class='btn btn-sm text-dark p-0'><i class='fas fa-eye text-primary mr-1'></i>View Detail</a>
                    <a href='' class='btn btn-sm text-dark p-0'><i class='fas fa-shopping-cart text-primary mr-1'></i>Add To Cart</a>
                </div>
            </div>");
                $i++;}
                    
                  }?>
                   
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


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
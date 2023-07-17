<?php
$con=mysqli_connect("localhost","WT","wt","wt");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Productdetail.css">
    <link rel="stylesheet" href="Category.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/all.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/brands.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/fontawesome.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>
    <title>Online Laptop Shopping</title>
</head>

<body>
    <div id="lp_1" class="p-2 bg-light">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid align-items-center p-0">
                <a href="#" id="logo"><img src="logo.png" alt="Satyam Acharya"></a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-center" id="navbarCollapse">
                    <div class="navbar-nav ms-auto d-flex align-items-center">
                        <div class="d-flex align-items-center" id="search">
                            <a href="">
                                <input id="search_box" type="text" value="" placeholder="Search here.....">
                            </a>
                            <a href="#">
                                <i id="search_i" class=" fa-light fa-magnifying-glass "></i>
                            </a>
                        </div>
                        <div class="nav-items nav-link">
                            <a href="#" class=""><i class="na_1 fa-duotone fa-cart-shopping"></i></a>
                        </div>
                        <div class="nav-items nav-link">
                            <a href="#" class=""><i class="na_1 fa-duotone fa-user"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid align-items-center justify-content-center">
                <a class="btn btn-lg nav_2" href=""> product</a>|
                <a class="btn btn-lg nav_2" href=""> catagory</a>|
                <a class="btn btn-lg nav_2" href="contactus.html"> contact us</a>
            </div>
        </nav>
    </div>
    <ul class="p-0">
        <div class="p-4">
            <h5 class="m-0 text-danger">PROFESSIONAL</h5>
        </div>
        <div class="card-wrapper container-fluid d-flex justify-content-around">
        <?php
                $sql = "SELECT * FROM addproduct WHERE Category='Professional'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="card" style="width: 18rem;">
                <img src="upload/<?php echo $row['Images'];?>" alt="laptop" class="card-img-top" >

                <div class="card-body">
                    <h6 class="card-title">
                        <?php echo $row['Description']; ?>
                    </h6>
                    <h6>₹<?php echo $row['Price']?></h6>
                
                </div>
            </div>
            <?php }
            }?>
        </div>
        <div class="text-end" id="more">
            <a class="btn btn-lg btn-block align-leftp" href="" role="button" id="n1" data-mdb-ripple-color="dark">View
                More</a>
        </div>
        </div>
        <div class="p-4">
            <h5 class="m-0 text-danger">GAMING</h5>
        </div>
        <div class="card-wrapper container-fluid d-flex justify-content-around">
            <?php
                $sql = "SELECT * FROM addproduct WHERE Category='Gaming'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>

            <div class="card" style="width: 18rem;">
                <img src="upload/<?php echo $row['Images']; ?>" alt="laptop" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">
                        <?php echo $row['Description']; ?>
                    </h6>
                    <h6>₹<?php echo $row['Price']?></h6>

                </div>
            </div>
            <?php }
            }?>
        </div>
        <div class="text-end  " id="more">
            <a class="btn btn-lg btn-block align-left" href="" role="button" id="n1" data-mdb-ripple-color="dark">View
                More</a>
        </div>
        </div>
        <div class="p-4">
            <h5 class="m-0 text-danger">CREATORS</h5>
        </div>
        <div class="card-wrapper container-fluid d-flex justify-content-around">
            <?php
                $sql = "SELECT * FROM addproduct WHERE Category='Creator'";
                $result = mysqli_query($con, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>

            <div class="card" style="width: 18rem;">
            <img src="upload/<?php echo $row['Images']; ?>" alt="laptop" class="card-img-top">

                <div class="card-body">
                    <h6 class="card-title">
                        <?php echo $row['Description']; ?>
                    </h6>
                    <h6>₹<?php echo $row['Price']?></h6>
                </div>
            </div>
             <?php }
            }?>
        </div>
        <div class="text-end" id="more">
            <a class="btn btn-lg btn-block align-left" href="" role="button" id="n1" data-mdb-ripple-color="dark">View
                More</a>
        </div>
        </div>
    </ul>
    <section id="s_footer" class="container-fluid p-1">
        <div class=" bg-light pt-4 pr-4 pl-4 pb-2">
            <div id="sf1" class="row">
                <div class="col d-flex justify-content-center h3 text-danger ">
                    FOLLOW US
                </div>
            </div>
            <hr style="color:black;">
            <div id="sf2" class="row d-flex  pt-4 ">
                <div class="col d-flex justify-content-center ">
                    <a href="#"><i class="fa-brands fa-linkedin-in" style="color: #0072b1;"></i></a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-instagram" id="insta"></i></a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-telegram" style="color: #0088cc;"></i></a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-github" style="color: #171515;"></i></a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-twitter" style="color: #1da1f2;"></i></a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="#"><i class="fa-brands fa-facebook" style="color: #4267b2;"></i></a>
                </div>
            </div>
            <br>
            <div id="sf3" class="row ">
                <div class="col d-flex justify-content-center ">
                    Copyright&nbsp;<i class="fa-regular fa-copyright"></i>&nbsp;2023&nbsp;<b
                        class="text-danger">LPShopping</b>&nbsp;|
                    Designed
                    by&nbsp;
                    <b class="text-danger">Satyam Acharya</b>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
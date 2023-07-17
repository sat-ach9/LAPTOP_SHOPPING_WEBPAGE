<?php
$con = mysqli_connect("localhost","WT","wt","wt");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$pid = $_GET['id'];
$query = "SELECT * FROM addproduct WHERE pid='".$pid."'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Productdetail.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/all.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/brands.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/light.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/light.min.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/fontawesome.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/duotone.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/regular.css">

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
    <div class="d-flex   ">
        <div class="w-100 border border-1 border-danger rounded-4 m-3 bg-light">
            <form action="" class="">
                <div class="p-4">
                    <h1 class="m-0 text-danger">PRODUCT</h1>
                </div>
                <div class="p-4 w-50">

                    <select class="w-100 border-danger" name="cars" id="category">
                        <option value="Gen">General</option>
                        <option value="Pro">Professional</option>
                        <option value="Game">Gaming</option>
                    </select>
                </div>
                <div>
                    <div class="p_d1">
                        <div class="row border border-1 border-dark rounded-4 p-1">
                            <div class="col-xl-4 ">
                                <img src="upload/<?php echo $row['Images'];?>" alt="laptop" >
                            </div>
                            <div class="col-xl-8">
                                <div class="row p_d2">
                                    <div class="col-sm-6 ">
                                        <div class="row pro_x">
                                            <label class="col-sm-3 d-flex align-items-center"
                                                for=""><b>NAME:</b></label>
                                            <!-- <input type="text" class="col-sm-9 brand" name="name" id="pr_name"> -->
                                            <p class="col-sm-9 brand d-flex align-items-center m-0"><b class="text-danger">
                                                <?php echo $row['Name'];?>
                                            </b>
                                            </p>
                                        </div>
                                        <!-- <div class="row pro_x">
                                            <label class="col-sm-3 d-flex align-items-center"
                                                for=""><b>BRAND:</b></label>
                                            <p class="col-sm-9 brand d-flex align-items-center m-0"><b>Acer</b>
                                            </p>

                                        </div> -->
                                        <div class="row pro_x">
                                            <label class="col-sm-3 d-flex align-items-center"
                                                for=""><b>PRICE:</b></label>
                                            <p class="col-sm-9 brand d-flex align-items-center m-0"><b>₹<?php echo $row['Price'];?></b>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="fct">
                                            <div class="bttn">
                                                <button id="udt" class="btn">BUY</button>
                                            </div>
                                            <div class="bttn">
                                                <button id="udt" class="btn">ADD TO CART</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                        <div id="spec">
                            <div class="specs">
                                Specification:
                            </div>
                            <div class="descip">
                                <table class="table">
                                    <tbody>
                                        <tr class="f_size">
                                            <!-- <th scope="row">Brand:</th>
                                            <td>Aser</td> -->
                                            <?php echo $row['Description']; }?>
                                        </tr>
                                        <!-- <tr>
                                            <th scope="row">Model Name</th>
                                            <td>Aspire 5 Gaming</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Screen Size</th>
                                            <td>15.6 Inches</td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">Colour</th>
                                            <td>Gray</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Hard Disk Size</th>
                                            <td>512 GB</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">CPU Model</th>
                                            <td>Core i5</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">RAM Memory</th>
                                            <td>16 GB</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Operating System</th>
                                            <td>Windows 11 Home</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Special Feature</th>
                                            <td>Aluminum Top Cover, Wi-Fi 6, Elevated Design, Thunderbolt 4</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Processor Brand</th>
                                            <td>INTEL</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Processor Speed</th>
                                            <td>3.3 GHz</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Graphics Card Description</th>
                                            <td>Dedicated</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Graphics Card Ram Size</th>
                                            <td>4 GB</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Graphics RAM Type</th>
                                            <td>GDDR6</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Graphics Card Interface</th>
                                            <td>AGP</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Graphics Coprocessor</th>
                                            <td>NVIDIA GeForce RTX 2050</td>
                                        
                                        </tr>
                                        <tr>
                                            <th scope="row">Resolution</th>
                                            <td>1080p</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Display Type</th>
                                            <td>FHD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Screen Resolution</th>
                                            <td>1920 * 1080(FHD) Pixels</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Total USB ports</th>
                                            <td>4</td>
                                        </tr>                                       
                                        <tr>
                                            <th scope="row">Item Weight</th>
                                            <td >1 kg 800 g</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    

</body>

</html>
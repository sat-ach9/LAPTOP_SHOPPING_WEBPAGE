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

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Productpage.css">

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
                    <!-- <div class="navbar-nav ">

                        <a href="#" class="nav-item nav-link">Login</a>
                    </div> -->
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
    <div class=" ">
        <div class="w-100 ">
            <form action="">
                <div class="p-4">
                    <h1 class="m-0 text-danger">PRODUCT</h1>
                </div>

                <div class="p-4">

                    <select class="w-100 border-danger" name="cars" id="category">
                        <option value="Gen">General</option>
                        <option value="Pro">Professional</option>
                        <option value="Game">Gaming</option>
                    </select>
                </div>

                <div id="lp_opt" class="p-4">
                    <div class="row">
                        <div id="filler" class="col-xl-2">
                            
                            <td>
                                <section class="justify-content-center">
                                    <div id="items" class="my-4 ">
                                        <table class="table ms-5" style="float: left;">
                                            <tbody id="tableBody border border-2 text-center">
                                                <tr class="trc">
                                                    <td class="text-center">
                                                        <h4>Filter</h4>
                                                    </td>
                                                </tr>
                                                <tr class="trc">
                                                    <td class="col-sm-4"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                                            Brand</b>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Lenovo</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Hp</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Asus</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Dell</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Samsung</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">acer</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Apple</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="trc">
                                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                                            Price</b>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">₹20,000-₹30,000</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">₹30,000-₹50,000</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">₹50,000-₹60,000</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">₹60,000-₹80,000</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">₹80,000-more</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="trc">
                                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                                            Processor</b>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Core i5</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Core i3</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Core i7</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2"> Ryzen 7 Quad Core</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2"> Ryzen 5 Quad Core</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="trc">
                                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                                            Screen size</b>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Below 12 inch</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">12 inch - 12.9 inch</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">13 inch - 13.9 inch</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">14 inch - 14.9 inch</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">16 inch - 17.9 inch</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">Above 18 inch</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="trc">
                                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                                            SSD Capacity</b>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">512 GB</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">128 GB</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="trc">
                                                    <td scope="row"><b><i class="fas fa-arrow-square-right" style="color: #d61b3c;"></i>
                                                            RAM</b>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">4 GB</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2" value="something">
                                                            <label class="form-check-label" for="check2">8 GB</label>
                                                        </div>
                                                            <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="check2" name="option2"
                                                                value="something">
                                                            <label class="form-check-label" for="check2">16 GB</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </section>
                            </td>
                        </div>
                        <div id="opts" class="col-xl-10 ">
                            <?php
                                $sql = "SELECT * FROM addproduct";
                                $result = mysqli_query($con, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) { ?>


                            <div class="d-flex align-items-center">
                                                                
                                <div class="p-3">
                                    <center>
                                        <img src="upload/<?php echo $row['Images']; ?>" class="pn_x" alt="...">
                                    </center>
                                </div>
                                <div class="">
                                    <div class="d-flex">
                                        <div class="info">
                                            <a href='Productdetail.php?id=<?php echo $row['pid']?>' >
                                            <p>
                                                <?php echo $row['Description'];?>
                                            </p>
                                        </a>
                                            <p>₹<?php echo $row['Price']; ?></p>
                                        </div>
                                        <div id="btnn" class="p-4 ">
                                            <div class="bttn">
                                                <button id="udt" class="btn ">BUY</button>
                                            </div>
                                            <div class="bttn">
                                                <button id="udt" class="btn   ">ADD TO CART</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <br>
                            <?php }
                            } ?>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
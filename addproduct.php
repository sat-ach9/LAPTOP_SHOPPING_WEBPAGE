<?php
$con = mysqli_connect("localhost","WT","wt","wt");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// $id = $_GET['id'];
//  $user_id        = $_GET['id'];
// $query = "SELECT * FROM addproduct WHERE pid='".$user_id."'";
// $result = mysqli_query($con, $query);
// while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//     ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS------------------------------------- -->

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="addproduct.css">
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
            </div>

        </nav>
    </div>
    <div id="registration" class="container  p-4 ">
        <div id="sf1" class="row">
        </div>
        <div class="container d-block border border-2  rounded-4 w-50 p-2 bg-light">
            <div class="col h3 text-danger p-3">
                Add Product
            </div>
            <form action="action.php" method="POST" enctype="multipart/form-data">
                <div class="row f_field">
                    <label class="col-sm-3" for="fname">Enter Name</label>
                    <input class="col-sm-9 justify-content-start f_in" type="text" id="e_name" name="fullname" value="" required>
                </div>
                <div class="row f_field">
                    <label class="col-sm-3" for="lname">Enter Category</label>
                    <input class="col-sm-9 justify-content-start f_in" type="text" id="e_category" name="category" value="" required>
                </div>
                <div class="row f_field">
                    <label class="col-sm-3" for="mail">Enter Description</label>
                    <input class="col-sm-9 justify-content-start f_in " type="text" id="e_desc" name="desc" value="" required>
                </div>
                <div class="row f_field">
                    <label class="col-sm-3" for="pwd">Enter Price</label>
                    <input class="col-sm-9 justify-content-start f_in " type="number" id="e_price" name="price" value="" required>
                </div>
                <div class=" f_field">
                    <label class="" for="cpwd">Upload Product Image</label><br>
                </div>
               

                <div class="">
                    <input class=" f_in file " type="file" id="cpwd" name="image" value="" required>
                </div>
                 
                <div class="d-flex justify-content-center f_field">
                    <button class="sign_up" type="submit" name="upload">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>


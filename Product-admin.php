<?php
//Connection 

$con=mysqli_connect("localhost","WT","wt","wt");
if ($con)
{

}
else{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS------------------------------------- -->

    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="Product-admin.css">


    <!-- fontawesome ------------------------------->

    <link rel="stylesheet" href="./FA5PRO-master/css/all.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/brands.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/light.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/light.min.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/fontawesome.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/duotone.css">
    <link rel="stylesheet" href="./FA5PRO-master/css/regular.css">

    <!-- bootstrap---------------------------------- -->

    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.0-alpha2-dist/js/bootstrap.min.js"></script>

  
    <title>Online Laptop Shopping</title>
</head>

<body>

    <!-- navber ----------------------------------------------------------------------------------------------------------------->

    <div id="lp_1" class="p-2 bg-light ">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid align-items-center p-0">
                <a href="home.html" id="logo"><img src="logo.png" alt="Satyam Acharya"></a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

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

                    <div id="add_prod" class="btn ">Add Product</div>
                </div>
                <div class="p-4">

                    <select class="w-100 border-danger" name="cars" id="category">
                        <option value="Gen">General</option>
                        <option value="Pro">Professional</option>
                        <option value="Game">Gaming</option>
                    </select>
                </div>
                <div class="p-4">
                    <table cellpadding="1"
                        class="table table-bordered table-hover text-center border border-danger rounded-2">
                        <thead>
                            <tr class="text-danger align-items-center">
                                <th scope="col">IMAGE</th>
                                <th scope="col">NAME</th>
                                <th scope="col">CATAGORY</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">PRIZE</th>
                                <th scope="col">ACTION</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                        $sql = "SELECT * FROM addproduct";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                        <td class="image">
                        <img src="upload/<?php echo $row['Images']; ?>" alt="" 
                        srcset="" style="width:300px; height:300px;" />
                        </td>
                        <td class="name">
                        <?php echo $row['Name']; ?>
                        </td>
                        <td class="catagory">
                        <?php echo $row['Category']; ?>
                        </td>
                        <td class="description">
                        <?php echo $row['Description']; ?>
                        </td>
                        <td class="price">₹
                        <?php echo $row['Price']; ?>
                        </td>
                        <td class="action">
                        <a href="./edit-product.php?id=<?php echo $row['pid']; ?>">edit</a><br />
                        <a href="./action.php?id=<?php echo $row['pid']; ?>&delete=1">delete</a>
                        </td>
                        </tr>
                        <?php }
                        } ?>

                        </tbody>
                    </table>
                </div>


            </form>
        </div>
    </div>





</body>

</html>
<?php
//Connection 
$con=mysqli_connect("localhost","WT","wt","wt");
if ($con)
{
}
else{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


error_reporting();
if(isset($_POST["register"])) 
{
    // echo "hii";
        $user_id        = $_POST['id'];
        $FirstName    = $_POST['fullname'];
        $LastName = $_POST['lastname'];
        $Email    = $_POST['email'];
        $Password      = md5($_POST['password']);
        $DOB     = $_POST['dob'];

        $q1  =  "INSERT INTO registration VALUES('$user_id','$FirstName','$LastName','$Email', '$Password', '$DOB')";
        $d1   =  mysqli_query($con,$q1);
        print_r($d1);
        if($d1)
        {
        
            header('Location:login.html');
        }
        else
        {
            echo "Error : Try again later";
        }
} 

if(isset($_POST["login"]))
{

    $Email    = $_POST['email'];
    $Password      = md5($_POST['password']);
    $q2 = "SELECT * FROM registration WHERE Email = '$Email' and Password = '$Password'";
    $d2 = mysqli_query($con, $q2);
    $row = mysqli_fetch_array($d2,MYSQLI_ASSOC);
    $count = mysqli_num_rows($d2);
    if($count==1){
        echo "hello";
    }
    else{
        echo "no";
    }
}


if(isset($_POST['alog_in']))
{
    $Email    = $_POST['aemail'];
    $Password      = md5($_POST['apassword']);
    $q2 = "SELECT * FROM adminlogin WHERE Email = '$Email' and Password = '$Password'";
    $d2 = mysqli_query($con, $q2);
    $row = mysqli_fetch_array($d2,MYSQLI_ASSOC);
    $count = mysqli_num_rows($d2);
    if($count==1){
        echo "hello";
    }
    else{
        echo "none";
    }
}
else{
    echo "error";
}


if(isset($_POST['upload'])) {

        $location="upload/";
        $Name = $_POST['fullname'];
        $Category = $_POST['category'];
        $Description = $_POST['desc'];
        $Price  = $_POST['price'];
        $file1=$_FILES['image']['name'];
        $file_tmp1=$_FILES['image']['tmp_name'];
        $data =[];
        $data=[$file1];
        $images=implode('',$data);
        $query1  = "INSERT INTO addproduct (Name,Category,Description,Price,Images) VALUES('".$Name."','".$Category."','".$Description."','".$Price."','".$images."')";
        $fire1 = mysqli_query($con,$query1);
        if($fire1)
        {
            header('Location:Product-admin.php' );
            move_uploaded_file($file_tmp1, $location.$file1);  
         }
         else
         {
             echo "Error : Try again later";
         }
}

if (isset($_POST['editProduct'])) {
 $pid = $_POST['id'];
 $pname = $_POST['fullname'];
 $Category = $_POST['category'];
 $desc = $_POST['desc'];
 $price = $_POST['price'];
 if (isset($_FILES)) {
        $location = "upload/";
        $file = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];


 $query = "UPDATE addproduct SET Name = '" . $pname . "',Category = '" . $Category . 
"',Description = '" . $desc . "',Price = " . $price . ",Images='" . $file . "' WHERE pid=" . 
$pid;
 if (mysqli_query($con, $query)) {
//  $imgname = "image" . mysqli_insert_id($con) . "." . $file;
 move_uploaded_file($file_tmp, $location . $file);
 header('Location: Product-admin.php');
 die();
 } else {
    echo "error";
 echo "Error: " . $query . "<br>" . mysqli_error($conn);
 }
 } 
}

if (isset($_GET["delete"])) {
 $query = "DELETE FROM addproduct WHERE pid=" . $_GET['id'];
 if (mysqli_query($con, $query)) {
 header('Location: Product-admin.php');
 die();
 } else {
 echo "Error: " . $query . "<br>" . mysqli_error($conn);
 }
}

//  else {
//   $query = "UPDATE addproduct SET Name = '".$pname ."',Catagory = '" . $Category . 
// "',Description = '" . $desc . "',Price = " . $price . ",Images='" . $imgType . "' WHERE pid=" . 
// $pid;
//  if (mysqli_query($con, $query)) {
//  header('Location: Product-admin.php');
//  die();
//  } else {
//  echo "Error: " . $query . "<br>" . mysqli_error($conn);
//  }
//  }




?>

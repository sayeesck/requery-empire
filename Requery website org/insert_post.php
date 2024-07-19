<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("location: login.php");
    } else {

include("includes/connect.php");

if(isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    
    if($title =='' or $date =='') {
        echo "<script>alert('Required fields must be filled.')</script>";
        echo "<script>window.open('insert_post.php', '_self')</script>";
        //header('location: insert_post.php');
        exit();
    }
    
    if($image_type == "image/jpeg" or $image_type == "image/jpg" or $image_type == "image/png" or $image_type == "image/gif") {
        if($image_size <= 5242880) {
            move_uploaded_file($image_tmp, "images/$image_name");
        } else {
            echo "<script> alert ('Image size is larger than 5MB')</script>";
            //echo "<script>window.open('insert_post.php', '_self')</script>";
            exit();
        }
    } else {
        echo "<script> alert ('Image type is invalid.')</script>";
        echo "<script>window.open('insert_post.php', '_self')</script>";
        exit();
    }
    
    $query = "insert into notice (cat_id, title, date, description, image_name) values ('$category', '$title', '$date', '$description', '$image_name')";
    
    if(mysql_query($query)) {
       echo "<script> window.open('index.php?view=view&insert=Notice has been published' , '_self')</script>";
       exit();
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">

<div>
    <?php include("includes/header.php"); ?>
</div>

<body>

<div>
    <?php include("includes/navbar.php"); ?>
</div> 

<!-- ADMIN Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Insert New Post
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form method="post" action="insert_post.php" enctype="multipart/form-data">
                  <fieldset class="form-group">
                    <label for="postTitle">Notice Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                    </fieldset>
                  <fieldset class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter date">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category">
                      <option>Departmental</option>
                      <option>University</option>
                    </select>
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="2"></textarea>
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="exampleInputFile">Upload Image</label>
                    <input type="file" class="form-control-file" name="image">
                  </fieldset>
                  <hr>
                  <button type="submit" name="submit" class="btn btn-primary">Post Now</button>
                </form>
                <!-- <a class="" href="index.php"><button class="btn btn-primary inline">Back</button></a> -->
            </div> 
        </div>       
        <hr>


    </div>
    <!-- /.container -->
    
    <div class="container"> 
    <?php include("includes/footer.php"); ?> 
    </div>
    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>


<?php } ?>


























    

<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <head><link rel="stylesheet" href="style.css" type="text/css" /></head>
<?php

include("includes/connect.php");

if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $semester = $_POST['semester'];
    $title = $_POST['title'];
    
    
    $query = "insert into form (name, email, semester, title, date, description) values 
            ('$name', '$email', '$semester', '$title', '$date', '$description')";
    
    if(mysql_query($query)) {
       ?>
<?php
        header("form.php");
       exit();
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">

<body>
<div id="header">
    <div id="left">
    <label>Complaint cell</label>
    </div>
    
</div>

</body>
 

<!-- ADMIN Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header col-md-6 col-md-offset-3">Insert New Complaint
                </h1>
            </div>
        </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="complaint.php" enctype="multipart/form-data">
                  <fieldset class="form-group">
                    <label for="postTitle">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                    </fieldset>
                    <fieldset class="form-group">
                    <label for="postTitle">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" required>
                    </fieldset>
                    <fieldset class="form-group">
                    <label for="postTitle">Semester</label>
                    <input type="text" class="form-control" name="semester" placeholder="Enter semester" required>
                    </fieldset>
                  <fieldset class="form-group">
                    <label for="postTitle">Complaint Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                    </fieldset>
                  <fieldset class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" name="date" placeholder="Enter date" required>
                  </fieldset>
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                  </fieldset>
                  <hr>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </form>
                <!-- <a class="" href="index.php"><button class="btn btn-primary inline">Back</button></a> -->
            </div> 

        </div>       
        <hr>
    </div>
    <!-- /.container -->
    
    <div class="container"> 
    <?php // include("includes/footer.php"); ?> 
    </div>
    
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>




























    

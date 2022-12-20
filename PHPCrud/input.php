<!-- Connection With DB -->
<?php
include 'connection.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <!-- Title -->
 <title>PHP CRUD</title>
  <meta charset="utf-8">
  <!-- Link -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
  <style>
    .jumbotron {
      background-color: rgba(119, 143, 171, 0.85);
      height: 200px;
    }

    .navbar {
      width: 60%;
      margin-left: 240px;
      border-bottom-left-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .content {
      margin-top: -55px;
      margin-left: 40px;
    }
  </style>
</head>

<body>


  <div class="jumbotron ">
    <h1 align="center">CRUD OPERATION</h1>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark ">
      <marquee loop="INFINITE" onMouseOver="this.stop()" onMouseOut="this.start()" behavior="alternate">
        <ul class="navbar-nav">

          <li class="nav-item ">
            <button type="button" class="btn btn-secondary mr-5">INSERT</button>
            <a href="view.php"><button type="button" class="btn btn-success mr-5">READ</button></a>
            <a href=update.php><button type="button" class="btn btn-info mr-5">UPDATE</button></a>
            <a href="Delete.php"><button type="button" class="btn btn-warning mr-5">DELETE</button></a>
          </li>
        </ul>
      </marquee>
    </nav>

  </div>

  <section class="content ">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6" style="margin-left:300px;padding-top:3rem">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title ">ADD MEMBER</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label><b>Your Good Name</b></label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label><b>Email address</b></label>
                  <input type="text" class="form-control" name="email" placeholder="Enter Your email">
                </div>
                <div class="form-group">
                  <label><b>Phone Number</b></label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                </div>

                <!-- <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="password" class="form-control"  name="password"  placeholder="Enter Your password">
                  </div>
                 
                  <div class="form-group">
                    <label><b>Address</b></label>
                    <input type="text" class="form-control"  name="adress"  placeholder="Enter Your password">
    </div> -->
                <div class="form-group">
                  <label><b>Upload Image</b></label>
                  <input type="file" class="form-control" name="image" placeholder="Insert Your Image Here">
                </div>


              </div>

              <input type="submit" name="submit" class="btn btn-primary" onClick="return check()" value="ADD MEMBER">

            </form>
<!-- PHP code -->
            <?php
            if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $filename = $_FILES['image']['name'];
              $tempname = $_FILES['image']['tmp_name'];

              $folder = "pic/" . $filename;
              move_uploaded_file($tempname, "pic/" . $filename);
              if ($name != "" && $email != "" && $phone != "" && $filename != "") {
                $query = "INSERT INTO form(name,email,phone,image) VALUES('$name','$email','$phone','$folder')";
                $data = mysqli_query($connection, $query);
                if ($data) {
                  echo " <font color='green'>Data Insert";
                } else {
                  echo "<font color='red'>Data Not Insert";
                }
              }
            } else {
              echo "<br><font color='red'> <h3>   All Feild Required</h3>";
            }




            ?>


</body>

</html>
<!-- <script>
    function check()
    {
        return confirm("Are You Sure");
    }
</script> -->
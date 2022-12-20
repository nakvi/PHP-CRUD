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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <!-- CSS -->
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
              <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
              <div class="card-body">
                <div class="form-group">
                  <label><b>Your Good Name</b></label>
                  <input type="text" class="form-control" name="name" value="<?php echo $_POST['name'] ?>">
                </div>
                <div class="form-group">
                  <label><b>Email address</b></label>
                  <input type="text" class="form-control" name="email" value="<?php echo $_POST['email'] ?>">
                </div>
                <div class="form-group">
                  <label><b>Phone Number</b></label>
                  <input type="text" class="form-control" name="phone" value="<?php echo $_POST['phone'] ?>">
                </div>

                <!-- <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="password" class="form-control"  name="password"  placeholder="Enter Your password">
                  </div>
                 
                  <div class="form-group">
                    <label><b>Address</b></label>
                    <input type="text" class="form-control"  name="adress"  placeholder="Enter Your password">
    </div> -->
                <!-- <div class="form-group">
                    <label><b>Upload Image</b></label>
                    <input type="file" class="form-control"  name="image" >
                  </div>  -->


              </div>

              <input type="submit" name="submit" class="btn btn-danger" value="UPDATE MEMBER">

            </form>
            <!-- PHP Code -->
            <?php
            if (isset($_POST['submit'])) {
              $name = $_POST['name'];
              $id = $_POST['id'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $query = "UPDATE form  SET name='$name',email='$email',phone='$phone' WHERE id='$id'";
              $data = mysqli_query($connection, $query);
              if ($data) {
                echo "<font color='green'>Record Sucessfully <a href='view.php' class='btn btn-success m-2'> Check Update List Here</a>";
              } else {
                echo "<font color='green'>Record Not Update <a href='#' class='btn btn-success m-2'> Check Update List Here</a>";
              }
            } else {
              echo "Data Not Changed";
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
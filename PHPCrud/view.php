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
            <a href="input.php"> <button type="button" class="btn btn-secondary mr-5">INSERT</button></a>
            <a href="view.php"><button type="button" class="btn btn-success mr-5">READ</button></a>
            <a href=update.php><button type="button" class="btn btn-info mr-5">UPDATE</button></a>
            <a href="Delete.php"><button type="button" class="btn btn-warning mr-5">DELETE</button></a>
          </li>
        </ul>
      </marquee>
    </nav>

  </div>

  <div class="container">
    <div class="row">
      <div class="col-11">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>

            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <?php
            $query = "SELECT *FROM form";
            $data = mysqli_query($connection, $query);
            $total = mysqli_num_rows($data);
            if ($total != 0) {
            ?>
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                </thead>
              <?php
              while ($res = mysqli_fetch_assoc($data)) {
                echo " <tbody>
                <tr>
                <form action='update.php' method='POST'>
                  <td>" . $res['id'] . "</td>
                  <td>" . $res['name'] . "</td>
                  <td>" . $res['email'] . "</td>
                  <td>" . $res['phone'] . "</td>
                  <td><img src=" . $res['cv.jpg'] . " height='80' width='80'/></td>
                  <td><a href='delete.php?id=$res[id]' class='btn btn-danger'>DELETE</a></td>
                  <input type='hidden' name='id' value=" . $res['id'] . ">
                  <input type='hidden' name='name' value=" . $res['name'] . ">
                  <input type='hidden' name='email' value=" . $res['email'] . ">
                  <input type='hidden' name='phone' value=" . $res['phone'] . ">
                  <td><button type='submit' class='btn btn-primary'>Edit</button></td>
                </tr>
                </form>
              </tbody>";
              }
            }
              ?>


              </table>



          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>



</body>

</html>
<!-- <script>
    function check()
    {
        return confirm("Are You Sure");
    }
</script> -->
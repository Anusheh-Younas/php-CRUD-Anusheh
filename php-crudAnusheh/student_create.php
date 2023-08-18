<?php
session_start();
$upload_dir = 'uploadimages/';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Php-imge-crud</title>
  </head>
  <body>
  <div class="container" style="margin:80px">
  <?php include("message.php");?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info"> 
                        <h4 class="text-white">Student add <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                        <label> Student Name</label>
                        <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="mb-3">
                        <label> Student class</label>
                        <input type="text" name="class" required class="form-control">
                        </div>
                        <div class="mb-3">
                        <label> Student email</label>
                        <input type="email" name="email" required class="form-control">
                        </div>
                        <div class="mb-3">
                        <label> Student course</label>
                        <select type="text" name="course" id="" class="form-select" required>
                            <option value=""> Select Course</option>
                            <option value="bscs">BSCS</option>
                            <option value="msit">MSIT</option>
                            <option value="web">Web development</option>
                            <option value="graphic">Graphic designer</option>
                        </select>
                        <!-- <input type="text" name="course" required class="form-control"> -->
                        </div>
                        <div class="mb-3">
                        <label> Gender</label>
                        <input type="radio" name="gender" value="male"> <span>Male</span>
                        <input type="radio" name="gender" value="female"> <span>Female</span>
                        </div>
                        <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" required class="form-control">
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="save_student" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

</body>
</html>
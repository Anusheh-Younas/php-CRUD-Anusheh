<?php
// session_start();
require 'dbcode.php';
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

    <title>Student Edit</title>
  </head>
  <body>
  <div class="container" style="margin-left:400px; margin-top:100px">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header bg-info"> 
                        <h4 class="text-white">Student View  <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $student_id= mysqli_real_escape_string($con, $_GET['id']);

                             $query= "SELECT * FROM students WHERE id='$student_id'";
                             $query_run= mysqli_query($con, $query);
                             if(mysqli_num_rows($query_run)>0){
                               $student= mysqli_fetch_array($query_run);
                               ?>
                               
                        <div class="mb-3">
                        <label> Student Name</label>
                        <p class="form-control">
                        <?php echo $student_id ;?>
                        </p>
                        </div>
                        <div class="mb-3">
                        <label> Student class</label>
                        <p class="form-control">
                        <?php echo $student['class'] ;?>
                        </p>
                        </div>
                        <div class="mb-3">
                        <label> Student email</label>
                        <p class="form-control">
                        <?php echo $student['email'] ;?>
                        </p>
                        </div>
                        <div class="mb-3">
                        <label> Student course</label>
                        <p class="form-select">
                        <?php echo $student['course'] ;?>
                         </p>
                        </div>
                        <div class="mb-3">
                        <label>Gender</label>
                        <p class="form-control">
                        <?php echo $student['gender'] ;?>
                         </p>
                        </div>
                        <div class="mb-3">
                        <label>Image</label>
                        <p>
                        <?php echo $student['image'] ;?>
                         </p>
                        </div>

                        <?php
                               //print_r($student);
                             }
                             else
                             {
                                echo "<h4> No such Id found</h4>";
                             }
                        }
                        ?>
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
<?php
session_start();
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
  <div class="container" style="margin:80px">
  <?php include("message.php");?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info"> 
                        <h4 class="text-white">Student Edit <a href="index.php" class="btn btn-danger float-end">Back</a></h4>
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
                        <form action="code.php" method="POST"  enctype="multipart/form-data">
                            <input type="hidden" name="student_id" value="<?php echo $student_id ;?>">
                        <div class="mb-3">
                        <label> Student Name</label>
                        <input type="text" name="name" value="<?php echo $student['name'] ;?>" class="form-control">
                        </div>
                        <div class="mb-3">
                        <label> Student class</label>
                        <input type="text" name="class" value="<?php echo $student['class'] ;?>"class="form-control">
                        </div>
                        <div class="mb-3">
                        <label> Student email</label>
                        <input type="email" name="email" value="<?php echo $student['email'] ;?>"class="form-control">
                        </div>
                        <div class="mb-3">
                        <label> Student course</label>
                        <select name="course" class="form-select">
                            <option> Select Course</option>
                            <option value="bscs" 
                            <?php 
                        if($student== "bscs"){
                          echo "selected";
                        }
                          ?>>BSCS</option>
                            <option value="msit"
                            <?php 
                        if($student== "msit"){
                          echo "selected";
                        }
                          ?>>MSIT</option>
                            <option value="web"
                            <?php 
                        if($student== "web"){
                          echo "selected";
                        }
                          ?>>Web development</option>
                            <option value="graphic"
                            <?php 
                        if($student== "graphic"){
                          echo "selected";
                        }
                          ?>>Graphic designer</option>
                        </select>
                        <!-- <input type="text" name="course" required class="form-control"> -->
                        </div>
                        <!-- <div class="mb-3">
                        <label> Student course</label>
                        <input type="text" name="course"value="<?php echo $student['course'] ;?>" class="form-control">
                        </div> -->
                        <div class="mb-3">
                        <label> Gender</label>
                        <input type="radio" name="gender" value="male" required
                        <?php 
                        if($student== "male"){
                          echo "checked";
                        }
                          ?>
                          > <span>Male</span>
                        <input type="radio" name="gender"  value="female" required
                        <?php 
                        if($student== "female"){
                          echo "checked";
                        }
                          ?>
                        > <span>Female</span>
                        </div>

                        <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image"value="<?php echo $student['image'] ;?>" class="form-control">
                        </div>
                        <div class="mb-3">
                        <button type="submit" name="update_student" class="btn btn-primary">Update_student</button>
                        </div>
                        </form>
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
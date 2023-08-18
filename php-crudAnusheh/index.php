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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <title>Php-imge-crud</title>
  </head>
  <body>
  <div class="container" style="margin:80px">
  <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info"> 
                        <h4 class="text-white">Students Details<a href="student_create.php" class="btn btn-primary float-end">Add Students</a></h4>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>Student Name</th>
                                <th>Student class</th>
                                <th>Student Email</th>
                                <th>Student Course</th>
                                <th>Gender</th>
                                <th>Image</th>

                                <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                 $query="SELECT * FROM students";
                                 $query_run=mysqli_query($con, $query);
                                 if(mysqli_num_rows($query_run) >0)
                                 {
                                   foreach($query_run as $student)
                                   {

                                  //echo $student['name'];
                                  ?>
                                  <tr>
                                    <td><?php echo $student['id'];?></td>
                                    <td><?php echo $student['name'];?></td>
                                    <td><?php echo $student['class'];?></td>
                                    <td><?php echo $student['email'];?></td>
                                    <td><?php echo $student['course'];?></td>
                                    <td><?php echo $student['gender'];?></td>
                                    <td><img src="<?php echo $upload_dir.$student['image'] ?>" height="40"></td>
                                    <td>
                                      <a href="view.php?id=<?php echo $student['id'];?>" class="btn btn-success btn-sm"><i class="fa fa-eye"style="color:white"></i></a>
                                      <a href="edit.php?id=<?php echo $student['id'];?>" class="btn btn-info btn-md"><i class="fa fa-user-edit" style="color:white"></i></a>
                                      <form action="code.php" method="POST" class="d-inline">
                                      <button type="submit" name="delete_student" value="<?php echo $student['id'];?>" class="btn btn-danger btn-md"><i class="fa fa-trash-alt"></i></button>
                                      </form>
                                    
                                    </td>

                                  </tr>
                                  <?php
                                  

                                   }
                                 }
                                 else
                                 {
                                     echo "<h4> No Record Found </h4>";
                                 }
                                ?>
                                  <tr>
                                    <td></td>

                                  </tr>
                                </tbody>
                    </table>
      
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
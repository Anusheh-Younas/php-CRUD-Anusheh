<?php
session_start();
require 'dbcode.php';
$upload_dir = 'uploadimages/';
if(isset($_POST['delete_student']))
{
    $student_id= $_POST['delete_student'];
    $query= "DELETE FROM students WHERE id='$student_id'";
    $query_run=mysqli_query($con, $query);
    if($query_run)
   {
    $_SESSION['message']= "student deleted successfully";
    header("Location:index.php");
    // exit(0);
   }
   else
   {
    $_SESSION['message']= "student not deleted successfully";
    header("Location:index.php");
    //

}
}

 if(isset($_POST['update_student']))
{
    $student_id=$_POST['student_id'];
    $name= $_POST['name'];
    $class= $_POST['class'];
    $email= $_POST['email'];
    $course= $_POST['course'];
    $gender= $_POST['gender'];
    $image=$_FILES['image'];
    //print_r($_FILES['image']);
    $imgTmp=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $imgSize = $_FILES['image']['size'];
    // $img_des="uploadimages/".$img_name;
    if( $img_name){

        $imgExt = strtolower(pathinfo( $img_name, PATHINFO_EXTENSION));

        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

        $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

        if(in_array($imgExt, $allowExt)){

            if($imgSize < 5000000){
                unlink($upload_dir.$row['image']);
                move_uploaded_file($imgTmp ,$upload_dir.$userPic);
            }else{
                $errorMsg = 'Image too large';
            }
        }else{
            $errorMsg = 'Please select a valid image';
        }
    }else{

        $userPic = $row['image'];
    }
    $query="UPDATE students SET name='$name', class='$class', email='$email', course='$course',gender='$gender', image='$userPic' WHERE id='$student_id'";
    $query_run=mysqli_query($con, $query);
    if($query_run)
   {
    $_SESSION['message']= "student updated successfully";
    header("Location:index.php");
    // exit(0);
   }
   else
   {
    $_SESSION['message']= "student does not updated successfully";
    header("Location:index.php");
    //

}
}

if(isset($_POST['save_student']))
{
    $name= $_POST['name'];
    $class= $_POST['class'];
    $email= $_POST['email'];
    $course= $_POST['course'];
    $gender= $_POST['gender'];
    $image=$_FILES['image'];
    //print_r($_FILES['image']);
    $imgTmp=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $imgSize = $_FILES['image']['size'];
    // $img_des="uploadimages/".$img_name;
    // move_uploaded_file($img_loc,'uploadimages/'.$img_name);
    if( $img_name){

        $imgExt = strtolower(pathinfo( $img_name, PATHINFO_EXTENSION));

        $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

        $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

        if(in_array($imgExt, $allowExt)){

            if($imgSize < 5000000){
                unlink($upload_dir.$row['image']);
                move_uploaded_file($imgTmp ,$upload_dir.$userPic);
            }else{
                $errorMsg = 'Image too large';
            }
        }else{
            $errorMsg = 'Please select a valid image';
        }
    }else{

        $userPic = $row['image'];
    }

    // $name= mysqli_real_escape_string($con, $POST['name']);
    // $class= mysqli_real_escape_string($con, $POST['class']);
    // $email= mysqli_real_escape_string($con, $POST['email']);
    // $course= mysqli_real_escape_string($con, $POST['course']);
   $query="INSERT INTO students (name,class,email,course,gender,image) VALUES ('$name','$class','$email','$course','$gender','".$userPic."')";
   $query_run=mysqli_query($con, $query);
   if($query_run)
   {
    $_SESSION['message']= "student inserted successfully";
    header("Location:student_create.php");
    // exit(0);
   }
   else
   {
    $_SESSION['message']= "student not created successfully";
    header("Location:student_create.php");
    // exit(0);
   }
}
?>

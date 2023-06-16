<?php
include 'connect.php';
include 'nav.php';

if(isset($_POST['submit'])){
    $studentID=$_POST['studentID'];
    $fullname=$_POST['fullname'];
    $mobile=$_POST['mobile'];
    $grades=$_POST['grades'];

    $sql = "INSERT INTO `assign_ment` (`studentID`, `fullname`, `mobile`, `grades`) VALUES ('$studentID', '$fullname', '$mobile', '$grades')";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        header("location:view.php");
                    }
               
            
            echo  "<script> alert('Successfully Added'); 
            document.location.href = ''</script>"; 
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">

    <title>ADD USER</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Student ID</label>
                <input type="number" class="form-control" placeholder="Input your Student ID" name="studentID">
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Input your full name" name="fullname">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Input your mobile" name="mobile">
            </div>
            <div class="form-group">
                <label>Grades</label>
                <input type="number" class="form-control" placeholder="Input your grades" name="grades">
            </div>
  <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
</form>
    </div>
  </body>
</html>
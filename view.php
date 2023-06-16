<?php

include 'connect.php';
include 'nav.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container my-5">
        <table class="table" border = 1 cellspacing = 0 cellpadding = 10>
  <thead>   
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Grades</th>
   </tr>
  </thead>
  <tbody>

<?php
$i = 1;
$rows = mysqli_query($conn, "SELECT * FROM assign_ment")
?>

<?php
foreach($rows as $row) : ?>
<tr>
  <td><?php echo $row["studentID"]; ?></td>
  <td><?php echo $row["fullname"]; ?></td>
  <td><?php echo $row["mobile"]; ?></td>
  <td><?php echo $row["grades"]; ?></td>
</tr>

<?php endforeach; ?>
    
  </tbody>
</table>
    </div>
    
</body>
</html>
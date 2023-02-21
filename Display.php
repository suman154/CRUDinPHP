<?php include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>Crud operation</title>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.mi
n.css"> </head>
<body>
<div class="container">
<button class="btn btn-primary my-5">
<a href="user.php"class="text-light">Add user</a>
 </button>
<table class="table">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Mobile</th>
<th scope="col">Password</th>
<th scope="col">Operation</th>
</tr>
</thead>
<tbody>
<?php
$sql = "Select * from `detail`"; 
$result = mysqli_query($con,$sql); 
if($result){ 
while($row=mysqli_fetch_assoc($result)){ 
$id = $row['Id']; 
$name = $row['Name']; 
$email = $row['Email']; 
6
$mobile = $row['Mobile']; 
$password = $row['Password']; 
echo '<tr> 
<th scope="row">' . $id . '</th> 
<td>' . $name . '</td> 
<td>' . $email . '</td> 
<td>' . $mobile . '</td> 
<td>' . $password . '</td> 
<td> 
<button class="btn btn-primary">
<a href="update.php?updateid=' . $id . '" class="textlight">Update</a></button> 
<button class="btn btn-danger">
<a href="delete.php?deleteid=' . $id . '" class="textlight">Delete</a></button> 
</td>
</tr>'; 
} 
} 
?>
</tbody>
</table>
</body>
</html>

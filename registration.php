<?php
/**
 * Returns the list of cars.
 */
require 'connect.php';

$post = file_get_contents("php://input");

$post=json_decode($post);
if(!empty($post)){

  // Escape user inputs for security
$first_name = $post->firstName;
$last_name = $post->lastName;
$username = $post->username;
$password = $post->password;


// Attempt insert query execution
$sql = "INSERT INTO users (first_name, last_name, username,password) VALUES ('$first_name', '$last_name', '$username','$password')";

if ($con->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error  record: " . $conn->error;
}


}
    
/*$userInfo = [];
$sql = "SELECT  *FROM users";

if($result = mysqli_query($con,$sql))
{
  $cr = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $userInfo[$cr]['id']    = $row['id'];
    $userInfo[$cr]['first_name'] = $row['first_name'];
    $userInfo[$cr]['last_name'] = $row['last_name'];
    $userInfo[$cr]['state'] = $row['state'];
    $userInfo[$cr]['country'] = $row['country'];
    $cr++;
  }

  
    
  echo json_encode(['data'=>$userInfo]);
}
else
{
  http_response_code(404);
}*/
<?php
/**
 * Returns the list of cars.
 */
require 'connect.php';

    
$userInfo = [];
$sql = "SELECT  *FROM users";

if($result = mysqli_query($con,$sql))
{
  $cr = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $userInfo[$cr]['id']    = $row['id'];
    $userInfo[$cr]['first_name'] = $row['first_name'];
    $userInfo[$cr]['last_name'] = $row['last_name'];
    $userInfo[$cr]['username'] = $row['username'];
    $cr++;
  }

  
    
  echo json_encode(['data'=>$userInfo]);
}
else
{
  http_response_code(404);
}
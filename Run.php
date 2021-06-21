<!-- DataBase connection & Query to display the last record inserted in Run table -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Run</title>
</head>
<body>
<?php 
  
  $conn = new mysqli('localhost','root','','ROBOT_CONTROLLERS');
  
  $stmt=$conn->prepare("SELECT * FROM Run ORDER BY id DESC LIMIT 1");
  $stmt->execute();
  $result = $stmt->get_result();
  while($row=$result->fetch_assoc()){
      echo "ON/OFF: ".$row["ON/OFF"];
  }
  
  ?>
</body>
</html>
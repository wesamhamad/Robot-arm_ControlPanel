<!-- DataBase connection & Query to display the last record inserted in Engines table -->
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <title>Engines</title>
   </head>
   <body>
   <?php 
  
  $conn = new mysqli('localhost','root','','ROBOT_CONTROLLERS');
  
  $stmt=$conn->prepare("SELECT * FROM Engines ORDER BY id DESC LIMIT 1");
  $stmt->execute();
  $result = $stmt->get_result();
  while($row=$result->fetch_assoc()){
      echo "Base: ".$row["Base"]." Shoulder:  ".$row["Shoulder"]." Elbow: ".$row["Elbow"]." Wrist: "
      .$row["Wrist"]." Gripper: ".$row["Gripper"]." Engine: ".$row["Engine"];
  }
  
  ?>
   </body>
   </html>


<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  
  <div class="topnav">
	   <a class="active" href="#contacto">Contacto</a>
  	   <a href="#celebrityburger">Celebrity Burger</a>
       <a href="#eventos">Eventos</a>
       <a href="#sucursales">Sucursales</a>
       <a href="#gintonics">Gin Tonics</a>
       <a href="#menu">Menu</a>
  </div>
  
  <h1 style="text-align:center;"><img src="images/ImagenCentral.jpg" alt="Polanco"/></h1>
  
  <table>
  
  <tr>
  	<th>EMPLOYEE_ID</th>
  	<th>FIRST_NAME</th>
  	<th>LAST_NAME</th>
  	<th>EMAIL</th>
  </tr>
  
  
  
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b858dd45b1b222";
  $password = "3be21204";
  $dbname = "ad_d51f7af0c3bff3d";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from employee";
  $result = $conn->query($sql);
  
  
  
  if ($result->num_rows > 0) {
      // output data of each row
      
      
      while($row = $result->fetch_assoc()) {?>
      <tr>
	      <td><?php echo $row['EMPLOYEE_ID']?></td>
	      <td><?php echo $row['FIRST_NAME']?></td>
	      <td><?php echo $row['LAST_NAME']?></td>
	      <td><?php echo $row['EMAIL']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </body>
 </html>

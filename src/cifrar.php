<?php
require_once 'dbconfig.php';

  $db_connection = mysqli_connect($host, $username,$password,  $dbname);
    if ($db_connection->connect_errno) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if($_POST){
    $uname=$_POST["form_name"];
    $upass=$_POST["form_pass"];
    $sql= "INSERT INTO usuarios (username, password) VALUES ('$uname', '".SHA1($upass)."')";
    if(mysqli_query($db_connection, $sql)) {
        $mensaje="User registered";
    } 
    else {
        echo "error" . $sql . "<br>" . $db_connection->error;
    }
    $db_connection->close();
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>


<body class="body-login">
  

    <!--Create the container of the page-->
    <div id="page-container-register">
      <div class="container" style="margin-top: 7%;">
        <div class="row">
            <!--We add the responsive part to the form-->
          
          <div class="col-md-3"></div>
          
          <div class="card col-md-6">

                <form action="" name="form_reg" id="form_reg" method="POST">
                <h2 style="text-align: center; margin-top: 15px;">Sign up</h2><br>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name:</label>
                        <input type="text" name="form_name" id="form_name" class="form-control" required><br>
                        <label>Password:</label>
                        <input type="password" name="form_pass" id="form_pass" class="form-control" required><br>
                    </div>
                    
                <div class="form-group">
             
                <button class="ui green basic button float-right" style="margin-top: 17px; " name="btn_reg" id="btn_reg" type="submit" >Register</button>

                </div>
                <label ><?php echo"  $mensaje"?></label>
                </div>
            
             
              
          </div>
        </div>
</div>



</body>

</html>





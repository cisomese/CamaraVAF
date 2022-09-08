<?php
include "../assets/connection/connect.php"
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/da8e7b61e5.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../assets/css/admin.css" />
    <title>Admin side</title>
  </head>
  <body>
    <div class="both">
      <div class="container">
        <form action="" class="log-in" method="POST">
          <div class="header"><h2>Log In form</h2></div>

          <div class="inputs">
            <i class="fa-solid fa-user-tie" id="icons"></i>
            <input type="text" name="username" id="inp1" placeholder="Enter name" />
            <br />
            <i class="fas fa-lock" id="icons"></i>
            <input
              type="password"
              name="password"
              id="inp2"
              placeholder="Enter password"
            />
          </div>
          <div class="show-p">
            <input type="checkbox" onclick="myFunction()" />Show Password <br />
          </div>
          <div class="rem-me">
            <label for="rem">Remember me</label>
            <input type="checkbox" id="rem" />
          </div>
          <input type="submit" name="login" class="log-btn" value="log-in" />
          <?php  
                /*
                session_start();  
                $host = "localhost";  
                $username = "root";  
                $password = "";  
                $database = "VAF"; 
                */ 
                $message = "";  
                try  
                {  
                     // $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
                     // $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
                      if(isset($_POST["login"]))  
                      {   
                          if(empty($_POST["username"]) ||  empty($_POST["password"]))  
                          {  
                                $message = '<label>All fields are required</label>';  
                          }  
                          else  
                          {  
                                $query = "SELECT * FROM user WHERE username = :username AND password = :password";  
                                $statement = $conn->prepare($query);  
                                $statement->execute(  
                                    array(  
                                          'username'     =>     $_POST["username"],  
                                          'password'     =>     $_POST["password"]  
                                    )  
                                );  
                                $count = $statement->rowCount();  
                                if($count > 0)  
                                {  
                                    $_SESSION["username"] = $_POST["username"];  
                                    header("location:adminside.php");  
                                }  
                                else  
                                {  
                                    $message = '<label>Wrong Data</label>';  
                                }  
                          }  
                      }  
                }  
                catch(PDOException $error)  
                {  
                      $message = $error->getMessage();  
                }  
                ?> 
          <div class="link"><a href="#">Forgot password</a></div>
        </form>
      </div>
    </div>

    <script>
      function myFunction() {
        var x = document.getElementById("inp2");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>
  </body>
</html>
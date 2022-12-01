<form action="addusers.php">

<!DOCTYPE html>
<html>
<?php

include_once("connection.php");
$stmt = $conn->prepare("INSERT INTO pupil (PID,Names,Name,Password)VALUES (null,:gender,:surname,:forename,:password,:house,:year,:role)");


?>

<head>

<h1 style = background-color: #fff; height: 45px; width: 360px; padding: 8% 0 0; margin: auto;position: relative;z-index: 1;background: #FFFFFF;max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24)>


<link rel="stylesheet" href="style.css">
<title> Login </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h31>Welcome to Oli's Tuck Shop</h1>
            <p1>Please enter your credentials to login.</p1>
          </div>
        </div>
        <form class="login-form">
          <input type="text" placeholder="name"/>
          <input type="password" placeholder="password"/>
          <button>login</button>
          <p class="message">Not registered? <a href="#">Login</a></p>
        </form>
      </div>
    </div>

    
  

</body>
</body>
</html>





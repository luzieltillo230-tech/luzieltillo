<?php
session_start();
require  'db.php';
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $stmt = $pdo->prepare("SELECT* FROM usersWHERE username =? AND password=?");
    $stmt ->execute([$username,$password]);

    if ($stmt->rowCount() > 0){
        $_SESSION['user']= $usename;
        header("Location: dashboard.php");
        exist();
    }else{
        $error = "invalid Username or password";
    }
}
>?

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title> Document</title>
</head>
<body>
     <h2>LUZIEL TILLO</h2>

     ,?php if (!emty($error)) echo ",p style = 'color:red'>$error</p"?
     >

     <form method="POST">
         <label. User Name:</label><br>
         <input type= "tex" name = "username"><br>
         <label>Password:</label><br>
         <input type= "password" name = "password"><br>
         <button type = "">Login</button>
     </form>
     
    <h1> Username:</h1>
    <h2> Password:</h2>
</body>
<p> Log-in
</html>
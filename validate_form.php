<?php

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['pass'];
    $name=array("venkatesh","avanthi","tushant","jonny");
    if(strlen($username)<5  || strlen($username)>10)
    {
        echo "<h4 style='color:Red;'>Please enter the username in between the 5 to 10</h4>";
    }
    else if(in_array($username,$name))
        {

           $result="Hellow ".$username." Your passwaord is ".$password;
           echo $result;
        }
        else{

            echo "<h4 style='color:Red;'>Sorry you are not the valid user</h4>";
        }

  

  
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extracting information from form</title>
</head>
<body>
<form action="validate_form.php" method="post">
UserName :<input type="text" placeholder="Enter a text" name="username" >
Password :<input type="password" placeholder="Enter password" name="pass"><br><br>
<input type="submit"  name="submit" value="Click me!">



</form>
</body>
</html>
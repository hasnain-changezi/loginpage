<?php 
    session_start();

   include ('includes/connection.php');

    if(isset($_SESSION['username'])){ 
        header('location:home.php');
    }

?>


<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="login.css">   
</head>    
<body>    
	<h1>
	<br>
		<br>
	</h1>
    <br>    
    <div class="login"> 

    <form id="login" method="POST" action="loginProcess.php">    
        <label>
            <b>User Name</b>    
        </label>    
        <input type="text" name="username" id="Uname" placeholder="Username">    
        <br><br>    
        <label>
            <b>Password</b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="login" id="log" value="Log In">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>  

        <p style="color: red; text-align: center;"> <?php if(isset($_POST["login"])){ echo $invalid; } ?> <p>     
    </form>    

</div>    
</body>    
</html> 
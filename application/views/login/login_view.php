<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form method="POST" action="">
            Username : <input type="text" name="username" value="<?php echo $username?>"/> <br/>
            Password : <input type="password" name="password" value="<?php echo $password?>"/> <br/>
            Email : <input type="text" name="email" value="<?php echo $email ?>"> <br>
            <input type="submit" name="submit_login" value="Login"/>
        </form>
    </body>
</html>
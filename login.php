<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    <form action="login_post.php" method="post">

    <?php if(isset($email_error)){
        echo $email_error;
    }?>
        <input type='email' name='email' placeholder='email'><br><br>
        
        <?php if(isset($pass_error)){
        echo $pass_error;
    }?>
        <input type='password' name='password' placeholder='password'><br><br>
        <input type="submit" name="submit" value="login "><br><br>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="title">DOMAIN SELLER</h1>
        <p class="sub">We provide all doimains at cheap price</p>
        <form class="formWrapper" method="POST" action="dblogin.php">
        <h3>LOGIN TO CONTINUE</h3>
            <label class="label">USERNAME</label>
            <input type="text" name="username" class="text" /><br>
            <label class="label">PASSWORD</label>
            <input type="password" name="password" class="text" /><br> 
            <div class="btnWrapper">
            <button class="btn">LOGIN</button>
        
            <a class="new" href="newAccount.php">Don't have an account, Create one </a>
            </div>
        </form>
    </div>
</body>
</html>
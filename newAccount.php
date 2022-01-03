<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="new.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="title">DOMAIN SELLER</h1>
        <p class="sub">We provide all doimains at cheap price</p>
        <form class="formWrapper">
        <h3>CREATE AN ACCOUNT</h3>
            <label class="label">FULLNAME</label>
            <input id="name" type="text" name="username" class="text" /><br>
            <label class="label">USERNAME</label>
            <input id="uname" type="text" name="username" class="text" /><br>
            <label class="label">PASSWORD</label>
            <input id="pass" type="password" name="password" class="text" /><br> 
            <label class="label">GENDER</label>
            <span class="radio">
                <input type="radio" name="gender" class="radio" value="male">Male</input>
                <input type="radio" name="gender" class="radio" value="female">Female</input>
                 <input type="radio" name="gender" class="radio" value="other">Other</input><br>
            </span>
            <label class="label">DATE OF BIRTH</label>
            <input id="dob" type="date" name="gender" class="date"></input><br>
            <div class="btnWrapper">
            <button class="btn" onClick="validate()">Create Account</button>
            
            <a class="new" href="login.php">Return to Login</a>
            </div>
        </form>
    </div>
</body>
</html>
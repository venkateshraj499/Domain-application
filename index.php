<html>
    <head>
        <title>Domain world</title>
        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <div class="header">
            <ul class="list">
            <li class="li">Home</li>
            <li class="li">Domains</li> 
            <li class="li">customer care</li> 
            <li class="li">Policy</li> 
            <li class="li">About us</li> 
            </ul>
            <div>
            <?php
                session_start();
                echo '<h4 class="welcome">Welcome ' .$_SESSION['username'].'</h4>';  
            ?>
            </div>
       
        </div>
        <div class="main">
            <div class="left">
                <h1>Get your .com or .in domain for ₹ 399.00*</h1>
                <ul class="mainList">
                    <li class="mainLi">Trusted by 20+ million customers</li>
                    <li class="mainLi">Backed by expert 24/7 support</li>
                    <li class="mainLi">Low prices and huge selection</li>
                </ul>
                <form class="form"  method="POST" action="dbdomain.php">
                  <label class="search">Search your domains here...</label><br>
                  <input type="text" class="input" name="domain" placeholder="mobilestore.com"/>
                  <button type="submit" class="button" onClick="confirm('do you want to confirm purchase')">Search</button>
                </form>
            </div>
            <div class="right">
               <img src="./image.jpg" alt="no-img" width="700px" height="500px"/>
            </div>
        </div>
    </body>
</html>
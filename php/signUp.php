<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" type="text/css" href="../css/signUp.css">
</head>
<body>
    <div class="mainContainer">
        <?php
        include('nav.php');
        ?>
        <div class="container">
        <div class="content">
            <h1>We are glad to see you join us.</h1>
            <p>Sign up to see what cheapseak has is the store for you. We promise, we rarely dissapoint.</p>
        </div>
        <form action="sign.php" method='post'>
            <h1>Sign Up</h1>
            <div class="names">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" placeholder="first name">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" placeholder="last name">
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="email">
            </div>
            <div class="useName">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password">
            </div>
                
            
            <button type="submit"> Sign Up</button>
            <h2>Already have an account? <a href="signIn.php">Sign-in</a></h2>
        </form>
        
        </div>
        
    </div>
</body>
</html>
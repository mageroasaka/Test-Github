<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/signIn.css">
</head>
<body>
    <div class="mainContainer">
        <?php
        include('nav.php');
        ?>
        <div class="container">
            <div class="welcome">
                <h1>Welcome back!!! We missed your presence so much.
                </h1>
                <p>Nothing makes us happy than seeing you get your desires from us.</p>
            </div>
            <form action="log.php" method="post">
                <label for="username">Username/email</label>
                <input type="text" name="username" id="username">

                <label for="password">Password</label>
                <input type="password" name="password" id="password">

                <button type="submit">Login</button>
                <h2>Don't have an account? <a href="signUp.php">Sign-up</a></h2>
            </form>
        </div>
        
    </div>
    
</body>
</html>
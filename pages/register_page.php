<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register-stylesheet.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/baby-book.svg" alt="">
        </div>
    
        <div class="menu">
            <ul class="nav-bar">
                <li><a href="../index_page.php">Home</a></li>
                <li><a href="book_page.php">Books</a></li>
                <li><a href="">Category</a></li>
                <li><a href="login_page.php">Login</a></li>
                <li class="active"><a href="/">Register</a></li>
            </ul>
        </div>

        <div class="search">
            <img src="../img/search.svg" alt="" style="width: 50px;">
        </div>
        <div class="lines">
        </div>
    </header>

    <main>
        <form method="POST" action="../php/register.php" class="register">
            <h1>Register</h1>

            <?php
                if(isset($_GET['error'])){?>
                    <p class="error"><?php echo $_GET['error']?></p>
            <?php }?>
            <label>Full Name:</label>
            <input type="text" name="fullname">

            <label>User Name:</label>
            <input type="text" name="username">

            <label>Password:</label>
            <input type="password" name="password">

            <label>Confirm Password:</label>
            <input type="password" name="confrm">

            <label>Gender:</label>
            <div class="raio">
                <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="male">Female</label><br>
            </div>

            <label>E-Mail Address:</label>
            <input type="text" name="mail">
            
            <label>Contact No.</label>
            <input type="text" name="phoneno">

            <input type="submit" value="Register">
        </form>
    </main>
</body>
</html>
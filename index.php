<?php
session_start();

include("php/config.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Error");

    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {
        $_SESSION['valid'] = $row['Email'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['age'] = $row['Age'];
        $_SESSION['id'] = $row['Id'];
        
        header("Location: home.php");
        exit(); // Ensure no further output is sent after redirection
    } else {
        echo "<div class='message'><p>Wrong Email or Password!</p></div><br>";
        echo "<a href='index.php'><button class='btn1'>Go Back</button></a>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="Styles/styles2.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="Images/favicon3.png" sizes="128x128" />
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Login</header>
            <form action="#" method="POST">

                <div class="field input">
                    <label for="email">Email : </label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn1" name="submit" value="Login">
                </div>

                <div class="links">
                    Doesn't have an account? <a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
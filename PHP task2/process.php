<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Page</title>
</head>
<body>
    <?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == "Louis" && $password == "106399199") {
            $_SESSION['user'] = $username;
            header('Location: welcome.php');
        } else {
            echo "Invalid login. <a href='login.php'>Try again!</a>";
        }
    ?>
</body>
</html>
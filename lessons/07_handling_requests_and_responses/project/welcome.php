<?php

session_start();

<<<<<<< HEAD
// error_log(print_r($_SESSION,1));

=======
>>>>>>> 7744e298f2370f4b75ae6c8e700db924c1c52fca
if (!isset($_SESSION['UserId'])) {
    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron" style="margin: 20px">
            <div class="row">
<<<<<<< HEAD
                <h2 class="text-center">Hello, Man!</h2>
=======
                <h2 class="text-center">Hello, user!</h2>
>>>>>>> 7744e298f2370f4b75ae6c8e700db924c1c52fca

                <form action="logout.php" method="POST">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

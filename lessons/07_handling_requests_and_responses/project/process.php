<?php

session_start();

$data = [
    [
<<<<<<< HEAD
        'id'    => 1,
        'email' => 'test@test.com',
        'password'  => '1234',
    ],
    [
        'id'    => 2,
        'email' => 'admin@test.com',
=======
        'id'        => 1,
        'email'     => 'test@test.com',
        'password'  => '1234',
    ], [
        'id'        => 2,
        'email'     => 'admin@test.com',
>>>>>>> 7744e298f2370f4b75ae6c8e700db924c1c52fca
        'password'  => '1234',
    ],
];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['email']) || !isset($_POST['password'])) {
<<<<<<< HEAD
        error_log('Here');
        die('Email and password required. Back to <a href="index.php">Home</a>');
    } elseif (!strlen(trim($_POST['email'])) || !strlen(trim($_POST['password'])))
        die('Email and password cannot be empty. Back to <a href="index.php">Home</a>');


    foreach ($data as $key => $item) {
=======
        die('Email and password required. Go back to <a href="index.php">Home</a>');
    } elseif (!strlen(trim($_POST['email'])) || !strlen(trim($_POST['password']))) {
        die('Email and password cannot be empty. Go back to <a href="index.php">Home</a>');
    }

    foreach ($data as $item) {
>>>>>>> 7744e298f2370f4b75ae6c8e700db924c1c52fca
        if ($item['email'] == trim($_POST['email'])
            && $item['password'] == trim($_POST['password'])) {
            $_SESSION['UserId'] = $item['id'];
            header('Location: welcome.php');
<<<<<<< HEAD
        } else {
            die('Wrong email or password. Back to <a href="index.php">Home</a>');
        }
    }

=======
            exit;
        }
    }

    die('Wrong email or password. Back to <a href="index.php">Home</a>');
>>>>>>> 7744e298f2370f4b75ae6c8e700db924c1c52fca
} else {
    header('Location: index.php');
}

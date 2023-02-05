<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a software developer">
    <meta name="keywords" content="software developer, portfolio, web development">
    <title>Portfolio - dashboard</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- eigen css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/projects.css">
</head>
<body>
    <?php
    include 'includes/header.php';
    require 'includes/dbConnectie.php';

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }

    echo "<main>";

    if (!isset($_SESSION)) {
        session_start();
    }
    
    if (isset($_SESSION['username'])) {
        echo "<h3>Are you sure you want to log out?</h3>";
        echo "<form method='post'>";
        echo "<input type='submit' name='logout' value='no' class='btn btn-danger'>";
        echo "<input type='submit' name='logout' value='yes' class='btn btn-success'>";
        echo "</form>";

        if (isset($_POST['logout'])) {
            if ($_POST['logout'] == 'yes') {
                session_destroy();
                header('Location: index.php');
            } else {
                header('Location: dashboard.php');
            }
        }
    } else {
        header('Location: index.php');
    }


    echo "</main>";


    include 'includes/footer.php';
    ?>
</body>
</html>

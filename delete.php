<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="media/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a software developer">
    <meta name="keywords" content="software developer, portfolio, web development">
    <title>Portfolio - projects</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- eigen css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/projects.css">
</head>
<body>
    <?php
        include 'includes/header.php';
        require 'includes/dbConnectie.php';

        // if (!isset($_SESSION['username'])) {
        //     header('Location: index.php');
        // }
    ?>
    <main>
        <h1>Are you sure you want to delete the project?</h1>
        <form action="delete.php?id=<?php echo $_GET['id'] ?>" method="POST">
            <input type="submit" name="submit" value="Yes" class="btn btn-danger">
            <br>
            <br>
            <a href="dashboard.php" class="btn btn-primary">No</a>
        </form>
    </main>
    <?php
        // if user clicks on yes, delete the project
        if (isset($_POST['submit'])) {
            $id = $_GET['id'];
            $sql = "DELETE FROM Projects WHERE id = $id";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                header('Location: dashboard.php');
            } else {
                echo 'query error: ' . mysqli_error($mysqli);
            }
        }

        include 'includes/footer.php';
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
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

        if (!isset($_SESSION['username'])) {
            header('Location: login.php');
        }

        // get url parameter
        $id = $_GET['id'];

        $sql = "SELECT * FROM Projects WHERE ID = $id";
        $result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_assoc($result);

        $projectName = $row['projectName'];
        $projectDescription = $row['projectDescription'];
        $projectType = $row['projectType'];
        $projectLink = $row['projectLink'];
        $projectImage = $row['projectImage'];
    ?>
    <main>
    <?php

        // form voor het aanpassen van een project
        echo "<form method='post'>
            <div class='form-group'>
                <label for='projectName'>Project name</label>
                <input type='text' name='projectName' class='form-control' value='$projectName'>
            </div>
            <div class='form-group'>
                <label for='projectDescription'>Project description</label>
                <textarea name='projectDescription' class='form-control' rows='3'>$projectDescription</textarea>
            </div>
            <div class='form-group'>
                <label for='projectType'>Project type</label>
                <input type='text' name='projectType' class='form-control' value='$projectType'>
            </div>
            <div class='form-group'>
                <label for='projectLink'>Project link</label>
                <input type='text' name='projectLink' class='form-control' value='$projectLink'>
            </div>
            <div class='form-group'>
                <label for='projectImage'>Project image</label>
                <input type='text' name='projectImage' class='form-control' value='$projectImage'>
            </div>
            <input type='submit' name='submit' value='Update' class='btn btn-primary'>
        </form>";

        // update project
        if (isset($_POST['submit'])) {
            $projectName = $_POST['projectName'];
            $projectDescription = $_POST['projectDescription'];
            if (empty($projectDescription)) {
                $projectDescription = $row['projectDescription'];
            }else {
                $projectDescription = $_POST['projectDescription'];
            }
            $projectType = $_POST['projectType'];
            $projectLink = $_POST['projectLink'];
            $projectImage = $_POST['projectImage'];

            $sql = "UPDATE Projects SET projectName = '$projectName', projectDescription = '$projectDescription', projectType = '$projectType', projectLink = '$projectLink', projectImage = '$projectImage' WHERE ID = $id";
            $result = mysqli_query($mysqli, $sql);
            if ($result) {
                echo "Project updated";
            } else {
                echo "Error updating project";
            }
        }

    ?>  
    </main>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>

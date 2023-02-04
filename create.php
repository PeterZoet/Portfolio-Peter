<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a software developer">
    <meta name="keywords" content="software developer, portfolio, web development">
    <title>Portfolio - projects - create</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- eigen css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<?php
    // als er een fout is, geef dan een foutmelding
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include 'includes/header.php';
    require 'includes/dbConnectie.php';

?>

<form method='post' action="create.php">
    <div class="form-group">
        <label for="projectName">Projectnaam</label>
        <input type="text" class="form-control" id="projectName" placeholder="Projectnaam" name='projectName'>
    </div>
    <div class="form-group">
        <label for="projectDescription">Projectbeschrijving</label>
        <textarea class="form-control" id="projectDescription" rows="3" name='projectDescription'></textarea>
    </div>
    <div class="form-group">
        <label for="projectType">Projecttype</label>
        <input type="text" class="form-control" id="projectType" placeholder="Projecttype" name='projectType'>
    </div>
    <div class="form-group">
        <label for="projectLink">Projectlink</label>
        <input type="text" class="form-control" id="projectLink" placeholder="Projectlink" name='projectLink'>
    </div>
    <div class="form-group">
        <label for="projectImage">Projectafbeelding</label>
        <input type="file" class="form-control" id="projectImage" placeholder="Projectafbeelding" name='projectImage'>
    </div>
    <input type='submit' name='submit' value='Toevoegen'>
</form>   

<?php

    if(isset($_POST['submit'])) {
        $projectName = $_POST['projectName'];
        $projectDescription = $_POST['projectDescription'];
        $projectType = $_POST['projectType'];
        $projectLink = $_POST['projectLink'];
        $projectImage = $_POST['projectImage'];

        $sql = "INSERT INTO Projects (projectName, projectDescription, projectType, projectLink, projectImage) VALUES ('$projectName', '$projectDescription', '$projectType', '$projectLink', '$projectImage')";
        $result = mysqli_query($mysqli, $sql);

        if($result) {
            echo "Project is toegevoegd";
        } else {
            echo "<div class='alert alert-danger' role='alert'>";
            echo $sql;
            echo mysqli_error($mysqli) . "</div>";
        }
    }
?>
<?php
    include 'includes/footer.php';
?>
</body>
</html>

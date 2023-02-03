<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a software developer">
    <meta name="keywords" content="software developer, portfolio, web development">
    <title>Portfolio - projects</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        include 'includes/header.php';
        include 'includes/dbConnectie.php';
    ?>
    <main>
        <h1>dashboard</h1>
        <form>
            <div class="form-group">
                <label for="projectName">Project name</label>
                <input type="text" class="form-control" id="projectName" placeholder="Enter project name">
            </div>
            <div class="form-group">
                <label for="projectDescription">Project description</label>
                <textarea class="form-control" id="projectDescription" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="projectType">Project type</label>   
                <input type="text" class="form-control" id="projectType" placeholder="Enter project type">
            </div>
            <div class="form-group">
                <label for="projectLink">Project link</label>
                <input type="text" class="form-control" id="projectLink" placeholder="Enter project link">
            </div>
            <div class="form-group">
                <label for="projectImage">Project image</label>
                <input type="text" class="form-control" id="projectImage" placeholder="Enter project image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
    
<?php
    include 'includes/footer.php';
?>
</body>
</html>

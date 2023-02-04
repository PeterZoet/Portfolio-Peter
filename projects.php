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
        include 'includes/dbConnectie.php';
    ?>
    <main id='main'>
        <h1 class='titel'>Projects</h1>
            <div>
                <h2>Project 1</h2>
                <p>Project 1 description</p>    
            </div>
            <div>
                <h2>Project 2</h2>
                <p>Project 2 description</p>
            </div>
            <div>
                <h2>Project 3</h2>
                <p>Project 3 description</p>
            </div>
    </main>
    
<?php
    include 'includes/footer.php';
?>
</body>
</html>

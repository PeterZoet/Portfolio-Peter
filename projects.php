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
    ?>
    <main id='main'>
    <?php
            $sql = "SELECT * FROM Projects";
            $result = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "<div class='project'>";
                echo "<h2>" . $row['projectName'] . "</h2>";
                echo "<p>" . $row['projectDescription'] . "</p>";
                echo "<p><b>Type:</b> " . $row['projectType'] . "</p>";
                echo "<a href='" . $row['projectLink'] . "' target='_blank'>" . $row['projectLink'] . "</a>";
                echo  "<br>";
                echo  "<br>";
                echo "<img src='media/" . $row['projectImage'] . "' alt='project image' class='uploadImg'>";
                echo  "<br>";
                echo  "<br>";
                echo "<a href='edit.php?id=" . $row['ID'] . "' class='btn btn-primary'>Edit</a>";
                echo "<a href='delete.php?id=" . $row['ID'] . "' class='btn btn-danger'>Delete</a>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }

        ?>  
    </main>
    
<?php
    include 'includes/footer.php';
?>
</body>
</html>

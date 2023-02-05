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

    echo "<main>";

    echo "<h1>Dashboard</h1>";
    echo "<p>Op deze pagina kan de admin inloggen en projecten toevoegen, bewerken en verwijderen.</p>";

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['username'])) {

        echo "<h1>Dashboard</h1>";
        echo "<p>Welkom " . $_SESSION['username'] . "</p>";
        echo "<p><a href='logout.php' class='btn btn-danger'>Uitloggen</a></p>";
        echo "<br>";
        echo "<br>";
        echo "<a href='create.php' class='btn btn-primary'>Create</a>";

        $sql = "SELECT * FROM Projects";
        $result = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='project'>";
                echo "<h2>" . $row['projectName'] . "</h2>";
                echo "<hr>";
                echo "<p>" . $row['projectDescription'] . "</p>";
                echo "<p><b>Type:</b> " . $row['projectType'] . "</p>";
                echo "<a href='" . $row['projectLink'] . "' target='_blank'>" . $row['projectLink'] . "</a>";
                echo "<br>";
                echo "<br>";
                echo "<img src='media/" . $row['projectImage'] . "' alt='project image' class='uploadImg'>";
                echo "<br>";
                echo "<br>";
                echo "<a href='edit.php?id=" . $row['ID'] . "' class='btn btn-primary'>Edit</a>";
                echo "<a href='delete.php?id=" . $row['ID'] . "' class='btn btn-danger'>Delete</a>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }

    } else {

        echo "<form method='post'>";
        echo "<label for='username'>Username:</label>";
        echo "<input type='text' name='username' id='username'><br /><br />";
        echo "<label for='password'>Password:</label>";
        echo "<input type='password' name='password' id='password'><br /><br />";
        echo "<input type='submit' value='Login' id='btn'>";
        echo "</form>";

    }

    echo "</main>";




    // check if username and password are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // get the username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        $veiligPassword = sha1($password);
        // check if username and password are not empty
        if (!empty($username) && !empty($password)) {
            // check if username and password are correct
            $query = "SELECT * FROM users WHERE Naam = '$username' AND Password = '$veiligPassword'";
            $result = mysqli_query($mysqli, $query);
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                //put username in session
                $_SESSION['username'] = $username;

                // redirect to dashboard
                header('Location: dashboard.php');

                echo "<div class='alert alert-success' role='alert'>";
                echo 'You are logged in!';
                echo "</div>";
            } else {
                // if username and password are not correct, show an error message
                echo "<div class='alert alert-danger' role='alert'>";
                echo 'Incorrect username or password';
                echo mysqli_error($mysqli) . "</div>";
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>";
            echo 'Please fill in all fields';
            echo mysqli_error($mysqli) . "</div>";
        }
    }

    include 'includes/footer.php';
    ?>
</body>
</html>

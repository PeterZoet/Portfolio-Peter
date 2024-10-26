<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="media/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a software developer">
    <meta name="keywords" content="software developer, portfolio, web development">
    <title>Portfolio - about me</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- eigen css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
<?php
include 'includes/header.php';
?>
<main>
   

    <div class="sectionOne">
        <h1>About Me</h1>
        <hr>
        <div class="flexbox">
            <div>
                <img src="media/Mooie kop.jpg" class="flexbox-image" alt="Peter Zoetekouw">
            </div>
            <div id="textAboutMe">
                <p>Ik ben een student Software Developer aan het Grafisch Lyceum Rotterdam. Ik vind het leuk om te coderen en werk graag samen met teamgenoten, maar ik kan ook goed alleen werken. Ik heb veel ervaring met verschillende programmeertalen en frameworks zoals HTML, CSS, JavaScript, PHP en C#.</p>
                <p>Ik ben altijd op zoek naar nieuwe uitdagingen en ik vind het leuk om nieuwe dingen te leren. Ik denk dat dit me zal helpen om te groeien als programmeur en als persoon.</p>
                <p>Naast coderen vind ik het leuk om te judoën, schaken en gamen.</p>
                <p>Ik hoop dat dit je een goed beeld geeft van wie ik ben en wat ik doe. Als je nog vragen hebt of meer informatie wilt, laat het me dan gerust weten!</p>
            </div>
        </div>
        <div class="download">
            <a href="mailto:pmjzoetekouw@hotmail.com?subject=Ik ontvang graag je CV! &body=Peter, ik ontvang graag je CV omdat ik je profiel interessant vind en verdere info van je wil hebben!" class="btn btn-primary"> Wilt U graag mijn cv of meer informatie? Stuur dan een mail!</a>
        </div>
    </div>
    <div class="sectionTwo">

    <h2>My Skills</h2>
    <hr>

    <h3>HTML</h3>
    <div class="container">
    <div class="skills html"></div>
    </div>

    <h3>CSS</h3>
    <div class="container">
    <div class="skills css"></div>
    </div>

    <h3>JavaScript</h3>
    <div class="container">
    <div class="skills js"></div>
    </div>

    <h3>PHP</h3>
    <div class="container">
    <div class="skills php"></div>
    </div>

    <h3>Databases / SQL</h3>
    <div class="container">
    <div class="skills db"></div>
    </div>

    <h3>C#</h3>
    <div class="container">
    <div class="skills cscherp"></div>
    </div>

    </div>


</main>

<?php
include 'includes/footer.php';
?>

    
</body>
</html>
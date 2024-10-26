<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/x-icon" href="media/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of a software developer">
    <meta name="keywords" content="software developer, portfolio, web development">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
    include 'includes/dbConnectie.php';
?>
<main>
    <div class="coverImg">
        <div class="coverText">
            <h1>Hi, I'm Peter Zoetekouw</h1>
            <hr>
            <h2>Software Developer</h2>
            <a href='#content'><span>&#10137;</span></a>
        </div>
    </div>
    <div id="content"></div>
    <?php
        include 'includes/header.php';
    ?>
       <!-- normal text -->
      <div class="container" style="margin-top: 5vh;">
        <h3>Grafisch Lyceum Rotterdam</h3>
        <hr>
        <div class="row">
          <div class="col-md-4">
            <!--lorem ipsum  -->
            <p>Ik studeer Software Development aan het Grafisch Lyceum Rotterdam. Ik heb gekozen voor deze opleiding omdat ik graag met computers bezig ben en ik wilde een uitdagende opleiding.</p><p>Ik heb een rondleiding gekregen en ik vond het meteen een leuke school. Ik heb me 4 dagen later direct ingeschreven en ik heb er geen spijt van gehad. Ik heb nu mijn eerste 2 jaar bijna afgerond en ik heb er veel geleerd. Ik heb veel geleerd over programmeren en ik heb veel geleerd over het werken in een team.</p>
          </div>
          <div class="col-md-4"> 
            <img src="media/grafischLR.jpg" alt="GLR" style="width: 100%; border-radius: 10px;">
          </div>
          <div class="col-md-4"> 
          <p>Het Grafisch Lyceum Rotterdam, ook wel GLR, is een vakschool in Rotterdam op het gebied van media, entertainment en technologie. Het lyceum biedt opleidingen op mbo-niveau en heeft daarnaast een vmbo-afdeling voor vormgeven en media. De school telt in 2020 ongeveer 3.800 mbo-studenten, 500 vmbo-leerlingen en 450 medewerkers. De hoofdlocatie met alle mbo-opleidingen is gevestigd aan de Heer Bokelweg 255 in Rotterdam. De vmbo-afdeling heeft een eigen locatie aan het Stadhoudersplein 35 in Rotterdam.</p>
          </div>
        </div>
      </div>
       <!-- schuine text -->
      <div class="container2">
        <div class="row schuin">
          <div class="col-md-4">
            <h3>HTML, CSS, Javascript, PHP en SQL (mariaDB)</h3>
            <hr>
            <p>Deze talen beheers ik het beste, ik vind het erg leuk om met deze talen een project te maken en om nieuwe mogelijkheden te ontdekken. Ik heb op school veel geleerd over de verschillende mogelijkheden die deze talen bieden.
            <br>
            <br>
            <img src="media/fullStack.png" alt="FullStack" class='schuineImg' style="width:20vw;">
            </p>
          </div>
          <div class="col-md-4"> 
            <h3>Frameworks</h3>
            <hr>
            <p>Ik heb veel geleerd over de verschillende frameworks die je kan gebruiken met de talen die ik beheers. Ik heb veel geleerd over: React native, React.js, Node.js en Laravel, electron. Ook heb ik kennismaking gehad met jquery en Bootstrap. 
            <br>
            <br>
            <img src="media/nodeJS.png" alt="nodeJS" class='schuineImg' style="width:15vw;">
            </p>
          </div>
          <div class="col-md-4"> 
            <h3>C#</h3>
            <hr>
            <p>Ik heb ook kennis gemaakt met C# en ik vind het een leuke taal om mee te werken. Zo heb ik gewerkt met console, desktop en web applicaties.
            <br>
            <br>
            <img src="media/dotnet.png" alt="dotnet" class='schuineImg'>
            </p>
          </div>
        </div>
    </div>
    <!-- normal text -->
    <div class="container" style="margin-top: 5vh;">
        <h3>Teamwork</h3>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <!--lorem ipsum  -->
            <h5>SCRUM</h5>
            <p>Het liefst gebruik ik het SCRUM model om samen te werken, want dit is een erg overzichtelijk model en het is erg makkelijk om te zien wat er gedaan moet worden. Door de dealines die je aan kan maken kan je goed zien wat er gedaan moet worden en wanneer het af moet zijn.</p>
            <br>
            <br>
            <img src="media/scrum.png" alt="scrum" style="width: 40%; border-radius: 10px;">
            </p>
          </div>
          <div class="col-md-6"> 
          <h5>Github</h5>
          <p>Samenwerken in de zelde repositorie en in andere branches is voor mij de handigste manier om samen met team genoten te coderen. Het is erg overzichtelijk en makkelijk te beheren.</p>
          <hr><p>Versiebeheer, als ik aan grote projecten werk dan gebruik ik altijd github om mijn code te beheren. Met github kan je makkelijk naar vorige versies van het project gaan of een nieuwe branch aanmaken om gewoon wat te proberen.</p>
            <br>
            <br>
            <img src="media/github2.png" alt="Github" style="width: 20%; border-radius: 10px; float:left; margin-left:10vw;">
          </p>
          </div>
        </div>
      </div>
    </div>
</main>

<?php
    include 'includes/footer.php';
?>

    
</body>
</html>
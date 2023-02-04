<!DOCTYPE html>
<html lang="en">
<head>
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
    <?php
        include 'includes/header.php';
    ?>
       <!-- normal text -->
      <div class="container" id="content" style="margin-top: 5vh;">
        <h3>Lorem Ipsum</h3>
        <div class="row">
          <div class="col-md-4">
            <!--lorem ipsum  -->
            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
          <div class="col-md-4"> 
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p><p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
          <div class="col-md-4"> 
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p><p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
        </div>
      </div>
       <!-- schuine text -->
      <div class="container2">
        <div class="row schuin">
          <div class="col-md-4">
            <h3>Lorem Ipsum</h3>
            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>  
          </div>
          <div class="col-md-4"> 
            <h3>Lorem Ipsum</h3>
            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
          <div class="col-md-4"> 
            <h3>Lorem Ipsum</h3>
            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
        </div>
    </div>
    <!-- normal text -->
    <div class="container" style="margin-top: 5vh;">
        <h3>Lorem Ipsum</h3>
        <div class="row">
          <div class="col-md-4">
            <!--lorem ipsum  -->
            <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
          <div class="col-md-4"> 
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          <hr>
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
          </div>
          <div class="col-md-4"> 
          <p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p><p>lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl nec ultricies lacinia, nisl nisl aliquet nisl, nec aliquet nisl nisl sit amet nisl. Sed euismod, nisl nec</p>
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
<header>
  <nav id='menu'>
    <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
    <ul>
      <li><a href='index.php'>Home</a></li>
      <li><a href='projects.php'>Projects</a></li>
      <li><a href='about.php'>About me</a></li>
      <li><a href='dashboard.php'>Dashboard</a></li>
      <?php
      if (!isset($_SESSION)) {
        session_start();
    }
      if (isset($_SESSION['username'])) {
        echo "<li id='navUser'><a href='dashboard.php'>Welkom " . $_SESSION['username'] . "</a></li>";
      }
      ?>
    </ul>
  </nav>
</header>
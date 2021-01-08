<?php
session_start(); //beginning of the session

$page = isset($_GET["page"]) ? $_GET["page"] : "home";

if (!file_exists($page . '.php')) {
  $page = '404';
}
include 'config.inc.php';
include 'utilis.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

  <title>Swiss Student Code</title>
</head>

<body>
  <div class="header">
    <img src="images/logo_2scode.png" alt="">

  </div>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a href="index.php">Accueil</a>
    </div>
    <div class="navbar-brand">
      <a href="forum">Forum</a>
    </div>
    <div class="navbar-brand">
      <a href="news">News</a>
    </div>
    <div class="navbar-brand">
      <a href="profil">Profil</a>
    </div>
    <div class="navbar-brand">
      <a href="faq">F.A.Q</a>
    </div>
  </nav>

  <?php
  include $page . '.php';
  ?>

  <script src="js/index.js"> </script>
</body>

</html>
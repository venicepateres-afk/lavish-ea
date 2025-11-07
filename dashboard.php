<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location: index.php');
  exit;
}
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dashboard — <?=$user['name']?></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a class="brand" href="dashboard.php">
  <img src="images/sfac-logo.png" alt="SFAC Logo" class="logo">
  <span class="brand-text">Saint Francis Portal</span>
</a>

<header class="site-header">
  <div class="container header-flex">
    <a class="brand" href="dashboard.php">
      <img src="images/sfac-logo.png" alt="SFAC Logo" class="logo">
      <span class="brand-text">Saint Francis Portal</span>
    </a>
    <nav class="nav">
      <a href="dashboard.php">Dashboard</a>
      <a href="admissions.php">Admissions</a>
      <a href="contact.php">Contact</a>
      <a href="admin.php">Admin</a>
      <a href="logout.php" class="btn-logout">Logout</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container">
    <h1>Welcome, <?=$user['name']?></h1>
    <p>Empowering students through faith, excellence, and service.</p>
  </div>
</section>

<main class="container">
  <section class="grid">
    <div class="card">
      <h3>📢 Announcements</h3>
      <ul><li>Welcome to the Saint Francis Student Portal!</li></ul>
    </div>
    <div class="card">
      <h3>🎯 Quick Links</h3>
      <ul>
        <li><a href="admissions.php">Apply for Admission</a></li>
        <li><a href="contact.php">Contact Admin</a></li>
      </ul>
    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container"><p>&copy; 2025 Saint Francis of Assisi College</p></div>
</footer>

</body>
</html>

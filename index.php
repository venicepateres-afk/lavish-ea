<?php
session_start();
$err = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';

  // Demo credentials
  if($email === 'student@example.com' && $password === 'student123'){
    $_SESSION['user'] = ['email'=>$email, 'name'=>'Demo Student'];
    header('Location: dashboard.php');
    exit;
  } else {
    $err = 'Invalid credentials. Use student@example.com / student123';
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Saint Francis Portal — Login</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<a class="brand" href="dashboard.php">
  <img src="images/sfac-logo.png" alt="SFAC Logo" class="logo">
  <span class="brand-text">Saint Francis Portal</span>
</a>


<header class="site-header">
  <div class="container header-flex">
    <a class="brand" href="index.php">
      <img src="images/sfac-logo.png" alt="SFAC Logo" class="logo">
      <span class="brand-text">Saint Francis Portal</span>
    </a>
  </div>
</header>

<main class="container auth-page">
  <div class="auth-card">
    <h1>Student Login</h1>
    <?php if($err): ?><div class="alert"><?=$err?></div><?php endif; ?>
    <form method="post">
      <label>Email:<input type="email" name="email" required></label>
      <label>Password:<input type="password" name="password" required></label>
      <button class="btn" type="submit">Login</button>
    </form>
    <p class="muted">Demo: student@example.com / student123</p>
  </div>
</main>

<footer class="site-footer">
  <div class="container"><p>&copy; 2025 Saint Francis of Assisi College</p></div>
</footer>

</body>
</html>
 <nav class="navbar">
  <div class="logo">
    <img src="images/sfac-logo.png" alt="SFAC Logo" width="50">
    <span>Saint Francis of Assisi College</span>
  </div>

  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="department_bed.php">Basic Education (BED)</a></li>
    <li><a href="department_hed.php">Higher Education (HED)</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

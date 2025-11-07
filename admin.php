<?php
session_start();
$adminPass = 'sfacadmin';
if(isset($_POST['pass']) && $_POST['pass']===$adminPass){
  $_SESSION['admin']=true;
}
if(isset($_GET['logout'])){unset($_SESSION['admin']);header('Location: admin.php');exit;}
$isAdmin=$_SESSION['admin']??false;
?>
<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Admin Panel</title><link rel="stylesheet" href="css/style.css"></head><body>
<header class="site-header">
  <div class="container header-flex">
    <a class="brand" href="dashboard.php"><img src="images/sfac-logo.png" class="logo"><span class="brand-text">SFAC Admin</span></a>
  </div>
</header>

<main class="container">
<?php if(!$isAdmin): ?>
  <h1>Admin Login</h1>
  <form method="post"><label>Password:<input type="password" name="pass" required></label><button class="btn">Login</button></form>
<?php else: ?>
  <h1>Admin Dashboard</h1>
  <a href="admin.php?logout=1" class="btn">Logout</a>
  <div class="card"><h2>Admissions</h2><pre><?php @readfile('data/submissions.txt'); ?></pre></div>
  <div class="card"><h2>Messages</h2><pre><?php @readfile('data/messages.txt'); ?></pre></div>
<?php endif; ?>
</main>

<footer class="site-footer"><div class="container"><p>&copy; 2025 SFAC</p></div></footer>
</body></html>

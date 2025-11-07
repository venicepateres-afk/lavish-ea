<?php
session_start();
if(!isset($_SESSION['user'])){ header('Location: index.php'); exit; }
$user = $_SESSION['user'];
$msg = $_GET['m'] ?? '';
?>
<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Admissions — Portal</title>
  <link rel="stylesheet" href="css/style.css">
</head><body>

<header class="site-header">
  <div class="container header-flex">
    <a class="brand" href="dashboard.php">
      <img src="images/sfac-logo.png" class="logo">
      <span class="brand-text">Saint Francis Portal</span>
    </a>
  </div>
</header>

<main class="container">
  <h1>Admission Form</h1>
  <?php if($msg): ?><div class="alert"><?=$msg?></div><?php endif; ?>
  <form method="post" action="submit_admission.php">
    <label>Full Name:<input name="name" required></label>
    <label>Birthdate:<input type="date" name="bdate" required></label>
    <label>Email:<input type="email" name="email" value="<?=$user['email']?>" required></label>
    <label>Program:
      <select name="program">
        <option>BSIT</option>
        <option>BSED</option>
        <option>BSBA</option>
      </select>
    </label>
    <button class="btn" type="submit">Submit</button>
  </form>
</main>

<footer class="site-footer"><div class="container"><p>&copy; 2025 SFAC</p></div></footer>
</body></html>

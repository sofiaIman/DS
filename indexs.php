<!--PHP login System by WEBDEVTRICK (https://webdevtrick.com) -->
<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Salon-Artist user</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="form">
<h1 >Welcome <?php echo $_SESSION['username']; ?>!</h1>
<p >This is your secured index.</p>
<p><a href="salonloged.php">Your Dashboard</a></p>
<a href="logoutsl.php">Logout</a>
</div>
</body>
</html>
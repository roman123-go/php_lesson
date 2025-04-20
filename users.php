<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html?error=Please+login+first");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="alert alert-success text-center">
      Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!
    </div>
  </div>
</body>
</html>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Pets</title></head>
<body>
  <h2>Available Pets</h2>
  <?php
  $result = mysqli_query($conn, "SELECT * FROM pets");
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "<h3>{$row['name']} ({$row['type']})</h3>";
    echo "<img src='images/{$row['image']}' width='200'>";
    echo "</div><hr>";
  }
  ?>
</body>
</html>

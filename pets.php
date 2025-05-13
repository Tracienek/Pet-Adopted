<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Available Pets</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <h1>Available Pets</h1>
  <div class="pet-grid">
    <?php
    $result = mysqli_query($conn, "SELECT * FROM pets");
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='pet-card'>";
      echo "<img src='images/{$row['image']}' alt='{$row['name']}'>";
      echo "<h3>{$row['name']}</h3>";
      echo "<p>Type: {$row['type']}</p>";
      echo "<a href='adopt.php?pet_id={$row['id']}'><button class='adopt-btn'>Adopt</button></a>";
      echo "</div>";
    }
    ?>
  </div>
</body>
</html>

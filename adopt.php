<?php
include 'db.php';
$pet_id = $_GET['pet_id'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Adopt a Pet</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="form-container">
    <h2>Adopt a Pet</h2>

    <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
      <div class="success-alert">
        🎉 Your adoption request has been sent! <br>
        📧 Please wait for confirmation via email.
      </div>
    <?php endif; ?>


    <form action="submit_adoption.php" method="post">
      <label>Your Name</label>
      <input type="text" name="adopter_name" required>

      <label>Your Email</label>
      <input type="email" name="adopter_email" required>

      <label>Pet ID</label>
      <input type="number" name="pet_id" value="<?= htmlspecialchars($pet_id) ?>" required>

      <label>Message</label>
      <textarea name="message" rows="4" placeholder="Why do you want to adopt this pet?"></textarea>

      <button type="submit">Submit Adoption Request</button>
    </form>
  </div>
</body>
</html>

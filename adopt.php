<!DOCTYPE html>
<html>
<head><title>Adopt a Pet</title></head>
<body>
  <h2>Adopt a Pet</h2>
  <form action="submit_adoption.php" method="post">
    <label>Your Name:</label><br>
    <input type="text" name="adopter_name" required><br>

    <label>Your Email:</label><br>
    <input type="email" name="adopter_email" required><br>

    <label>Pet ID:</label><br>
    <input type="number" name="pet_id" required><br>

    <label>Message:</label><br>
    <textarea name="message"></textarea><br>

    <button type="submit">Submit</button>
  </form>
</body>
</html>

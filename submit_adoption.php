<?php
include 'db.php';

$name = $_POST['adopter_name'];
$email = $_POST['adopter_email'];
$pet_id = $_POST['pet_id'];
$message = $_POST['message'];

$sql = "INSERT INTO adoptions (pet_id, adopter_name, adopter_email, message) 
        VALUES ('$pet_id', '$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Adoption request submitted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>

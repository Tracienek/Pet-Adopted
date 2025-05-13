CREATE DATABASE IF NOT EXISTS pet_adopted;
USE pet_adopted;

CREATE TABLE pets (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  type VARCHAR(20),
  image VARCHAR(100)
);

CREATE TABLE adoptions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pet_id INT,
  adopter_name VARCHAR(100),
  adopter_email VARCHAR(100),
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

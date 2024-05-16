<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['Phone'];
$date = $_POST['date'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$time = $_POST['Time'];
$num_person = $_POST['Person'];


// CREATE TABLE IF NOT EXISTS users (
//         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         name VARCHAR(50) NOT NULL,
//         email VARCHAR(50) NOT NULL,
//         phone VARCHAR(20) NOT NULL,
//         date DATE NOT NULL,
//         password VARCHAR(255) NOT NULL,
//         time TIME,
//         num_person INT(2)
//     )
// Database connection
try {
    $pdo = new PDO("mysql:host=localhost;dbname=lamessat", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, date, password, time, num_person) VALUES (?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $phone);
    $stmt->bindParam(4, $date);
    $stmt->bindParam(5, $password);
    $stmt->bindParam(6, $time);
    $stmt->bindParam(7, $num_person);

    // Execute the statement
    $stmt->execute();

    echo "Registration successfully...";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

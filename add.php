<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO contacts (first_name, last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
</head>
<body>
    <h1>Add New Contact</h1>
    <form method="post" action="">
        <label>First Name</label>
        <input type="text" name="first_name" required><br>
        <label>Last Name</label>
        <input type="text" name="last_name" required><br>
        <label>Email</label>
        <input type="email" name="email" required><br>
        <label>Phone</label>
        <input type="text" name="phone" required><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>

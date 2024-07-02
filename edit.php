<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contacts WHERE id=$id";
    $result = $conn->query($sql);
    $contact = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE contacts SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone' WHERE id=$id";
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
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
        <label>First Name</label>
        <input type="text" name="first_name" value="<?php echo $contact['first_name']; ?>" required><br>
        <label>Last Name</label>
        <input type="text" name="last_name" value="<?php echo $contact['last_name']; ?>" required><br>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $contact['email']; ?>" required><br>
        <label>Phone</label>
        <input type="text" name="phone" value="<?php echo $contact['phone']; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

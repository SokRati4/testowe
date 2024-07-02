<?php
include 'db.php';

if (isset($_GET['id']) && isset($_GET['pwd']) && $_GET['pwd'] == 'Haslo123') {
    $id = $_GET['id'];
    $sql = "DELETE FROM contacts WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?msg=Contact deleted successfully');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header('Location: index.php?msg=Incorrect password. Contact not deleted.');
}
?>

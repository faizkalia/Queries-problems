<?php
$conn = new mysqli('localhost', 'root', '', 'inserdata');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM register WHERE id = $id";

    if ($conn->query($sql)) {
        header("Location: fetch_data_list.php");
        exit();
    } else {
        echo "Failed to delete the record: " . $conn->error;
    }
}

$conn->close();

?>

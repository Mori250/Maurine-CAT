<?php
include "dbconnection.php";
if (isset($_GET["user_id"])) {
    $user_id = $connection->real_escape_string($_GET["user_id"]);

    // Prepare DELETE statement
    $sql = "DELETE FROM user WHERE user_id = $user_id";

    // Execute DELETE statement
    if ($connection->query($sql) === TRUE) {
        echo "Record deleted successfully";
         header("Location: user_table.php");
    } else {
        echo "Error deleting record: " . $connection->error;
    }
}
$connection->close();
?>
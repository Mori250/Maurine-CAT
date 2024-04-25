<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "farm-management-system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM users";


$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data in Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Data of User Table</h2>


<table>
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Password</th>
        <th>Credation_Date</th>
        <th>activation_Code</th>
        <th>Is_activated</th>
    </tr>
    <?php
    // Step 4: Fetch the data from the query result
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["firstname"]."</td>";
            echo "<td>".$row["lastname"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["telephone"]."</td>";
             echo "<td>".$row["password"]."</td>";
             echo "<td>".$row["creationdate"]."</td>";
             echo "<td>".$row["activation_code"]."</td>";
             echo "<td>".$row["is_activated"]."</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>

<?php
// Close the connection
$conn->close();
?>

</body>
</html>

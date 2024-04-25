<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Farm Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2 style="text-align: center; font-family: century; font-weight: bold;">FARM MANAGEMENT SYSTEM</h2>
    <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF MANAGER OF OUR SYSTEM</h4>
    <a href="manager-form.html" class="btn btn-primary" style="margin-top: 0px;">New Manager</a>
    <a href="home.html" class="btn btn-secondary" style="margin-left: 1000px;">Back Home</a>
    <table class="table table-bordered">
        <thead class="bg-warning">
        <tr>
            <th>Manager_id</th>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Email_adress</th>
            <th>Telephone</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Establish database connection
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farm-management-system";
        $connection = new mysqli($host, $username, $password, $dbname);

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prepare and bind the parameters
            $stmt = $connection->prepare("INSERT INTO manager (manager_id, first_name, last_name, email_adress, telephone) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("isssi", $manager_id, $first_name, $last_name, $email_adress, $telephone);

            // Set parameters
            $manager_id = $_POST['manager_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email_adress = $_POST['email_adress'];
            $telephone = $_POST['telephone'];

            // Execute the statement
            if ($stmt->execute()) {
                echo "New record has been added successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
            // Close the statement
            $stmt->close();
        }

        // SQL query to fetch data from the user table
        $sql = "SELECT * FROM manager";
        $result = $connection->query($sql);

        // Check if there are any users
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['manager_id'] . "</td>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['last_name'] . "</td>
                    <td>" . $row['email_adress'] . "</td>
                    <td>" . $row['telephone'] . "</td>
                <td><a style='padding:4px' href='deletemanager.php?manager_id={$row['manager_id']}'>Delete</a></td>
                    <td><a style='padding:4px' href='manager_edit.php?manager_id={$row['manager_id']}'>Edit</a></td> 
                </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found</td></tr>";
        }
        // Close the database connection
        $connection->close();
        ?>
        </tbody>
    </table>
</div>

<footer><!-- Footer section -->
    <p>&copy; &reg; 2024 UR CBE BIT YEAR 2 @ Group A</p><!-- Copyright and trademark notice -->
</footer><!-- Footer section -->

</body>
</html>

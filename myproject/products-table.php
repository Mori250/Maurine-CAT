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
    <h4 style="text-align: center; font-family: century; font-weight: bold;">LIST OF PRODUCTS IN OUR SYSTEM</h4>
    <a href="products_form.html" class="btn btn-primary" style="margin-top: 0px;">New Product</a>
    <a href="home.html" class="btn btn-secondary" style="margin-left: 20px;">Back Home</a>
    <table class="table table-bordered">
        <thead class="bg-warning">
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Upload Date</th>
            <th>Action</th>
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

        // Check connection
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Prepare and bind the parameters
            $stmt = $connection->prepare("INSERT INTO products (Name, Price, Quantity, UploadDate) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sdis", $name, $price, $quantity, $uploadDate);

            // Set parameters
            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $uploadDate = date("Y-m-d"); // Current date

            // Execute the statement
            if ($stmt->execute()) {
                echo "New record has been added successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
            // Close the statement
            $stmt->close();
        }

        // SQL query to fetch data from the products table
        $sql = "SELECT * FROM products";
        $result = $connection->query($sql);

        // Check if there are any products
        if ($result && $result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row['ProductID'] . "</td>
                    <td>" . $row['Name'] . "</td>
                    <td>" . $row['Price'] . "</td>
                    <td>" . $row['Quantity'] . "</td>
                    <td>" . $row['UploadDate'] . "</td>
                    <td>
                        <a href='edit_product.php?id={$row['ProductID']}' class='btn btn-info btn-sm'>Edit</a>
                        <a href='delete_product.php?id={$row['ProductID']}' class='btn btn-danger btn-sm'>Delete</a>
                    </td> 
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

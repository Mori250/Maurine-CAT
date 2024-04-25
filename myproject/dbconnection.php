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
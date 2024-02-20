<button onclick="fetchDataTableCSP()">Click Me</button>

<?php
function fetchDataTableCSP() {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "123456";
    $dbname = "DataTableCSP";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query
    $sql = "SELECT * FROM DataTableCSP";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "First Name: " . $row["FirstName"]. " - Last Name: " . $row["LastName"]. " - Position: " . $row["TeamPosition"]. "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}
?>

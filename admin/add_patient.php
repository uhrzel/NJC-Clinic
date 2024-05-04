<?php
// Establish a database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "arzelzolina10"; // Replace with your MySQL password
$database = "njc"; // Replace with your database name

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Escape user inputs for security
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $birth = mysqli_real_escape_string($conn, $_POST['birth']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $occupation = mysqli_real_escape_string($conn, $_POST['occupation']);
    $height = mysqli_real_escape_string($conn, $_POST['height']);
    $weight = mysqli_real_escape_string($conn, $_POST['weight']);
    $contactnumber = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $province = mysqli_real_escape_string($conn, $_POST['province']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $postalcode = mysqli_real_escape_string($conn, $_POST['postalcode']);

    // Insert patient data into database
    $sql = "INSERT INTO patient (firstname, lastname, middlename, age, birth, gender, occupation, height, weight, contactnumber, province, city, postalcode) 
            VALUES ('$firstname', '$lastname', '$middlename', '$age', '$birth', '$gender', '$occupation', '$height', '$weight', '$contactnumber', '$province', '$city', '$postalcode')";

    if (mysqli_query($conn, $sql)) {
        echo "success"; // Return success message
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn); // Return error message
    }

    // Close database connection
    mysqli_close($conn);
}

<?php
// Establish a database connection
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "arzelzolina10"; // Replace with your MySQL password
$database = "njc"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total count of patients
$queryPatients = "SELECT COUNT(*) AS total_patients FROM patient";
$resultPatients = mysqli_query($conn, $queryPatients);
$rowPatients = mysqli_fetch_assoc($resultPatients);
$totalPatients = $rowPatients['total_patients'];


// // Fetch total count of voters
// $queryVoters = "SELECT COUNT(*) AS total_voters FROM voters";
// $resultVoters = mysqli_query($conn, $queryVoters);
// $rowVoters = mysqli_fetch_assoc($resultVoters);
// $totalVoters = $rowVoters['total_voters'];

// // Fetch total count of voters
// $queryVoters = "SELECT COUNT(*) AS total_votes FROM votes";
// $resultVoters = mysqli_query($conn, $queryVoters);
// $rowVoters = mysqli_fetch_assoc($resultVoters);
// $totalVoter = $rowVoters['total_votes'];

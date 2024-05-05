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

define('PAYPAL_SANDBOX', TRUE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'Ac7apTrlxmFcEoJs3UbsDCzXEnp2jiffrkdONqYm3E5DG88lkh19_WYigtx88MrISoHCttt155NqBSoH');
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'Insert_PayPal_Secret_Key_For_Sandbox_Here');
define('PAYPAL_PROD_CLIENT_ID', 'Insert_Live_PayPal_Client_ID_Here');
define('PAYPAL_PROD_CLIENT_SECRET', 'Insert_Live_PayPal_Secret_Key_Here');

$paypalClientId = "Ac7apTrlxmFcEoJs3UbsDCzXEnp2jiffrkdONqYm3E5DG88lkh19_WYigtx88MrISoHCttt155NqBSoH";
// Fetch total count of patients




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

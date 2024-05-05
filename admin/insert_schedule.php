<?php
// Include your database connection
include 'config/conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $patientId = $_POST['editPatientId'];
    $date = $_POST['editPatientDate'];
    $time = $_POST['editPatientTime'];
    $problem = $_POST['editPatientProblem'];
    $payment = $_POST['editPatientPayment'];

    // Perform SQL insertion
    $sql = "INSERT INTO schedule (patient_id, date, time, problem, payment) VALUES ('$patientId', '$date', '$time', '$problem', '$payment')";

    // Check if insertion was successful
    if (mysqli_query($conn, $sql)) {
        echo "Appointment scheduled successfully.";
        echo "Please poceed to checkout.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    // Redirect if accessed directly
    header("Location: index.php"); // Change this to your desired redirect location
    exit();
}

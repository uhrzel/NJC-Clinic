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

    // Check if the number of appointments for the selected date exceeds 20
    $sqlCount = "SELECT COUNT(*) as count FROM schedule WHERE `date` = '$date'";
    $resultCount = mysqli_query($conn, $sqlCount);
    $rowCount = mysqli_fetch_assoc($resultCount);
    $appointmentCount = $rowCount['count'];

    $message = "";

    // Check if the appointment count exceeds 20
    if ($appointmentCount >= 20) {
        $message = "Appointment cannot be scheduled. Maximum appointments reached for this date.";
    } else {
        // Perform SQL insertion
        $sql = "INSERT INTO schedule (patient_id, date, time, problem, payment) VALUES ('$patientId', '$date', '$time', '$problem', '$payment')";

        // Check if insertion was successful
        if (mysqli_query($conn, $sql)) {
            $message = "Appointment scheduled successfully.";
        } else {
            $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    echo $message;
} else {
    // Redirect if accessed directly
    header("Location: index.php"); // Change this to your desired redirect location
    exit();
}

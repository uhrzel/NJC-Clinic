<?php
// Include your database connection
include 'config/conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve patient ID and other form data
    $patientId = $_POST['editPatientId'];
    $firstname = $_POST['editPatientFirstname'];
    $lastname = $_POST['editPatientLastname'];
    $middlename = $_POST['editPatientMiddlename'];
    $age = $_POST['editPatientAge'];
    $birth = $_POST['editPatientBirth'];
    $gender = $_POST['editPatientGender'];
    $occupation = $_POST['editPatientOccupation'];
    $height = $_POST['editPatientHeight'];
    $weight = $_POST['editPatientWeight'];
    $contactnumber = $_POST['editPatientContactnumber'];
    $province = $_POST['editPatientProvince'];
    $city = $_POST['editPatientCity'];
    $postalcode = $_POST['editPatientPostalcode'];
    $password = md5($_POST['editPatientPassword']);

    // SQL update query
    $sql = "UPDATE patient SET 
            firstname = '$firstname', 
            lastname = '$lastname', 
            middlename = '$middlename', 
            age = '$age', 
            birth = '$birth', 
            gender = '$gender', 
            occupation = '$occupation', 
            height = '$height', 
            weight = '$weight', 
            contactnumber = '$contactnumber', 
            province = '$province', 
            city = '$city', 
            postalcode = '$postalcode',
            password = '$password' 
            WHERE patient_id = '$patientId'";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Patient record updated successfully";
    } else {
        echo "Error updating patient record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}

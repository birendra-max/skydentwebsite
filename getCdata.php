<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = trim(filter_input(INPUT_POST, 'full_nam', FILTER_SANITIZE_STRING));
    $lab_name = trim(filter_input(INPUT_POST, 'lab_nam', FILTER_SANITIZE_STRING));
    $email =  trim(filter_input(INPUT_POST, 'e_ml', FILTER_SANITIZE_EMAIL));
    $phone = trim(filter_input(INPUT_POST, 'pho_n', FILTER_SANITIZE_NUMBER_INT));
    $services = trim(filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING));
    $services_r = trim(filter_input(INPUT_POST, 'services_r', FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING));
    $date = date('Y-m-d h:i:sa');
    if ($conn->connect_error) {
        echo "Connection Error";
        exit;
    } else {
        if (!empty($full_name) and !empty($lab_name) and !empty($email) and !empty($phone) and !empty($services) and !empty($services_r)) {
            $stmt = $conn->prepare("insert into contact(name,lab_name,email,phone,services,require_type,message,contact_date) values(?,?,?,?,?,?,?,?)");
            $stmt->bind_param('ssssssss', $full_name, $lab_name, $email, $phone, $services, $services_r, $message, $date);

            if ($stmt->execute()) {
                echo "You form submitted successfully!, our team will review your requirements and connect with you within a few hours.";
                exit;
            } else {
                echo "Error in form submitting ! plz try again later";
                exit;
            }
        }
    }

    $conn->close();
}

exit;

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = trim($_POST['full_nam']);
    $lab_name = trim($_POST['lab_nam']);
    $email =  trim($_POST['e_ml']);
    $phone = trim($_POST['pho_n']);
    $services_r = trim($_POST['services_r']);
    $message = trim($_POST['message']);
    $date = date('Y-m-d h:i:sa');

    $emailTemplate = '
                    <!DOCTYPE html>
                    <html>
                    <head>
                    <meta charset="UTF-8">
                    <title>Contact Information</title>
                    </head>
                    <body style="margin:0; padding:0; font-family:Arial, sans-serif; background-color:#f9fafb;">
                    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; margin:auto; background:#ffffff; border-radius:12px; box-shadow:0 4px 10px rgba(0,0,0,0.1);">
                        <tr>
                        <td style="background:#1d4ed8; padding:20px; border-radius:12px 12px 0 0; text-align:center; color:#ffffff;">
                            <h1 style="margin:0; font-size:24px;">Contact Information</h1>
                        </td>
                        </tr>
                        <tr>
                        <td style="padding:20px;">
                            <p style="font-size:16px; color:#374151; margin-bottom:20px;">Here are the details submitted:</p>
                            <table width="100%" cellpadding="8" cellspacing="0" style="border-collapse:collapse;">
                            <tr style="background:#f3f4f6;">
                                <td style="font-weight:bold; width:30%; border:1px solid #e5e7eb;">Full Name</td>
                                <td style="border:1px solid #e5e7eb;">' . $full_name . '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; border:1px solid #e5e7eb;">Lab Name</td>
                                <td style="border:1px solid #e5e7eb;">' . $lab_name . '</td>
                            </tr>
                            <tr style="background:#f3f4f6;">
                                <td style="font-weight:bold; border:1px solid #e5e7eb;">Email</td>
                                <td style="border:1px solid #e5e7eb;">' . $email . '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; border:1px solid #e5e7eb;">Phone</td>
                                <td style="border:1px solid #e5e7eb;">' . $phone . '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; border:1px solid #e5e7eb;">Selected Option</td>
                                <td style="border:1px solid #e5e7eb;">' . $services_r . '</td>
                            </tr>
                            <tr style="background:#f3f4f6;">
                                <td style="font-weight:bold; border:1px solid #e5e7eb;">Message</td>
                                <td style="border:1px solid #e5e7eb;">' . $message . '</td>
                            </tr>
                            <tr>
                                <td style="font-weight:bold; border:1px solid #e5e7eb;">Date</td>
                                <td style="border:1px solid #e5e7eb;">' . $date . '</td>
                            </tr>
                            </table>
                        </td>
                        </tr>
                        <tr>
                        <td style="background:#f3f4f6; text-align:center; padding:15px; border-radius:0 0 12px 12px; font-size:14px; color:#6b7280;">
                            © ' . date("Y") . ' SkyDent. All rights reserved.
                        </td>
                        </tr>
                    </table>
                    </body>
                    </html>
                    ';
    if ($conn->connect_error) {
        echo "Connection Error";
        exit;
    } else {
        if (!empty($full_name) and !empty($lab_name) and !empty($email) and !empty($phone) and !empty($services_r)) {
            $stmt = $conn->prepare("insert into contact(name,lab_name,email,phone,require_type,message,contact_date) values(?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssss', $full_name, $lab_name, $email, $phone, $services_r, $message, $date);

            if ($stmt->execute()) {

                $mail = new PHPMailer(true);

                try {
                    $mail->isSMTP();                                            // Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server
                    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                    $mail->Username   = 'devansh@dentigolab.com';            // SMTP username
                    $mail->Password   = 'stuy rdkd xcbd rqsh';                  // SMTP password (App Password if Gmail)
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption
                    $mail->Port       = 587;                                    // TCP port to connect to

                    // Recipients
                    $mail->setFrom('devansh@dentigolab.com', ' Devamsh Dentigolab');
                    // $mail->addAddress('skydent@skydentdesigns.com', 'Skydent Design');
                    $mail->addAddress('birendrapradhan112@gmail.com', 'Birendra Kumar Pradhan');

                    // Content
                    $mail->isHTML(true);                                        // Set email format to HTML
                    $mail->Subject = 'Contact Form Submission - ' . $full_name;
                    $mail->Body    = $emailTemplate;
                    $mail->AltBody = "Full Name: $full_name\nLab Name: $lab_name\nEmail: $email\nPhone: $phone\nOption: $services_r\nMessage: $message\nDate: $date";

                    if ($mail->send()) {
                        echo "You form submitted successfully!, our team will review your requirements and connect with you within a few hours.";
                        exit;
                    } else {
                        echo "Error in form submitting ! plz try again later";
                    }
                } catch (Exception $e) {
                    echo "Message could not be sent. Error: {$mail->ErrorInfo}";
                }
            } else {
                echo "Error in form submitting ! plz try again later";
                exit;
            }
        }
    }

    $conn->close();
}

exit;

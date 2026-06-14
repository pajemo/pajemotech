<?php
// mailer.php - Email handling functionality
session_start();

// Configuration
$SMTP_HOST = 'smtp.gmail.com'; // Change to your SMTP host
$SMTP_PORT = 587;
$SMTP_USERNAME = 'your-email@gmail.com'; // Change to your email
$SMTP_PASSWORD = 'your-app-password'; // Use app password for Gmail
$FROM_EMAIL = 'hello@pajemotech.com';
$FROM_NAME = 'Pajemotech';
$TO_EMAIL = 'hello@pajemotech.com'; // Your receiving email

// Response array
$response = array('success' => false, 'message' => '');

// Check if form was submitted
if ($_POST) {
    // Sanitize and validate inputs
    $name = trim(filter_var($_POST['name'] ?? '', FILTER_SANITIZE_STRING));
    $email = trim(filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL));
    $subject = trim(filter_var($_POST['subject'] ?? '', FILTER_SANITIZE_STRING));
    $message = trim(filter_var($_POST['message'] ?? '', FILTER_SANITIZE_STRING));
    $phone = trim(filter_var($_POST['phone'] ?? '', FILTER_SANITIZE_STRING));
    $company = trim(filter_var($_POST['company'] ?? '', FILTER_SANITIZE_STRING));
    $service = trim(filter_var($_POST['service'] ?? '', FILTER_SANITIZE_STRING));
    
    // Validation
    if (empty($name)) {
        $response['message'] = 'Please enter your name.';
    } elseif (!$email) {
        $response['message'] = 'Please enter a valid email address.';
    } elseif (empty($subject)) {
        $response['message'] = 'Please enter a subject.';
    } elseif (empty($message)) {
        $response['message'] = 'Please enter your message.';
    } else {
        // Basic spam protection
        if (strlen($message) < 10) {
            $response['message'] = 'Message is too short.';
        } elseif (preg_match('/\b(?:viagra|cialis|pharmacy|casino|poker|lottery|winner|congratulations)\b/i', $message)) {
            $response['message'] = 'Your message contains spam-like content.';
        } else {
            // Prepare email content
            $emailSubject = "New Contact Form Submission: " . $subject;
            
            $emailBody = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                    <h2 style='color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px;'>
                        New Contact Form Submission
                    </h2>
                    
                    <div style='background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                        <h3 style='margin-top: 0; color: #2c3e50;'>Contact Details</h3>
                        <table style='width: 100%; border-collapse: collapse;'>
                            <tr>
                                <td style='padding: 8px; font-weight: bold; width: 120px;'>Name:</td>
                                <td style='padding: 8px;'>" . htmlspecialchars($name) . "</td>
                            </tr>
                            <tr>
                                <td style='padding: 8px; font-weight: bold;'>Email:</td>
                                <td style='padding: 8px;'>" . htmlspecialchars($email) . "</td>
                            </tr>";
                            
            if (!empty($phone)) {
                $emailBody .= "
                            <tr>
                                <td style='padding: 8px; font-weight: bold;'>Phone:</td>
                                <td style='padding: 8px;'>" . htmlspecialchars($phone) . "</td>
                            </tr>";
            }
            
            if (!empty($company)) {
                $emailBody .= "
                            <tr>
                                <td style='padding: 8px; font-weight: bold;'>Company:</td>
                                <td style='padding: 8px;'>" . htmlspecialchars($company) . "</td>
                            </tr>";
            }
            
            if (!empty($service)) {
                $emailBody .= "
                            <tr>
                                <td style='padding: 8px; font-weight: bold;'>Service:</td>
                                <td style='padding: 8px;'>" . htmlspecialchars($service) . "</td>
                            </tr>";
            }
            
            $emailBody .= "
                            <tr>
                                <td style='padding: 8px; font-weight: bold;'>Subject:</td>
                                <td style='padding: 8px;'>" . htmlspecialchars($subject) . "</td>
                            </tr>
                        </table>
                    </div>
                    
                    <div style='background: #fff; padding: 20px; border: 1px solid #e1e8ed; border-radius: 8px;'>
                        <h3 style='margin-top: 0; color: #2c3e50;'>Message</h3>
                        <p>" . nl2br(htmlspecialchars($message)) . "</p>
                    </div>
                    
                    <div style='margin-top: 20px; padding: 15px; background: #e8f5e8; border-radius: 8px; font-size: 12px; color: #666;'>
                        <p style='margin: 0;'>
                            <strong>Sent from:</strong> Pajemotech Contact Form<br>
                            <strong>IP Address:</strong> " . $_SERVER['REMOTE_ADDR'] . "<br>
                            <strong>User Agent:</strong> " . htmlspecialchars($_SERVER['HTTP_USER_AGENT']) . "<br>
                            <strong>Date:</strong> " . date('Y-m-d H:i:s') . "
                        </p>
                    </div>
                </div>
            </body>
            </html>";
            
            // Email headers
            $headers = array(
                'MIME-Version' => '1.0',
                'Content-type' => 'text/html; charset=UTF-8',
                'From' => $FROM_NAME . ' <' . $FROM_EMAIL . '>',
                'Reply-To' => $email,
                'X-Mailer' => 'PHP/' . phpversion()
            );
            
            $headerString = '';
            foreach ($headers as $key => $value) {
                $headerString .= $key . ': ' . $value . "\r\n";
            }
            
            // Send email
            if (mail($TO_EMAIL, $emailSubject, $emailBody, $headerString)) {
                $response['success'] = true;
                $response['message'] = 'Thank you! Your message has been sent successfully. We\'ll get back to you soon.';
                
                // Send auto-reply to sender
                $autoReplySubject = "Thank you for contacting Pajemotech";
                $autoReplyBody = "
                <html>
                <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
                    <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                        <div style='text-align: center; margin-bottom: 30px;'>
                            <h1 style='color: #2c3e50; margin: 0;'>Pajemotech</h1>
                            <p style='color: #666; margin: 5px 0;'>Web Design & Development</p>
                        </div>
                        
                        <h2 style='color: #3498db;'>Thank you for your message!</h2>
                        
                        <p>Hi " . htmlspecialchars($name) . ",</p>
                        
                        <p>Thank you for reaching out to us. We've received your message and will get back to you within 24 hours.</p>
                        
                        <div style='background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;'>
                            <h3 style='margin-top: 0; color: #2c3e50;'>Your Message Summary</h3>
                            <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
                            <p><strong>Message:</strong></p>
                            <p>" . nl2br(htmlspecialchars($message)) . "</p>
                        </div>
                        
                        <p>In the meantime, feel free to explore our website and check out our latest work in our portfolio.</p>
                        
                        <p>Best regards,<br>
                        The Pajemotech Team</p>
                        
                        <div style='margin-top: 30px; padding: 20px; background: #2c3e50; color: white; border-radius: 8px; text-align: center;'>
                            <p style='margin: 0;'>
                                <strong>Pajemotech</strong><br>
                                Email: Info@pajemotech.com<br>
                                Phone: +233 54 394 3204<br>
                                WhatsApp: +233 54 238 7361<br>
                                Website: www.pajemotech.com
                            </p>
                        </div>
                    </div>
                </body>
                </html>";
                
                $autoReplyHeaders = array(
                    'MIME-Version' => '1.0',
                    'Content-type' => 'text/html; charset=UTF-8',
                    'From' => $FROM_NAME . ' <' . $FROM_EMAIL . '>',
                    'X-Mailer' => 'PHP/' . phpversion()
                );
                
                $autoReplyHeaderString = '';
                foreach ($autoReplyHeaders as $key => $value) {
                    $autoReplyHeaderString .= $key . ': ' . $value . "\r\n";
                }
                
                mail($email, $autoReplySubject, $autoReplyBody, $autoReplyHeaderString);
                
            } else {
                $response['message'] = 'Sorry, there was an error sending your message. Please try again or contact us directly.';
            }
        }
    }
    
    // Return JSON response for AJAX requests
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }
    
    // For regular form submissions, redirect back with message
    $_SESSION['contact_message'] = $response['message'];
    $_SESSION['contact_success'] = $response['success'];
    
    $redirect_url = $_SERVER['HTTP_REFERER'] ?? 'contact.php';
    header('Location: ' . $redirect_url);
    exit;
}

// If accessed directly without POST, redirect to contact page
header('Location: contact.php');
exit;
?>
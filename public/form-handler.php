<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: http://localhost:8080");
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    $formType = $data['formType'] ?? '';

    if ($formType === 'subscription') {
        // Обработка формы подписки
        $email = htmlspecialchars($data['email'] ?? '');

        if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
            exit;
        }

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'misterleandr@gmail.com';
            $encryptedPassword = 'dHh4bGlleXdoc3ZxbW5sbQ==%';
            $mail->Password = base64_decode($encryptedPassword);
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('misterleandr@gmail.com', 'Carbon Nurture Support');
            $mail->addAddress('lopezdenizofficial@gmail.com', 'Recipient Name');

            $mail->isHTML(true);
            $mail->Subject = 'New Subscription';
            $mail->Body = "<p><strong>Email:</strong> $email</p>";
            $mail->AltBody = "Email: $email";

            $mail->send();
            echo json_encode(['success' => true, 'message' => 'Subscription successful!']);
        } catch (Exception $e) {
            file_put_contents(__DIR__ . '/email_errors.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
            echo json_encode(['success' => false, 'error' => 'Subscription failed.']);
        }
    } elseif ($formType === 'contact') {
        // Обработка основной формы
        $name = htmlspecialchars($data['name'] ?? '');
        $email = htmlspecialchars($data['email'] ?? '');
        $message = htmlspecialchars($data['message'] ?? '');

        if (!$name || !$email || !$message) {
            echo json_encode(['success' => false, 'error' => 'All fields are required.']);
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['success' => false, 'error' => 'Invalid email address.']);
            exit;
        }

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'misterleandr@gmail.com';
            $encryptedPassword = 'dHh4bGlleXdoc3ZxbW5sbQ==%';
            $mail->Password = base64_decode($encryptedPassword);
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('misterleandr@gmail.com', 'Carbon Nurture Support');
            $mail->addAddress('lopezdenizofficial@gmail.com', 'Recipient Name');
            $mail->addReplyTo($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'New Message from ' . $name;
            $mail->Body = "<p><strong>Name:</strong> $name</p>
                           <p><strong>Email:</strong> $email</p>
                           <p><strong>Message:</strong></p>
                           <p>$message</p>";
            $mail->AltBody = "Name: $name\nEmail: $email\nMessage: $message";

            $mail->send();
            echo json_encode(['success' => true, 'message' => 'Message sent successfully!']);
        } catch (Exception $e) {
            file_put_contents(__DIR__ . '/email_errors.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
            echo json_encode(['success' => false, 'error' => 'Message sending failed.']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid form type.']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
}
?>

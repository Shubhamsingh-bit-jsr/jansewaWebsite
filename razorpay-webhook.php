<?php
// Load Composer autoload (for PHPMailer)
require 'vendor/autoload.php';
require 'fpdf.php';

// Razorpay Secret
$secret = "your_razorpay_webhook_secret"; // Replace with your Razorpay webhook secret

// 1. Read POST body
$body = file_get_contents('php://input');
$signature = $_SERVER['HTTP_X_RAZORPAY_SIGNATURE'] ?? '';

// 2. Verify signature
function verifySignature($body, $signature, $secret) {
    $expected = hash_hmac('sha256', $body, $secret);
    return hash_equals($expected, $signature);
}

// Exit if invalid signature
if (!verifySignature($body, $signature, $secret)) {
    http_response_code(400);
    echo "Invalid signature";
    exit;
}

// 3. Parse data
$data = json_decode($body, true);
if (!$data || $data['event'] !== 'payment.captured') {
    http_response_code(200);
    exit; // We only care about payment.captured
}

$payment = $data['payload']['payment']['entity'];
$amount = $payment['amount'] / 100; // in INR
$email = $payment['email'] ?? 'donor@example.com';
$name = $payment['notes']['name'] ?? 'Donor';
$paymentId = $payment['id'];
$date = date("d M Y");

// 4. Generate PDF invoice
class PDF extends FPDF {
    function Header() {
        $this->SetFont('Arial','B',14);
        $this->Cell(0,10,'Jan Seva Sangh Trust - Donation Receipt',0,1,'C');
        $this->Ln(5);
    }
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'Thank you for your support!',0,0,'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,"Date: $date",0,1);
$pdf->Cell(0,10,"Receipt No: $paymentId",0,1);
$pdf->Cell(0,10,"Donor Name: $name",0,1);
$pdf->Cell(0,10,"Email: $email",0,1);
$pdf->Cell(0,10,"Donation Amount: ₹" . number_format($amount, 2),0,1);
$pdf->Ln(5);
$pdf->MultiCell(0,10,"We thank you for your kind contribution towards animal rescue and care. This receipt serves as proof of your donation.");

// Save to server
$filename = "receipt_$paymentId.pdf";
$pdf->Output("F", __DIR__ . "/$filename");

// 5. Email using PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
try {
    // SMTP config
    $mail->isSMTP();
    $mail->Host = 'smtp.yourdomain.com'; // e.g., smtp.gmail.com
    $mail->SMTPAuth = true;
    $mail->Username = 'your_email@yourdomain.com';
    $mail->Password = 'your_email_password';
    $mail->SMTPSecure = 'tls'; // or 'ssl'
    $mail->Port = 587; // 465 for SSL

    // Email content
    $mail->setFrom('your_email@yourdomain.com', 'Jan Seva Sangh Trust');
    $mail->addAddress($email, $name);
    $mail->Subject = "Your Donation Receipt - Jan Seva Sangh Trust";
    $mail->Body = "Dear $name,\n\nThank you for your donation of ₹" . number_format($amount, 2) . ".\n\nPlease find your receipt attached.\n\nRegards,\nJan Seva Sangh Trust";
    $mail->addAttachment(__DIR__ . "/$filename");

    $mail->send();
} catch (Exception $e) {
    error_log("Mail Error: " . $mail->ErrorInfo);
}

// 6. Done
http_response_code(200);
echo "Success";
?>

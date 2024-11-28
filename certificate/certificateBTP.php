<?php
// Include FPDF library
require('fpdf.php');

// Include User class and start the session
include_once __DIR__ . '/../classes/User.php';
session_start();

// Check if user ID exists in session
if (!isset($_SESSION['userId'])) {
    die('User ID is not set in session.');
}

// Fetch user details using User class
$getUser = new User($_SESSION['userId']);
$user = $getUser->getUser();
// Create a new PDF instance in Landscape orientation
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

$pdf->Image('./background.png', -40, 0, 350, 210);

// Set font for the certificate title
$pdf->SetFont('Arial', 'B', 24);

// Add certificate title and subtitle
$pdf->SetXY(10, 20);  // Set position
$pdf->Cell(0, 10, 'Certificate of Achievement', 0, 1, 'C');


// Add the recipient's name
$pdf->SetXY(10, 60);
$pdf->SetFont('Arial', '', 20);
$pdf->Cell(0, 10, 'This is to certify that', 0, 1, 'C');

// Display the user's name in bold and larger font
$pdf->SetFont('Arial', 'B', 26);
$pdf->SetXY(10, 80);
$pdf->Cell(0, 10, $user['name'] . " " . $user['surname'], 0, 1, 'C');


// Add additional details with date
$pdf->SetXY(10, 120);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(0, 10, "is THE BEST TEAM PLAYER " . date("F j, Y"), 0, 'C');

// Add signature area
$pdf->SetXY(10, 150);
$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 10, '________________________', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, 'Pabau', 0, 1, 'C');

// Output the PDF (this triggers the download)
$pdf->Output('D', 'certificate-btp-' . $user['name'] . '.pdf');

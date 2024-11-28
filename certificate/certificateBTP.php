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
$getUser = new User($_SESSION['userId']);  // Pass user ID to constructor
$user = $getUser->getUser();  // Assuming this returns an array with 'name' and 'surname'

// Create a new PDF instance in Landscape orientation
$pdf = new FPDF('L', 'mm', 'A4');  // 'L' for Landscape (horizontal), 'mm' for millimeters, 'A4' for A4 size
$pdf->AddPage();  // Add a new page

$pdf->Image('./background.png', -40, 0, 350, 210);

// Set font for the certificate title
$pdf->SetFont('Arial', 'B', 24);

// Add certificate title and subtitle
$pdf->SetXY(10, 20);  // Set position
$pdf->Cell(0, 10, 'Certificate of Achievement', 0, 1, 'C');


// Add the recipient's name
$pdf->SetXY(10, 60);  // Set position for recipient
$pdf->SetFont('Arial', '', 20);  // Regular font style for the body text
$pdf->Cell(0, 10, 'This is to certify that', 0, 1, 'C');

// Display the user's name in bold and larger font
$pdf->SetFont('Arial', 'B', 26);  // Bold and larger font for the name
$pdf->SetXY(10, 80);  // Set position for name
$pdf->Cell(0, 10, $user['name'] . " " . $user['surname'], 0, 1, 'C');


// Add additional details with date
$pdf->SetXY(10, 120);  // Set position for additional details
$pdf->SetFont('Arial', '', 16);  // Regular font for additional text
$pdf->MultiCell(0, 10, "is THE BEST TEAM PLAYER " . date("F j, Y"), 0, 'C');

// Add signature area
$pdf->SetXY(10, 150);  // Set position for the signature line
$pdf->SetFont('Arial', '', 14);  // Regular font for signature
$pdf->Cell(0, 10, '________________________', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);  // Smaller font for signature text
$pdf->Cell(0, 10, 'Pabau', 0, 1, 'C');

// Output the PDF (this triggers the download)
$pdf->Output('D', 'certificate-btp-' . $user['name'] . '.pdf');

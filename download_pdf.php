<?php
// Include dompdf library
require_once 'vendor/autoload.php';

// Get HTML content from POST request
$html_content = $_POST['html_content'];

// Create PDF
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml($html_content);

// (Optional) Set paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render PDF (important for CSS styles to be applied)
$dompdf->render();

// Output PDF as attachment or to the browser
$dompdf->stream('table.pdf');

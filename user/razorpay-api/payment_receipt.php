<?php

require('config.php');
require('dompdf/autoload.inc.php');
use Dompdf\Dompdf;


// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('payment_details.php');
$html = ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'Portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('payment_receipt.pdf',['Attachment'=>false]);

?>
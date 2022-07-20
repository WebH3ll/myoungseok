<?php
require __DIR__ . '/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

if(isset($_GET['title'])) {
    $title = $_GET['title'];
    $title_arg = "&title=" . urlencode($title);
} else {
    $title = "";
    $title_arg = "";
}

$img = base64_encode(file_get_contents(__DIR__ . "/img.png"));

$html = "<!DOCTYPE html>
<html>
<head>
<title>Webh3ll</title>
<link rel='shortcut icon' href='/images/favicon.png' />
<style>
body {
    display: block;
    text-align: center;
}
</style>
</head>
<body>
<h1>$title</h1>
<img src='data:image/png;base64,$img'>";

if(isset($_GET['show_export']) && !isset($_GET['pdf'])) {
    $html .= "<br/><a href=index.php?pdf$title_arg  target='_blank'>Export to PDF</a>";
}

$html .= "</body>";
$html .= "</html>";

if (isset($_GET['pdf'])) {
    $filename = "puang.pdf";

    $options = new Options();
    $options->setIsRemoteEnabled(true);

    $dompdf = new Dompdf($options);   
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A5', 'portrait');

    // lets us know if something goes wrong
    global $_dompdf_show_warnings;
    $_dompdf_show_warnings = true;

    // render the HTML as PDF
    $dompdf->render();

    // output the generated PDF to browser
    $dompdf->stream($filename, array('Attachment' => 0));
} else {
    echo $html;
    
    echo "<br><i>Have you ever heard of DomPDF?</i>";
}

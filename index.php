<?php
require 'vendor/autoload.php';

use Mpdf\Mpdf;

try {

    $mpdf = new Mpdf();

    $mpdf->WriteHTML('<h1>Teste do Exercico 3, este é um PDF gerado com mPDF!</h1>');

    $mpdf->Output('meuArquivo.pdf', 'I'); 
} catch (\Mpdf\MpdfException $e) {
    echo 'Erro ao gerar PDF: ' . $e->getMessage();
} 

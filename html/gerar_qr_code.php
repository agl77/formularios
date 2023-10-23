<?php
include "phpqrcode/qrlib.php";

// Texto que será codificado no QR Code
$texto = $_POST['texto'];

// Tamanho do QR Code
$tamanho = 10;

// Margem do QR Code
$margem = 5;

// Nível de correção de erro
$correcaoErro = QR_ECLEVEL_H;

// Gerar o QR Code
QRcode::png($texto, false, $correcaoErro, $tamanho, $margem);
?>


<?php 
    require 'vendor/autoload.php';
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    $dompdf->loadHtml('Danilo - Gerar PDF com PHP');

    // (Optional) Setup the paper size and orientation
    //landscape -> paisagem
    //portrait -> retrato
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>
<body>
    <div>
        <h2>Gerar pdf</h2>
        <a href=""></a>
    </div>
    
</body>
</html>
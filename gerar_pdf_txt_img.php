<?php 
    require './vendor/autoload.php';
    
    use Dompdf\Dompdf;

    $dompdf = new Dompdf(['enable_remote' => true]);

    $dados = "<h1> Danilo - Gerar PDF com PHP</h1> ";
    $dados .= "<img src='http://localhost/gerar_pdf_php/img/foto.jpg' style='width:300px;height: 300px;'>";

    $dompdf->loadHtml($dados);

    // (Optional) Setup the paper size and orientation
    //landscape -> paisagem
    //portrait -> retrato
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();

?>

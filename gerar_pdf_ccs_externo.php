<?php 
    require './vendor/autoload.php';
    
    use Dompdf\Dompdf;

    $dompdf = new Dompdf(['enable_remote' => true]);

    $dados = "<!DOCTYPE html>";
    $dados .= "<html lang='pt-br'>";
    $dados .= "<head>";
    $dados .= "<meta charset='UTF-8'>";
    $dados .= "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
    $dados .= "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    $dados .= "<link rel='stylesheet' href='http://localhost/gerar_pdf_php/css/style.css'>";
    $dados .= "<title>PDF</title>";
    $dados .= "</head>";
    $dados .= "<body>";
    $dados .= "<h2> Danilo - Gerar PDF com PHP</h2> ";
    $dados .= "<img src='http://localhost/gerar_pdf_php/img/foto.jpg' ><br>";
    $dados .= "um texto qualquer foi escrevido , um texto qualquer foi escrevido , um texto qualquer foi escrevido , um texto qualquer foi escrevido , um texto qualquer foi escrevido";
    $dados .= "</body>";
    $dados .= "</html>";
    

    
    

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
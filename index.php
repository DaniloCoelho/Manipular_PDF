<?php 
    require 'vendor/autoload.php';
    //use Dompdf\Dompdf;

    //Documentação e Instalação -> https://github.com/dompdf/dompdf
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='http://localhost/gerar_pdf_php/css/style.css'>
    <title>PDF</title>
</head>
<body>
    
    <div>
        <h4>Gerar pdf texto simples</h4>
        <a href="gerar_pdf.php"><button>Gerar</button></a>
    </div>

    <div>
        <h4>Gerar pdf com txt img </h4>
        <a href="gerar_pdf_txt_img.php"><button>Gerar</button></a>
    </div>
    

    <div>
        <h4>Gerar pdf com css externo </h4>
        <a href="gerar_pdf_ccs_externo.php"><button>Gerar</button></a>
    </div>

    <div>
        <h4>Gerar pdf com dados do BD </h4>
        <a href="gerar_pdf_bd.php"><button>Gerar</button></a>
    </div>
    

    <div>
        <h4>Gerar pdf pesquisa dados no BD </h4>
        <form action="gera_pdf_pesquisa_bd.php" method="get">
        <input type="text" name="texto" id="texto">
        <input type="submit" name="pesquisa" value="Gerar">
        </form>
    </div>
    
    <div>
        <h4>Gerar pdf pesquisa entre datas dados no BD </h4>
        <form action="gera_pdf_pesquisa_datas_bd.php" method="get">
        <label for="data_ini">Data início:</label>
        <input type="date" name="data_ini" id="data_ini"><br><br>
        <label for="data_fin">Data final:</label>
        <input type="date" name="data_fin" id="data_fin"><br>
        <input type="submit" name="pesquisa" value="Gerar">
        </form>
    </div>
    <div>
        <h4>Receber PDF base64 e imprimir o PDF na tela</h4>
        <form action="base64.php" method="post">
        
        <textarea name="text64" id="text64" rows="10" cols="100"></textarea><br>
        <input type="submit" name="base64" value="Gerar">
        </form>
    </div>
    <div>
        <h4>Receber PDF base64 e imprimir o PDF na tela</h4>
        <form action="gerar_pdf_base64.php" method="post" enctype="multipart/form-data">
            <label for=""></label>
            <input type="file" name="arquivo" id="arquivo" accept="application/pdf"><br><br>
            <input type="submit" value="Enviar">

        </form>
    </div>
    <div>
        <h4>Ler arquivo pdf e escrever na tela</h4>
        <p>Usando smalot/pdfparser </p>
        <form action="ler_pdf_escrever_tela.php" method="post" enctype="multipart/form-data">
            <input type="file" name="ler_pdf" id="ler_pdf" accept="application/pdf"><br><br>
            <input type="submit" value="Enviar_PDF">

        </form>
    </div>
    <div>
        <h4>Ler arquivo pdf e escrever por pagina</h4>
        <p>Usando smalot/pdfparser </p>
        <form action="ler_pdf_por_pagina.php" method="post" enctype="multipart/form-data" >
            <input type="file" name="ler_pdf" id="ler_pdf" accept="application/pdf"><br><br>
            <input type="submit" value="Enviar_PDF">

        </form>
    </div>
    
</body>
</html> 
<?php
    require 'vendor/autoload.php';

    
    var_dump($_FILES);
     //Instanciar a classe ler conteúdo do PDF
    $parser = new \Smalot\PdfParser\Parser();

    /*chamar metodo para ler deve se passar o endereço
    $pdf = $parser->parseFile('/path/to/document.pdf');*/

    if(isset($_FILES['ler_pdf'])){
        $file = $_FILES['ler_pdf'];
        //var_dump($file);
        if($file['type'] == 'application/pdf'){

            $pdf = $parser->parseFile($file['tmp_name']);

            //recuperar as paginas
            $pages = $pdf->getPages();

            foreach($pages as $page){
               // PHP_EOL - força quebra de linha na visualição
               echo nl2br($page->getText(). PHP_EOL);
            }
            
        }
    }
<?php
    if(isset($_FILES['arquivo'])){
        $file = $_FILES['arquivo'];
        //var_dump($file);
        if($file['type'] == 'application/pdf'){
            $arquivo = file_get_contents($file['tmp_name']);
            $arquivo_base64 = base64_encode($arquivo);

        }
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='http://localhost/gerar_pdf_php/css/style.css'>
    <title>Código base 64 pdf</title>
</head>
<body>
        <?php echo $arquivo_base64; ?>

        <br>
        <br>

        <a href="http://localhost/gerar_pdf_php/index.php">voltar</a>
    
</body>
</html>
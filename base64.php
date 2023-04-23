<?php
    require './vendor/autoload.php';
    require_once './conexao.php';
    use Dompdf\Dompdf;

    if(isset($_POST['text64']) && $_POST['text64'] != ""){
        header('Content-Type: application/pdf');
        echo base64_decode($_POST['text64']);
    }

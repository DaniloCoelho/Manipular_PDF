<?php 
    require './vendor/autoload.php';
    require_once './conexao.php';
    use Dompdf\Dompdf;
    
    if(isset($_GET['data_ini']) || isset($_GET['data_fin'])){
        $inicio = $_GET['data_ini'];
        $final = $_GET['data_fin'];
        if($_GET['data_ini'] == "" ){
            $inicio = '0000-00-00';
        }
        if($_GET['data_fin'] == ""){
            $final = date('Y/m/d');
        }

        $sql = "SELECT id_usuarios ,nome ,email ,data_nasc FROM usuarios WHERE data_nasc BETWEEN :inicio AND :final ORDER BY data_nasc";
        $query = $con->prepare($sql);
        $query->bindParam(':inicio' ,$inicio , PDO::PARAM_STR);
        $query->bindParam(':final' ,$final , PDO::PARAM_STR);
        $query->execute();

        if(($query) and ($query->rowCount() != 0)){

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
            $dados .= "<h2> Danilo - Gerar PDF com Dados do BD </h2> ";

        while($row_usuario = $query->fetch(PDO::FETCH_ASSOC)){
            extract($row_usuario); //torna key como variavel

            $dados .= "ID: $id_usuarios <br>";
            $dados .= "Nome: $nome <br>";
            $dados .= "Email: $email <br>";
            $dados .= "Data de Nascimento: $data_nasc <br>";
            $dados .= "<hr>";
            $dados .= "<br>";
            $dados .= "";
            $dados .= "";   
        } 
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
        }else{
            echo "não contém dados nesta pesquisa";
        }
    }else{
        echo "Digite uma data";
    }
    
    
    
?>
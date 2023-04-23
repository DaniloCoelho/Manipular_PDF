<?php

    define("BD_USUARIO", "root");
    define("BD_SENHA" ,"");
    define("BD_DSN","mysql:dbname=simulado;host=127.0.0.1");
    //define("EMAIL_NOTIFICACAO" , "meuemail@meudominio.com.br");

    try{
        $con = new PDO(BD_DSN ,BD_USUARIO ,BD_SENHA  );
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "certo";
    } catch(PDOException $e){
        echo "PDO Falha na conexão com o banco de dados".$e->getMessage();
        die();

    }
    
    

?>
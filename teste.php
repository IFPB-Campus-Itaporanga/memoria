<?php 
    if(isset($_FILES["file"])){
        if($_FILES["file"]['error'] === UPLOAD_ERR_OK){

            $diretorio_destino = __DIR__ . '\img';
            $nome_arquivo_original = $_FILES["file"]['name'];
            $extencao_aceitas = array("image/jpg", "image/jpeg", "image/png");
            $nome_temporario = $_FILES["file"]['tmp_name'];
            $extencao_arquivo = $_FILES["file"]['type'];

            if(in_array($extencao_arquivo,$extencao_aceitas)){
                if(move_uploaded_file($nome_temporario,"$diretorio_destino/file.png")){
                    echo "Upload de arquivo realizado com sucesso!";
                    echo $_FILES["file"]['type'];
                    }else{
                            echo "Não foi possível processar o upload";
                        }
                    
            }
            
            // 
        }}

    include "teste.html"


?>


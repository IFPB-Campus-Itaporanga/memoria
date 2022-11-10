<!-- <html>
<head>
    <link rel="stylesheet" href="estilo.css">
</head>

    // $num_blocos = 12;
    // $colunas = round(sqrt($num_blocos));
    // $linhas = $num_blocos / $colunas;
       
    // for($i = 0;$i< $colunas; $i++){
    //     for($j = 0; $j < $linhas; $j++){
    //         $unidade = "<div class='bloco'></div>";
    //         echo $unidade;
    //     }
    //     echo "<br>";
    // }

?>
</html> -->


<?php 
    if(isset($_FILES['file'])){
        if($_FILES['file']['error'] === UPLOAD_ERR_OK){

            $diretorio_destino = __DIR__ . '\imagens';
            $nome_arquivo_original = $_FILES['file']['name'];
            $extencao_aceitas = array("image/jpg", "image/jpeg", "image/png");
            $nome_temporario = $_FILES['file']['tmp_name'];
            $extencao_arquivo = $_FILES['file']['type'];

            if(in_array($extencao_arquivo,$extencao_aceitas)){
                if(move_uploaded_file($nome_temporario,"$diretorio_destino/img_1.png")){

                    echo "Upload de arquivo realizado com sucesso!";
                    }else{
                            echo "Não foi possível processar o upload";
                        }
                    }
            }}
    
    include 'upload.html';

?>
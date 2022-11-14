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


    for ($i = 1; $i <= 6; $i++) {
        
        echo "The number is: $i <br>";
        if(isset($_FILES["img_$i"])){
            if($_FILES["img_$i"]['error'] === UPLOAD_ERR_OK){
    
                $diretorio_destino = __DIR__ . '/../img';
                $nome_arquivo_original = $_FILES["img_$i"]['name'];
                $extencao_aceitas = array("image/jpg", "image/jpeg", "image/png");
                $nome_temporario = $_FILES["img_$i"]['tmp_name'];
                $extencao_arquivo = $_FILES["img_$i"]['type'];
    
                if(in_array($extencao_arquivo,$extencao_aceitas)){
                    if(move_uploaded_file($nome_temporario,"$diretorio_destino\img_$i.png")){
                        echo "Upload de arquivo realizado com sucesso!";
                        echo $_FILES["img_$i"]['type'];
                        if ($i == 6 ) {
                            header('location:../game/index.html');
                        };
                        }else{
                                echo "Não foi possível processar o upload";
                            }
                        
                }
                
                // 
            }
        }
    }
    
        
    
    include 'index.html';

?>

<?php 


    for ($i = 1; $i <= 6; $i++) {
        
        if(isset($_FILES["img_$i"])){
            if($_FILES["img_$i"]['error'] === UPLOAD_ERR_OK){
    
                $diretorio_destino = __DIR__ . '/../img';
                $nome_arquivo_original = $_FILES["img_$i"]['name'];
                $extencao_aceitas = array("image/jpg", "image/jpeg", "image/png");
                $nome_temporario = $_FILES["img_$i"]['tmp_name'];
                $extencao_arquivo = $_FILES["img_$i"]['type'];
    
                if(in_array($extencao_arquivo,$extencao_aceitas)){
                    if(move_uploaded_file($nome_temporario,"$diretorio_destino\img_$i.png")){

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
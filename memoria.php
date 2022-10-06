<html>
<head>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
    $num_blocos = 12;
    $colunas = round(sqrt($num_blocos));
    $linhas = $num_blocos / $colunas;
       
    for($i = 0;$i< $colunas; $i++){
        for($j = 0; $j < $linhas; $j++){
            $unidade = "<div class='bloco'></div>";
            echo $unidade;
        }
        echo "<br>";
    }

?>
</html>
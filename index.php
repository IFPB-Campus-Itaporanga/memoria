<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload/styles.css">
    <title>Document</title>
</head>
<body>

    <img src="img/logo TeacMemoryGame.png" alt="">

    <div>
        <a href="upload/index.php"> <button class="btn">NOVO JOGO</button></a>
        <?php 
            if (file_exists("img/img_1.png")) {
                echo "<a href='game/index.html'> <button class='btn'>JOGO ANTERIOR</button></a>";
            } 

                
            
        ?>
        
    </div>
    
   
    
</body>
</html>
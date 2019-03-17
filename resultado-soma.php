<!DOCTYPE html>



<html>
    <head>
        <meta charset="UTF-8"> 
        <title>resultado-soma.php</title>
         <form method="POST" action="soma.php">
        
    </head>
    <body>
        
        <?php
        
          $campo1 = $_POST ["Campo1"];
          $campo2 = $_POST ["Campo2"];
         
         
         
         $soma = $campo1 + $campo2;
         echo "A soma dos dois campos é: ". $soma;
         
      
        
        
        
        
        ?>
    </body>
</html>
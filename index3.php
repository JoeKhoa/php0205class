<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "banco" >
        <?php 
            for($i=1;$i<=8;$i++){
                for($j=1;$j<=8;$j++){
                    if(($i+$j)%2==0){
                        echo ' <div class = "oco trang"></div>';
                    }
                    else{
                        echo ' <div class = "oco den"></div>';
                    }
                }
            }
        ?>
    </div> 
</body>
</html>
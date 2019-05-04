<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class = "banco" >
        <?php 
            for($i=1;$i<=72;$i++){
                    if(($i%2==0)&&($i%9!=0)){
                        echo '<div class = "oco trang"></div>';
                    }
                    elseif(($i%2!=0)&&($i%9!=0)){
                        echo '<div class = "oco den"></div>';
                    }  
                    else{
                        echo '<div class = "oco body"></div>';
                    }
            }


        ?>
    </div> 
</body>
</html>
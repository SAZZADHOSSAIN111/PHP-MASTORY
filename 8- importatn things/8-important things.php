<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
<div class="parentdiv" >      
    <div class="advancepre1" >
        <?php 
        if( isset($_GET['lexus'])) {
            $lux = (int)  $_GET['lexus'];
            var_dump($lux); 
            var_dump($lux * 12);
            }
        ?>

        <!-- write a name called lexus on the ulr and add a value so you can see the output. -->

    </div>
</div>
    
</body>
</html>
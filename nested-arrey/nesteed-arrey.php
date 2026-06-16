<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./nested.css" />
    <title>NESTED ARREY</title>
</head>
<body>
     <div class="the-first-try">
        <div  class="pree"><?php

        function e($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            }
        $cars =[
            [
                'Name' => 'BMW',
                'Brand-Origin' => 'Germany',
                'Color' => 'Purple',
                "Description" => "is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever<br> since 1966, when designers at Letraset and James Mosley, the librarian at St <br>Bride Printing <?Library, took a 1914 Cicero translation and scrambled <br> it to make dummy text for Letraset's Body Type sheets. It has <br> survived not only many decades, but also the leap into electronic typesetting,<br> remaining essentially unchanged. It was popularised thanks to the",
                'Model' => [
                    'Bmw 01',
                    'Bmw 02',
                    'Bmw 03',
                    'Bmw 04',
                    'Bmw 05',
                    'Bmw 06',
                ]
                ],
            [
                'Name' => 'Toyota',
                'Brand-Origin' => 'Japan',
                'Color' => 'Purple',
                "Description" => "is simply dummy text of the printing and typesetting <br> industry. <br> Lorem Ipsum has been the industry's standard dummy <br> text ever since 1966, <br> when designers at Letraset and James Mosley, the librarian at St Bride Printing <?Library, took a 1914 <br> Cicero translation and scrambled it to make dummy <br> text for Letraset's Body Type sheets. It has survived not only many decades, but also the <br>leap into electronic <br> typesetting, remaining essentially unchanged. It was popularised thanks to the",
                'Model' => [
                    'Toyota 00',
                    'Toyota 01',
                    'Toyota 02',
                    'Toyota 03',
                    'Toyota 04',
                    'Toyota 05',
                ]
                ],
            [
                'Name' => 'BYD',
                'Brand-Origin' => 'China',
                'Color' => 'Purple',
                "Description" => "is simply dummy text of the printing and types setting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at  Letraset and James Mosley, the librarian at St Bride Printing <?Library, took a 1914 Cicero translation and scrambled it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also <br>the leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to the",
                'Model' => [
                    'BYD 01',
                    'BYD 02',
                    'BYD 03',
                    'BYD 04',
                    'BYD 05',
                    'BYD 06',
                ]
                ],

                [
                'Name' => 'Mercedes',
                'Brand-Origin' => 'Germany',
                'Color' => 'RED',
                "Description" => "is simply dummy text of the printing and types setting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at  Letraset an",
                'Model' =>[
                    
                ]
                ]
            ];
    
       /* foreach( $cars as $car) {
        var_dump ($car['Name']);
        var_dump($car['Brand-Origin']);
        var_dump($car['Description']);
         } */

         ?> </div> 
</div>

    <div class= "DetailsS">
        <?php foreach($cars as $car): ?>
            <details class= "details">
                <summary>Name: <?php echo e($car['Name']); ?> , Brand Origin:  <?php echo e($car['Brand-Origin']); ?> </summary>
                <p><?php echo e($car['Description']); ?> </p>
                <?php if (!empty($car['Model'])): ?>
                <ul>
                    <?php foreach( $car['Model'] as $model): ?>
                        <li><?php echo e($model); ?> </li>
                    <?php endforeach; ?> 
                </ul>
                <?php endif ?>
            </details>
        <?php endforeach; ?>  
    </div>
</body>
</html>
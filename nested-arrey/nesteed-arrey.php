<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./nested.css" />
    <title>NESTED ARREY</title>
</head>
<body>
    <pre><?php

        $cars =[
            [
                'Name' => 'BMW M4',
                'Brand-Origin' => 'Germany',
                'Color' => 'Purple',
                "Description" => "is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever<br> since 1966, when designers at Letraset and James Mosley, the librarian at St <br>Bride Printing <?Library, took a 1914 Cicero translation and scrambled <br> it to make dummy text for Letraset's Body Type sheets. It has <br> survived not only many decades, but also the leap into electronic typesetting,<br> remaining essentially unchanged. It was popularised thanks to the"
                ],
            [
                'Name' => 'Toyota',
                'Brand-Origin' => 'Japan',
                'Color' => 'Purple',
                "Description" => "is simply dummy text of the printing and typesetting <br> industry. <br> Lorem Ipsum has been the industry's standard dummy text ever since 1966, <br> when designers at Letraset and James Mosley, the librarian at St Bride Printing <?Library, took a 1914 Cicero translation and scrambled it to make dummy <br> text for Letraset's Body Type sheets. It has survived not only many decades, but also the <br>leap into electronic typesetting, remaining essentially unchanged. It was popularised thanks to the"
                ],
            [
                'Name' => 'BYD',
                'Brand-Origin' => 'China',
                'Color' => 'Purple',
                "Description" => "is simply dummy text of the printing and types<br>etting industry. Lorem Ipsum has been the industry's standard dummy text ever since 1966, when designers at <br> Letraset and James Mosley, the librarian at St Bride Printing <?Library, took a 1914 Cicero translation and scrambled <br>it to make dummy text for Letraset's Body Type sheets. It has survived not only many decades, but also <br>the leap into electronic typesetting, remaining essentially unchanged.<br> It was popularised thanks to the"
                ],
            ];
                
    var_dump($cars[0]['Name']); 
    var_dump($cars[0]['Brand-Origin']);

   ?> </pre>
    
</body>
</html>
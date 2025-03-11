<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Booleans</title>
</head>
<body>
<pre><?php
    var_dump('true');
    var_dump(true);

    $meaning = 42;
    var_dump($meaning > 13);
    var_dump($meaning < 13);
    var_dump($meaning == 13);

    var_dump(13 <= 13);
    var_dump(13 < 13);


    $name = 'Jannis';
    var_dump($name === 'Jannis');
    var_dump($name !== 'Jannis');

    $age = 30;
    var_dump($age === 30);
    var_dump($age === '30');



    ?></pre>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Arrays</title>
</head>
<body>
<pre><?php

    $categories = ['programming', 'business', 'technology', 'entertainment'];
    $categories[2] = 'Graphic Design';
    $categories[] = '3d design';
    unset($categories[2]);
    var_dump($categories);




    ?></pre>
</body>
</html>

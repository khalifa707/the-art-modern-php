<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Document</title>
</head>
<body>
<pre><?php
    $number = 15;
    $str = 'PHP';

    var_dump($number);
    var_dump(is_bool($str));
    var_dump(is_string($str));

    var_dump(is_integer($number));
    var_dump(is_float($number));
    var_dump(is_numeric($number));
    var_dump(is_string($number));
    var_dump(is_array($number));
    ?></pre>
</body>
</html>
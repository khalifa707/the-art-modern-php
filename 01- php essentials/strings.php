<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Strings in PHP</title>
</head>
<body>
<pre><?php
    $greeting = "Hello, world!";
    echo $greeting . "!!!";
    echo '<br />';

    $name = "John Doe";
    $subject= "PHP";

    $text = "I am " . $name .  " and I am studying " . $subject;
    echo $text;
    echo "\n";
   echo "\t"; echo $text;


    ?></pre>
</body>
</html>


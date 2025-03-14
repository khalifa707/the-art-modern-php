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
    if (in_array('programming', $categories)) {
        echo 'Programming exists';
    }

    var_dump(isset($categories[0])) . "</br>";
    var_dump(isset($categories[99])) . "</br>";
    var_dump(empty($categories[99])) . "</br>";
    var_dump(empty($categories[0])) . "</br>";


    ?></pre>
</body>
</html>
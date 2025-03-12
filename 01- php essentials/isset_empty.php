<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Isset & Empty</title>
</head>
<body>
<pre><?php
    $pageTitle = "PHP is Amazing!";
    var_dump(isset($pageTitle));
    var_dump(empty($pageTitle));

    if (isset($pageTitle)) {
    echo $pageTitle;}

    if (empty($pageTitle)) {
        echo "It is empty";}
    ?></pre>
</body>
</html>
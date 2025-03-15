<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>Giveaways</title>
</head>
<body>

<pre><?php
    $names = [
        'Emily Johnson',
        'Michael Smith',
        'Sarah Williams',
        'James Brown',
        'Jennifer Davis',
        'William Miller',
    ];

    $num = count($names);
    $choice = rand(0,$num-1);
    echo "The Winner's name is $names[$choice]\n";


    ?></pre>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="strings.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<pre><?php

    for ($x=0; $x < 10; $x++) {
        var_dump($x);
    }

    for ($x=0; $x < 10; $x=$x + 1) {
        var_dump($x);
    }
    for ($x=0; $x < 10; $x+=2) {
        var_dump($x);
    }
    ?></pre>

<ul>
    <?php for ($number = 0; $number <= 100; $number++) : ?>
    <?php if ($number === 10) continue; ?>
    <?php if ($number === 50) break; ?>
    <li>
        <?php echo $number?>
    </li>
    <?php endfor; ?>
</ul>

</body>
</html>
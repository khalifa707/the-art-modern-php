<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="strings.css">
    <title>GET</title>
</head>
<body>
<pre><?php

    var_dump($_GET);

    ?></pre>

<?php if (!empty($_GET['book'])): ?>
    <h1><?php echo $_GET['book']; ?></h1>
<?php endif; ?>

</body>
</html>